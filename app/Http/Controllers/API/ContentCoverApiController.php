<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\ContentService;
use App\Services\UserService;
use Illuminate\Http\Request;

use \Input;

class ContentCoverApiController extends Controller {


    function __construct(ContentService $service)
    {
        $this->service = $service;
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		return $this->service->saveCover($id,Input::instance());
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->service->saveCover($id,Input::instance());
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->service->removeCover($id);
	}

}
