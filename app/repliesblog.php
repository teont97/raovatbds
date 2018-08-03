<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repliesblog extends Model
{
    protected $table = 'replies_blog';
    public function User(){
    	return $this->belongsTo('App\User','id_user','id');
    }
    public function comment_blog(){
    	return $this->belongsTo('App\comment_blog','id_cmtblog','id');
    }
}
