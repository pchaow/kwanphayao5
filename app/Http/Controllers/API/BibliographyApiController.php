<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\BibliographyService;
use App\Services\ContentService;
use App\Services\UserService;
use Illuminate\Http\Request;

use \Input;

class BibliographyApiController extends Controller {


    function __construct(BibliographyService $service)
    {
        $this->service = $service;
    }


	public function index(){
        return $this->service->all();
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return $this->service->create();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->service->store(Input::all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->service->getById($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return $this->service->getById($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        return $this->service->save($id,Input::all());
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->service->delete($id);
	}

}
