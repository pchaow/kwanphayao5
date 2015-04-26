<?php namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Http\Controllers\BaseController;
use \Input;

class CategoryApiController extends BaseController {


	public function __construct(CategoryService $categoryService){
		$this->categoryService = $categoryService;
	}

	public function getAll(){
		return $this->categoryService->all();
	}

	public function getIndex()
	{
		$with = ['parent'];

		$colFilter = [
			'name',
		];

		$relateColFilter = [
			'parent' => [
				'name'
			]
		];

		return  $this->categoryService->getPagination("Category",Input::all(),$colFilter,$relateColFilter,$with);

	}

	public function getView($id){

		return $this->categoryService->getById($id);

	}

	public function getEdit($id){
		return $this->getView($id);
	}

	public function postSave(){

		return $this->categoryService->saveCategory(Input::all());

	}

	public function postDelete(){

		return $this->categoryService->deleteCategory(Input::all());
	}


	public function postSaveOrder(){
		$input = Input::all();
		return $this->categoryService->updateOrder($input);
	}


}
