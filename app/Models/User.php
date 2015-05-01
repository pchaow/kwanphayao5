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
    protected $fillable = ['username', 'password', 'avatar', 'email', 'title', 'firstname', 'lastname', 'biography', 'organization'];

    /**
     * The attributes should be guarded to mass-assignment used by the model.
     *
     * @var array
     */
    protected $guarded = ['password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];

    // --DEFINE RELATIONSHIPS--
    /**
     * a User model "belongs to" role.
     *
     * @return object
     */
    public function role() {
        return $this->belongsTo('Role');
    }

}