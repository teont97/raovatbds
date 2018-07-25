<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blog';
    public function typeblog(){
    	return $this->belongsTo('App\typeblog','id_type','id');
    }
}
