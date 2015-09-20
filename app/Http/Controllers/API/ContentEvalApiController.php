<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\ContentEvalService;
use App\Services\UserService;
use Illuminate\Http\Request;

use \Input;

class ContentEvalApiController extends Controller {


    function __construct(ContentEvalService $service)
    {
        $this->service = $service;
    }

	public function index($contentId){
		return $this->service->all($contentId);
	}

	public function store($contentId)
	{
		return $this->service->store($contentId,Input::all());
	}

	public function update($id)
	{
        return $this->service->save($id,Input::all());
    }

}
