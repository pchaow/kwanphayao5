<?php namespace App\Services;

/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

use App\Models\Category;
use App\Models\Content;
use Illuminate\Support\Facades\Config;
use Ramsey\Uuid\Uuid;
use \Request;
class ContentService extends BaseService
{

    var $withArr = ['category', 'category.parent','bibliographies'];

    public function __construct(ContentTypeService $contentTypeService)
    {
        $this->contentTypeService = $contentTypeService;
    }

    public function all()
    {
        return Content::with($this->withArr)->orderBy('created_at','desc')->get();
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
        $this->linkToReferences($content,$input);
        return $content;
    }

    public function save($id, array $input)
    {
        /* @var Content $content */
        $content = Content::find($id);
        $content->fill($input);
        $content->save();
        $this->linkToCategory($content, $input);
        $this->linkToReferences($content,$input);

        return $content;
    }

    public function delete($id)
    {
        return [Content::find($id)->delete()];
    }

    private function linkToReferences(Content $content,array $input){
        if (isset($input['bibliographies'])){
            $rArray = [];
            $references = $input['bibliographies'];
            foreach ($references as $r) {
                array_push($rArray,$r['id']);
            }
            $content->bibliographies()->sync($rArray,true);
        }else {
            $content->bibliographies()->sync([],true);
        }
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

    public function saveCover($id,  $input)
    {
        /* @var Content $content */
        $content = Content::find($id);
        $uuid = Uuid::uuid4();
        $storage_path = "app/content/$id/cover/";
        $destination_path = storage_path($storage_path);
        $input->file('file')->move($destination_path, $uuid);

        $logo_url = "/img/content/$id/cover/$uuid";
        $content->cover_url = $logo_url;
        $content->save();
        return $content;
    }

    public function removeCover($id){
        /* @var Content $content */
        $content = Content::find($id);
        $content->cover_url = null;
        $content->save();
        return $content;
    }

}