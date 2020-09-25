<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    protected $fillable = ['name','email','password','subjects'];

    public function forms(){

        return $this->belongsToMany('App\Form');

    }
}
