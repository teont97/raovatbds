<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_images extends Model
{
    protected $table = 'post_images';
    public function post(){
    	return $this->belongsTo('App\post','id_post','id');
    }
}
