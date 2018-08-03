<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repliespost extends Model
{
    protected $table = 'replies_post';
    public function User(){
    	return $this->belongsTo('App\User','id_user','id');
    }
    public function comment_post(){
    	return $this->belongsTo('App\comment_post','id_cmtpost','id');
    }
}
