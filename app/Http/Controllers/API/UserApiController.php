<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\UserService;
use Illuminate\Http\Request;

use \Input;

class UserApiController extends Controller {


    function __construct(UserService $userService)
    {
        $this->userService = $userService;



    }


	public function index(){
        return $this->userService->getAll();
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return $this->userService->create();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
//		return Input::all();
		return $this->userService->store(Input::all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->userService->get($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return $this->userService->get($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        return $this->userService->save(Input::all());
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->userService->delete($id);
	}

}
