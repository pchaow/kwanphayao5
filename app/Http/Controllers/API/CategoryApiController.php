<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\CategoryService;
use Illuminate\Http\Request;
use \Input;

class CategoryApiController extends Controller {

    protected $children;

    function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;

        if (Input::has("children")){
            if (Input::get("children")=="true"){
                $this->categoryService->addColumn("children");
            }
        }
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->categoryService->getAll();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return $this->categoryService->create();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        return $this->categoryService->store(\Input::all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return $this->categoryService->get($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return $this->categoryService->get($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        return $this->categoryService->save(\Input::all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        return $this->categoryService->delete($id);
	}

}
