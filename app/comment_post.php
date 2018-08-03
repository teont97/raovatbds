<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment_post extends Model
{
    protected $table = 'cmtpost';
    public function User(){
    	return $this->belongsTo('App\User','id_user','id');
    }
    public function post(){
    	return $this->belongsTo('App\post','id_post','id');
    }
    public function repliespost(){
    	return $this->hasMany('App\repliespost','id_cmtpost','id');
    }
}
