<?php namespace App\Services;

/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

use App\Models\Role as Role;

class RoleService extends BaseService
{

    public function all()
    {
        return Role::all();
    }


    public function getById($id)
    {
        return Role::find($id);
    }

    public function create()
    {
        return new Role();
    }

    public function store(array $input)
    {
        return $this->save($input);
    }

    public function save(array $input)
    {


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

    public function delete($id)
    {
        /* @var Role $role */
        $role = Role::find($id);
        $role->delete();
        return $role;

    }

}