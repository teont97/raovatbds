<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Auth;
use Image;
use Hash;
use App\User;
class PersonalController extends Controller
{
    public function getprofile(){
        $user = Auth::user();
        return view('client.pages.user_profile',compact('user'));
    }
    public function postUpdateProfile(Request $request){
                $user = Auth::user();
                $user->name = $request->name;
                $user->alias = $request->alias;
                $user->email = Auth::user()->email;
                $user->aboutme=$request->aboutme;
                $user->phone=$request->phone;
                $user->address=$request->address;
                $user->save();
                return back();      
    }
    public function changePostPassword(Request $request){
                $user = Auth::user();
                $curPassword = $request->current;
                $newPassword = $request->new;
                if (Hash::check($curPassword, $user->password)) {
                    $user->password = Hash::make($newPassword);
                    $user->save();
                    return back()->with('mesage','Bạn Đã Thây Đổi Mật Khẩu Thành Công  !!! ');
                }
                else
                {
                    return back()->with('mesage','Thay Đổi Mật Khẩu Thất Bại  !!! ');
                }
    }
    public function getmypost(){
        $data_user=Auth::user()->id;
        //dd($data_user);
        $data_mypost=post::where('id_user',$data_user)->paginate(5);
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
