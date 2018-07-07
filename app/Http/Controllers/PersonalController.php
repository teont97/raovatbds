<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function getprofile(){
        return view('client.pages.user_profile');
    }
    public function getmypost(){
        return view('client.pages.my_post');
    }
    public function getmyfavorited(){
        return view('client.pages.my_favorited');
    }
    public function changepassword(){
        return view('client.pages.change_password');
    }
}
