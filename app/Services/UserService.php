<?php namespace App\Services;
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

use App\Models\User as User;
use App\Models\Role as Role;
//use Illuminate\Http\Request;
//use Request;

class UserService extends BaseService {

    public function all(){
        return User::all();
    }

    public function getById($id){
        return User::with('role')->find($id);
    }

    public function save(array $input){

        if (isset($input['id'])) {
            $id = $input['id'];
            $user = User::find($id);
            $user->update(array_except($input,['role']));
            $user->save();

            $roleId = $input['role']['id'];
            $role = Role::find($roleId);

            $user->role()->associate($role)->save();

            return $user;
        } else {
            $user = User::updateOrCreate(array_except($input,['role']));
            $roleId = $input['role']['id'];

            $role = Role::find($roleId);
            $user->role()->associate($role)->save();

            return $user;
        }

    }

    public function delete(array $input){

        if(isset($input['id'])) {
            $id = $input['id'];
            $user = User::find($id);

            $role = $user->role()->first();

            if($role != null){
                $role_id = $role->id;
                $role = Role::find($role_id);
                $role->users()->detach($user->id);
            }
            $user->delete();

            return [true];
        } else {
            return [false];
        }
    }

}