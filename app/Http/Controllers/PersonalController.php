<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Auth;
use Image;
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
    public function postuploadavatar(Request $request){
        if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(150,150)->save(public_path('/client/img/avatar/' . $filename ) );
    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}
    	return redirect()->route('personal.profile');
    }
}
