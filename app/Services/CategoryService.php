<?php namespace App\Services;
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */
use App\Models\Category;
use App\Models\MainCategory;


class CategoryService extends BaseService {

    public function all(){
        return Category::all();
    }


    public function getById($id){
        return Category::with('parent')->find($id);
    }

    public function save(array $input){
        if(isset($input['id'])){
            $id = $input['id'];
            /* @var $category Category */
            $category = Category::find($id);
            $category->update(array_except($input,['content_type']));
            $category->content_type = $input['content_type']['id'];
            $category->save();

            $mainCategoryId = $input['parent']['id'];
            $mainCategory = MainCategory::find($mainCategoryId);

            $category->parent()->associate($mainCategory)->save();


            return $category;
        }else {

            $parent = $input['parent'];

            $category = Category::firstOrNew(array_except($input,['parent','content_type']));
            $category->content_type = $input['content_type']['id'];
            $mainCategoryId = $parent['id'];

            $mainCategory = MainCategory::find($mainCategoryId);
            $category->parent()->associate($mainCategory)->save();

            return $category;

        }
    }

    public function delete(array $input){

        /* @var $category Category */
        $category = Category::find($input['id']);

        $mid = $category->parent()->first();
        if($mid != null){
            $mmid = $mid->id;
            $mainCat = MainCategory::find($mmid);
            $mainCat->categories()->detach($category->id);
        }
        $category->delete();

        return $category;
    }


    public function updateOrder(array $input){
        foreach($input as $c){
            $id = $c['id'];
            $order = $c['order'];
            /* @var $category Category */
            $category = Category::find($id);
            $category->order = $order;
            $category->save();
        }

        return [true];
    }


}