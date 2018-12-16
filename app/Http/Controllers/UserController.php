<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;
use App\Http\Requests\RegisterRequest;
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
        $data_user=User::where('level',1)->orderBy('id','DESC')->get();
        return view('admin.users.list_system',compact('data_user'));
    }
    public function postcreate(Request $request){
        $User= new User();
        $User->name=$request->txtname;
        $User->level=$request->sllevel;
        $User->email=$request->txtemail;
        $User->password=Hash::make($request->txtpassword);
        $User->save();
        return back()->with('mesage','Bạn Đã Tạo Thành Công  ');;
    }
    public function getcreate(){
        return view('admin.users.create');
    }
    public function getListCustomer(){
        $data_customer = User::where('level',0)->orderBy('id','DESC')->get();
        return view('admin.users.list_customer',compact('data_customer'));
    }
    public function getListBorker(){
        $data_borker = User::where('level',2)->orderBy('id','DESC')->get();
        return view('admin.users.list_borker',compact('data_borker'));
    }
}
