<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lienhe extends Model
{
    protected $table = 'lienhe';
    public function post(){
    	return $this->belongsTo('App\post','id_post','id');
    }
    public function user(){
    	return $this->belongsTo('App\User','id_lienhe','id');
    }
}
