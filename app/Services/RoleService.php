<?php namespace App\Services;
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

use App\Models\Role as Role;

class RoleService extends BaseService {

    public function all(){
        return Role::all();
    }
    

    public function getById($id){
        return Role::find($id);
    }

    public function save(array $input){


        if (isset($input['id'])) {
            $id = $input['id'];
            /* @var $role Role */
            $role = Role::find($id);
            $role->update($input);
            $role->save();

            return $role;
        } else {
            $role = Role::firstOrNew($input);
            $role->save();
            return $role;
        }

    }

    public function delete(array $input){

        if (isset($input['id'])) {
            $id = $input['id'];
            /* @var $role Role */
            $role = Role::find($id);
            $role->delete();
            return [true];
        } else {
            return [false];
        }
    }

}