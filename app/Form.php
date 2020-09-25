<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    /**get students for each form/class could not us class because its reserved */
    protected $fillable = ['name'];


    public function students()
    {
        return $this->hasMany('App\Student');
    }
    
    public function teachers(){

        return $this->belongsToMany('App\Teacher');
    }
}
