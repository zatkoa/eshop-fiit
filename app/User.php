<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'city', 'zip', 'street' , 'street_num','email', 'password', 'state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hasRole($role) {
        if ($this->roles()->where('name', $role)->first())
            return true;
        return false;
    }

    public function roles() {
        return $this->belongsToMany( 'App\Role')->withTimestamps();
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order')->withTimestamps()->withPivot('quantity');
    }

}
