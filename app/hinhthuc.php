<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhthuc extends Model
{
    protected $table = 'hinhthuc';
    public function loaitin(){
    	return $this->hasMany('App\loaitin','id_hinhthuc','id');
    }
    public function unit(){
    	return $this->hasMany('App\Unit','id_hinhthuc','id');
    }
    public function post(){
    	return $this->hasMany('App\post','id_hinhthuc','id');
    }
}
