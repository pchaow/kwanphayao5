<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleApiController extends Controller {

<<<<<<< HEAD
    function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;

    }


    /**
=======
    public function __construct(RoleService $roleService){
        $this->roleService = $roleService;
    }

	/**
>>>>>>> chaow
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->roleService->all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
<<<<<<< HEAD
		return $this->roleService->create();
=======
		//
>>>>>>> chaow
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
<<<<<<< HEAD
		return $this->roleService->store(Input::all());
=======
		//
>>>>>>> chaow
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
<<<<<<< HEAD
		return $this->roleService->getById($id);
=======
		//
>>>>>>> chaow
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
<<<<<<< HEAD
        return $this->roleService->getById($id);
=======
		//
>>>>>>> chaow
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
<<<<<<< HEAD
		return $this->roleService->save(Input::all());
=======
		//
>>>>>>> chaow
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
<<<<<<< HEAD
		return $this->roleService->delete($id);
=======
		//
>>>>>>> chaow
	}

}
