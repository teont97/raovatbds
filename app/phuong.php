<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phuong extends Model
{
    protected $table = 'phuong';
    public function huyen(){
    	return $this->belongsTo('App\huyen','id_huyen','id');
    }
      public function post(){
    	return $this->hasMany('App\post','id_duong','id');
    }
}
