<?php namespace App\Services;

/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

use App\Models\Category;
use App\Models\Content;
use App\Models\ContentEval;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Ramsey\Uuid\Uuid;
use \Request;
use \Auth;

class ContentEvalService extends BaseService
{

    var $withArr = ['user'];


    public function all($id)
    {
        $contentEval = ContentEval::whereHas('content', function ($q) use ($id) {
            $q->where('id','=',$id);
        })->whereHas('user', function ($q) {
            if (Auth::user()) {
                $q->where('id','=',Auth::user()->id);
            }
        })->first();
        return $contentEval;
    }


    public function store($contentId, array $input)
    {
        $content = Content::find($contentId);
        $contentEval = ContentEval::create($input);
        if (Auth::user()) {
            $user = Auth::user();
            $contentEval->firstname = $user->firstname;
            $contentEval->lastname = $user->lastname;

            $carbon = new Carbon($user->birthdate);

            $contentEval->age = $carbon->diffInYears(Carbon::now());
            $contentEval->sex = $user->sex;
            $contentEval->graduation = $user->graduation;
            $contentEval->job = $user->job;
            $contentEval->position = $user->position;
            $contentEval->department = $user->department;
            $contentEval->save();
            $contentEval->user()->associate($user)->save();
        } else {
            // do nothing
            $contentEval->save();
        }
        $contentEval->content()->save($content);

        return $contentEval;
    }

    public function save($id, array $input)
    {
        $contentEval = ContentEval::find($id);
        if (Auth::user()) {
            $user = Auth::user();
            $contentEval->firstname = $user->firstname;
            $contentEval->lastname = $user->lastname;

            $carbon = new Carbon($user->birthdate);

            $contentEval->age = $carbon->diffInYears(Carbon::now());
            $contentEval->sex = $user->sex;
            $contentEval->graduation = $user->graduation;
            $contentEval->job = $user->job;
            $contentEval->position = $user->position;
            $contentEval->department = $user->department;
            $contentEval->save();
        } else {
            // do nothing
            $contentEval->fill($input);
        }

        return $contentEval;
    }


}