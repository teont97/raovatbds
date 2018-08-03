<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment_blog extends Model
{
    protected $table = 'cmtblog';
    public function User(){
    	return $this->belongsTo('App\User','id_user','id');
    }
    public function blog(){
    	return $this->belongsTo('App\blog','id_blog','id');
    }
    public function repliesblog(){
    	return $this->hasMany('App\repliesblog','id_cmtblog','id');
    }
}
