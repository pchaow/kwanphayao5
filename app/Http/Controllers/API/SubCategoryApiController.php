<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\SubCategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SubCategoryApiController extends Controller {

    function __construct(SubCategoryService $categoryService)
    {
        $this->subCategoryService = $categoryService;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		return $this->subCategoryService->getAll($id);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
        return $this->subCategoryService->store($id,\Input::all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($pid,$id)
	{
		return $this->subCategoryService->get($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($pid,$id)
	{
        return $this->subCategoryService->get($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($pid,$id)
	{
        return $this->subCategoryService->save($pid,\Input::all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($pid,$id)
	{
        return $this->subCategoryService->delete($pid,$id);
	}

}
