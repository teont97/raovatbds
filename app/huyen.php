<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class huyen extends Model
{
    protected $table = 'huyen';
    public function tinh(){
    	return $this->belongsTo('App\tinh','id_tinh','id');
    }
}
