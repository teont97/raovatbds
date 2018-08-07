<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;
class blog extends Model
{
    use Taggable;
    protected $table = 'blog';
    public function typeblog(){
    	return $this->belongsTo('App\typeblog','id_type','id');
    }
    public function User(){
    	return $this->belongsTo('App\User','id_user','id');
    }
    public function parent_type(){
    	return $this->belongsTo('App\parent_type','id_parent','id');
    }
    public function comment_blog(){
    	return $this->hasMany('App\comment_blog','id_blog','id');
    }
}
