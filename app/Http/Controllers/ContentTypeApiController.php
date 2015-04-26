<?php namespace App\Http\Controllers;

use App\Services\ContentTypeService;

class ContentTypeApiController extends BaseController
{

    public function __construct(ContentTypeService $contentTypeService) {
        $this->contentTypeService = $contentTypeService;
    }

    public function getAll()
    {
        return $this->contentTypeService->getAll();
    }

    public function getView($id){
        return $this->contentTypeService->getView($id);
    }
}