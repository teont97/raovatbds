<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post';
    public function post_images(){
    	return $this->hasMany('App\post_images','id_post','id');
    }
    public function hinhthuc(){
    	return $this->belongsTo('App\hinhthuc','id_hinhthuc','id');
    }
    public function User(){
    	return $this->belongsTo('App\User','id_user','id');
    }
    public function loaitin(){
    	return $this->belongsTo('App\loaitin','id_theloai','id');
    }
    public function loaiuptin(){
    	return $this->belongsTo('App\loaiuptin','id_uptin','id');
    }
    public function huong(){
    	return $this->belongsTo('App\huong','id_huong','id');
    }
    public function lienhe(){
    	return $this->hasMany('App\lienhe','id_post','id');
    }
}
