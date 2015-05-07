<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleApiController extends Controller {

    function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;

    }


    /**
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
		return $this->roleService->create();

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->roleService->store(Input::all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->roleService->getById($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return $this->roleService->getById($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->roleService->save(Input::all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->roleService->delete($id);
	}

}
