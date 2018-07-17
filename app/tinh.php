<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tinh extends Model
{
    protected $table = 'tinh';
    public function huyen(){
    	return $this->hasMany('App\huyen','id_tinh','id');
    }
}
