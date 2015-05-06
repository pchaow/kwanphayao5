<?php namespace App\Services;
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */
use App\Models\Category;
use App\Models\MainCategory;


class SubCategoryService extends Service {

    var $withArr = ["parent"];

    public function __construct(CategoryService $categoryService){
        $this->categoryService = $categoryService;
    }

    public function setWithArray(array $a){
        $this->withArr = $a;
    }

    public function getAll($id){
        $category = Category::find($id);
        return $category->children;
    }

    public function get($id){
        return Category::with($this->withArr)->find($id);
    }

    public function store($id,array $input){


        $parent = Category::find(intval($id));

        $category = new Category();
        $category->fill($input);
        $category->save();

        $category->parent()->associate($parent)->save();

        return $category;

    }

    public function save($pid,array $input){

        if (array_has($input,'id')){
            $id = $input['id'];
            /* @var Category $category */
            $category = Category::find($id);
            $category->fill($input);
            $category->save();
            return $category;
        }else {
            return $this->store($pid,$input);
        }
    }

    public function create()
    {
        return new Category();
    }

    public function delete($pid,$id){
        $parent = Category::find($pid);
        /* @var Category $category */
        $category = Category::find($id);

        $parent->children()->detach([$category->id]);

        return [$category->delete()];
    }


}