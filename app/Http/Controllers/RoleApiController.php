<?php namespace App\Http\Controllers;

use App\Models\Role as Role;
use App\Services\RoleService;
use \Input;
use \Validator;

class RoleApiController extends BaseController {

    public function __construct(RoleService $roleService) {
        $this->roleService = $roleService;
    }

    public function getAll(){
        return $this->roleService->all();
    }

    public function getIndex() {
        $with = [];

        $colFilter = [
            'name',
            'description',
        ];

        $relateColFilter = [];

        return $this->roleService->getPagination("Role",Input::all(),$colFilter,$relateColFilter,$with);
    }

    public function getView($id) {
        return $this->roleService->getById($id);
    }

    public function getEdit($id) {
        return $this->getView($id);
    }

    public function postSave() {


        $validator = Validator::make(
            Input::all(),
            array('name' => 'required')
        );

        if ($validator->fails()) {
            return null;
        } else {
            return $this->roleService->save(Input::all());
        }
    }

    public function postDelete() {
        return $this->roleService->delete(Input::all());
    }

}