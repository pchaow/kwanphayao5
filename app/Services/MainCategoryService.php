<?php namespace App\Services;

/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

use App\Models\MainCategory;
use \Input;

class MainCategoryService extends BaseService
{

    public function all()
    {
        return MainCategory::orderBy('order')->get();
    }

    public function getById($id)
    {
        return MainCategory::find($id);
    }


    public function save(array $input)
    {

        if (isset($input['id'])) {
            $id = $input['id'];

            /* @var $category MainCategory */
            $category = MainCategory::find($id);
            $category->update($input);

            $category->save();

            return $category;
        } else {
            $category = MainCategory::firstOrNew($input);
            $category->order = 99999;
            $category->save();

            return $category;
        }

    }

    public function delete(array $input)
    {
        if (Input::has('id')) {
            $id = Input::get('id');
            $mainCategory = MainCategory::find($id);
            $this->mainCategoryService->delete($mainCategory);
            return [true];
        } else {
            return [false];
        }
    }

    public function getCategories($id)
    {
        return MainCategory::find($id)->categories()->orderBy('order','asc')->get();

    }

    public function updateOrder(array $input){
        foreach($input as $c){
            $id = $c['id'];
            $order = $c['order'];

            /* @var $category MainCategory */
            $category = MainCategory::find($id);
            $category->order = $order;
            $category->save();
        }

        return [true];
    }


}