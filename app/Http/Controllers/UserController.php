<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class UserController extends Controller
{
    public function GetLogin(){
        return view('admin.login');
    }
    public function PostLogin(Request $request){
        $login = array(
            'email' => $request->txtemail,
            'password'=> $request->txtpassword
        );
        if(Auth::attempt($login)){
            return redirect()->route('admin.dashboard');
        }
        else{
            return redirect('/');
        }
    }
    public function AdminLogout(){
        Auth::logout(); // giúp logout để xóa session . 
        return redirect()->back();
    }
    public function postupdate(){

    }
    public function postdelete(){
        
    }
    public function getList(){
        $data_user=User::orderBy('id','DESC')->get();
        return view('admin.users.list',compact('data_user'));
    }
}
