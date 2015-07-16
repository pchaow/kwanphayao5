<?php namespace App\Services;

/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

use App\Models\Category;
use App\Models\Bibliography;

class BibliographyService extends BaseService
{

    var $withArr = [];

    public function all()
    {
        return Bibliography::with($this->withArr)->get();
    }

    public function getById($id)
    {
        $bibliography = Bibliography::with($this->withArr)->find($id);
        return $bibliography;
    }

    public function create()
    {
        return new Bibliography();
    }

    public function store(array $input)
    {
        $bibliography = Bibliography::create($input);
        $bibliography->save();
        return $bibliography;
    }

    public function save($id, array $input)
    {
        /* @var Bibliography $Bibliography */
        $bibliography = Bibliography::find($id);
        $bibliography->fill($input);
        $bibliography->save();
        return $bibliography;
    }

    public function delete($id)
    {
        return [Bibliography::find($id)->delete()];
    }

}