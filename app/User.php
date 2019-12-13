<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public function subject(){
        return $this->hasMany('App\Subject');
    }

    public function attendance(){
        return $this->hasMany('App\Attendance');
    }


    public function behave(){
        return $this->hasMany('App\Behave');
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstName','lastName','school', 'email', 'password','title','parent_name','age','parent_phone','class'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
