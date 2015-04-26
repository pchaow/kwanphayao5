<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	protected  function  getPage(){
		if (Input::has('page')){
			$page = Input::get('page');
		}else {
			$page=1;
		}

		return $page;
	}

	protected function getDataFilter(){
		if (Input::has('filter')){
			$filter = Input::get('filter');

			$dataFilter = [
				"name" => $filter,
				"type" => $filter
			];

		}else {
			$dataFilter = [];
		}

		return $dataFilter;
	}

	protected function getOrderByFilter(){
		if(Input::has('orderby')){
			$orderBy = Input::get('orderby');
			if(Input::has('orderType')){
				$orderType = Input::get('orderType');
			}else {
				$orderType = "asc";
			}

			$orderFilter = [
				$orderBy => $orderType
			];
		}else {
			$orderFilter = [];
		}

		return $orderFilter;
	}

}
