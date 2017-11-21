<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    //protected $primaryKey = 'UserID';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }


    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) ||
                abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) ||
            abort(401, 'This action is unauthorized.');
    }
    /**
     * Check multiple roles
     * @param array $roles
     */
    public function hasAnyRole($roles)
    {
        //return null !== $this->roles()->whereIn('name', $roles)->first();
        if (is_array($roles)){
            foreach ($roles as $role){
                if ($this->hasRole($role)){
                    return true;
                }
            }
}
        else{
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }
    /**
     * Check one role
     * @param string $role
     */
    public function hasRole($role)
    {
        //return null !== $this->roles()->where('name', $role)->first();
        if ($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }

    public function isAdministrator() {
        return $this->roles()->where('title', 'admin')->exists();
    }
}
