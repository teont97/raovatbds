<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaiuptin extends Model
{
    protected $table = 'loaiuptin';
    public function post(){
    	return $this->hasMany('App\post','id_uptin','id');
    }
}
