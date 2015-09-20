<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

//class User extends AbstrctIModel implements UserInterface, RemindableInterface {
class User extends AbstrctIModel implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

    protected  $label = "User";
    /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = 'neo4j';

    // --MASS ASSIGNMENT--
    /**
     * The attributes should be fillable to mass-assignment used by the model.
     *
     * @var array
     */
    protected $fillable = ['password', 'email', 'title', 'firstname', 'lastname'
        ,'sex','position','department','birthdate','graduation','job'];

    /**
     * The attributes should be guarded to mass-assignment used by the model.
     *
     * @var array
     */
    protected $guarded = ['password'];

    protected $hidden = ['password', 'remember_token'];


    public function roles() {
        return $this->belongsToMany("App\Models\Role","USER_ROLE");
    }


    public function syncRoles(array $roles){
        $ids = [];
        foreach($roles as $role){
            array_push($ids,$role['id']);
        }
        $this->roles()->sync($ids,true);
    }

    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function isAdmin(){
        $roles = $this->roles;
        foreach($roles as $role){
            if($role->key == 'admin'){
                return true;
            }
        }
        return false;
    }

}