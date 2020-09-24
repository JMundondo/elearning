<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $fillable = ['name','email','password','form_name','form_id'];
    

    /**form/class relationship with student */
    public function form()
    {
        return $this->belongsTo('App\Form');
    }
}
