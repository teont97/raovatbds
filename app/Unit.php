<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';
    public function hinhthuc(){
    	return $this->belongsTo('App\hinhthuc','id_hinhthuc','id');
    }
    public function post(){
    	return $this->hasMany('App\post','id_unit','id');
    }
}
