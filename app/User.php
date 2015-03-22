<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

abstract class UserRole {

    const admin = 0;
    const user = 1;

}

abstract class UserStatus {

    const active = 0;
    const pending = 1;
    const inactive = 2;
    const banned = 3;

}

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable,
        CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Returns the User status.
     * 
     * @return string
     */
    public function getStatus() {
        switch ($this->status) {
            case UserStatus::active:
                return 'active';
                break;
            case UserStatus::pending:
                return 'pending';
                break;
            case UserStatus::inactive;
                return 'inactive';
                break;
            case UserStatus::banned;
                return 'banned';
                break;
            default:
                return 'Not Found';
        }
    }

    /**
     * Get the role of the User.
     * 
     * @return string
     */
    public function getRole() {
        switch ($this->role) {
            case UserRole::admin:
                return 'admin';
                break;
            case UserRole::user:
                return 'user';
                break;
            default:
                return 'Not found';
                break;
        }
    }

    /**
     * A User can have many Ticket assigned to him.
     * 
     * @return type
     */
    public function tickets() {
        return $this->hasMany('App\Ticket');
    }

}
