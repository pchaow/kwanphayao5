<?php namespace App\Services;

/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */
use App\Models\Category;
use App\Models\MainCategory;


class CategoryService extends Service
{

    var $withArr = [];

    public function setWithArray(array $a)
    {
        $this->withArr = $a;
    }

    public function addColumn($col)
    {
        array_push($this->withArr, $col);
    }

    public function getAll()
    {
        $categories = Category::with($this->withArr)->get();
        $result = [];
        foreach ($categories as $category) {
            if ($category->parent == null || $category->parent == []) {
                array_push($result, $category);
            }
        }

        return $result;

    }

    public function get($id)
    {
        return Category::with($this->withArr)->find($id);
    }

    public function store(array $input)
    {

        $category = new Category();
        $category->fill($input);
        $category->save();
        return $category;

    }

    public function save(array $input)
    {

        if (array_has($input, 'id')) {
            $id = $input['id'];
            /* @var Category $category */
            $category = Category::find($id);
            $category->fill($input);
            $category->save();
            return $category;
        } else {
            return $this->store($input);
        }
    }

    public function create()
    {
        return new Category();
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->children()->sync([], true);
        return [$category::find($id)->delete()];
    }


}