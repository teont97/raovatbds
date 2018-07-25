<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    protected $table = 'loaitin';
    public function hinhthuc(){
    	return $this->belongsTo('App\hinhthuc','id_hinhthuc','id');
    }
    public function post(){
    	return $this->hasMany('App\post','id_theloai','id');
    }
}
