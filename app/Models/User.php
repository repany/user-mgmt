<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','address','phone','email','password'
    ];

    protected $appends = [
        'name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function getNameAttribute(){

        return $this->first_name . " " .$this->last_name;
    }

    function getFirstNameAttribute($value){

        return ucwords($value);
    }

    function setPasswordAttribute($value){

        $this->attributes['password']=bcrypt($value);
    }
}
