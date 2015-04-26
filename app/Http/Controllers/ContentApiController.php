<?php namespace App\Http\Controllers;

use App\Models\Content;
use App\Services\ContentService;
use \Input;

class ContentApiController extends BaseController {

    public function __construct(ContentService $contentService) {
        $this->contentService = $contentService;
    }

    public function getIndex() {

        $with = ['category'];

        $colFilter = [
            "title",
        ];

        $relateColFilter = [
            'category' => [
                'name'
            ]
        ];
        $input = Input::all();

        $input['orderBy'] = 'created_at';
        $input['orderType'] = 'DESC';


        return  $this->contentService->getPagination("Content",$input,$colFilter,$relateColFilter,$with);

    }

    public function getView($id) {
        $content = $this->contentService->getById($id);
        return $content;
    }

    public  function getEdit($id) {
        return $this->getView($id);
    }

    public function postSave() {

        return $this->contentService->save(Input::all());
    }

    public function postDelete() {
        return $this->contentService->delete(Input::all());

    }





    // specific content data loader


}