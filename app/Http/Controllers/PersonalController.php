<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Auth;
class PersonalController extends Controller
{
    public function getprofile(){
        return view('client.pages.user_profile');
    }
    public function getmypost(){
        $data_user=Auth::user()->id;
        //dd($data_user);
        $data_mypost=post::where('id_user',$data_user)->get();
        return view('client.pages.my_post',compact('data_mypost'));
    }
    public function getmyfavorited(){
        return view('client.pages.my_favorited');
    }
    public function changepassword(){
        return view('client.pages.change_password');
    }
}
