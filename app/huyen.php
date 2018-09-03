<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class huyen extends Model
{
    protected $table = 'huyen';
    public function tinh(){
    	return $this->belongsTo('App\tinh','id_tinh','id');
    }
    public function xa(){
    	return $this->hasMany('App\xa','id_huyen','id');
    }
    public function post(){
    	return $this->hasMany('App\post','id_huyen','id');
    }
}
