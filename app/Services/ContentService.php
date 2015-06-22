<?php namespace App\Services;

/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

use App\Models\Category;
use App\Models\Content;

class ContentService extends BaseService
{

    var $withArr = ['category', 'category.parent'];

    public function __construct(ContentTypeService $contentTypeService)
    {
        $this->contentTypeService = $contentTypeService;
    }

    public function all()
    {
        return Content::with($this->withArr)->get();
    }

    public function getById($id)
    {
        $content = Content::with($this->withArr)->find($id);
        return $content;
    }

    public function create()
    {
        return new Content();
    }

    public function store(array $input)
    {
        $content = Content::create($input);
        $content->save();
        $this->linkToCategory($content, $input);
        return $content;
    }

    public function save($id, array $input)
    {
        /* @var Content $content */
        $content = Content::find($id);
        $content->fill($input);
        $content->save();
        $this->linkToCategory($content, $input);

        return $content;
    }

    public function delete($id)
    {
        return [Content::find($id)->delete()];
    }

    private function linkToCategory(Content $content, array $input)
    {
        if (isset($input['category'])) {
            $cid = $input['category']['id'];
            $category = Category::find($cid);
            $content->category()->dissociate();
            $content->category()->associate($category)->save();
        }
        return $content;
    }

}