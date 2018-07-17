<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class huong extends Model
{
    protected $table = 'huong';
    public function post(){
    	return $this->hasMany('App\post','id_huong','id');
    }
}
