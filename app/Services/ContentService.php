<?php namespace App\Services;
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

use App\Models\Content;

class ContentService extends BaseService {

    public function __construct(ContentTypeService $contentTypeService){
        $this->contentTypeService = $contentTypeService;
    }

    public function all(){
        return Content::all();
    }

    public function getById($id){
        $content = Content::with(['category','category.parent'])->find($id);
        $category = $content->category;
        $content_type = $this->contentTypeService->getView($category->content_type);
        $content->content_type = $content_type;
        return $content;
    }

    public function save(array $input){

        $contentTypeId = $input["content_type"]["id"];
        $contentType = $this->contentTypeService->getView($contentTypeId);
        $class=$contentType["class"];

        if (isset($input['id'])) {
            $id = $input['id'];

            $content = $class::find($id);
            $content->update(array_except($input,['category','content_type']));

            /* @var $content Content */
            $content->save();

            return $content;
        } else {
            $content = $class::updateOrCreate(array_except($input,['category','content_type']));

            $categoryId = $input['category']['id'];

            $category = Category::find($categoryId);
            $content->category()->associate($category)->save();

            return $content;
        }

    }

    public function delete(array $input){

        if(isset($input['id'])) {
            $id = $input['id'];

            /* @var $content Content */
            $content = Content::find($id);

            $category = $content->category()->first();

            if($category != null){
                $category_id = $category->id;
                $category = Category::find($category_id);
                $category->contents()->detach($content->id);
            }

            return [$content->delete()];
        } else {
            return [false];
        }
    }

}