<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeblog extends Model
{
    protected $table = 'typeblog';
    public function blog(){
    	return $this->hasMany('App\blog','id_type','id');
    }
    public function parent_type(){
    	return $this->belongsTo('App\parent_type','id_parent','id');
    }
}
