<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function post(){
    	return $this->hasMany('App\post','id_user','id');
    }
    public function lienhe(){
    	return $this->hasMany('App\lienhe','id_user','id');
    }
    public function blog(){
    	return $this->hasMany('App\blog','id_user','id');
    }
}
