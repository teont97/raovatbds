<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parent_type extends Model
{
    protected $table = 'parent_type';
    public function typeblog(){
    	return $this->hasMany('App\typeblog','id_parent','id');
    }
    public function blog(){
    	return $this->hasMany('App\blog','id_parent','id');
    }
}
