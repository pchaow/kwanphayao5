<?php
namespace App\Services;
use App\Models\Role;
use App\Models\User;
use App\Models\UserType;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Rhumsaa\Uuid\Uuid;

/**
 * Created by PhpStorm.
 * UserRequest: chaow
 * Date: 4/7/2015
 * Time: 3:03 PM
 */

class UserService extends Service{

    var $withArr = ['roles'];

    public function getAll(){
        return User::with($this->withArr)->get();
    }

    public function get($id){
        $user = User::with($this->withArr)->find($id);
        return $user;
    }

    private function linkToRole(User $user, array $input){

        if (isset($input['roles'])){
            $roles = $input['roles'];
            $user->syncRoles($roles);
        }else {
            $user->syncRoles([]);
        }

        return $user;
    }


    private function setPassword(User $user, array $input){
        if(isset($input['password'])){
            $user->password = \Hash::make($input['password']);
        }

        return $user;
    }

    public function store(array $input){


        $user = new User();
        $user->fill($input);
        $user = $this->setPassword($user,$input);
        $user->save();
        $this->linkToRole($user,$input);
        return $user;
    }



    public function save(array $input){

        if (array_has($input,'id')){
            $id = $input['id'];
            /* @var User $user */
            $user = User::find($id);
            $user->fill($input);
            $user = $this->setPassword($user,$input);
            $user->save();
            $this->linkToRole($user,$input);
            return $user;
        }else {
            return $this->store($input);
        }
    }

    public function create()
    {
        return new User();
    }

    public function delete($id){
        return [User::find($id)->delete()];
    }



}
