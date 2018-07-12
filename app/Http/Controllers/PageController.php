<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use DB;
class PageController extends Controller
{
  
    public function postregister(Request $request){
            $User = new User();
            $User->name = $request->fullname;
            $User->email=$request->email;
            $User->password = Hash::make($request->password);
            $User->remember_token=$request->confirm_Password;
            $User->level=0;
            $User->save();
            return redirect()->route('getregister')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Đăng Ký Thành Công Vui Lòng Đăng Nhập Để Sử Dụng']);
    }
    public function postlogin(Request $request){
        $login = array(
            'email' => $request->email,
            'password'=> $request->Password
        );
        if(Auth::attempt($login)){
            return redirect()->route('personal.profile');
        }
        else{
            return redirect('login')->with('mesage','Đăng Nhập Không Thành Công . Vui Lòng Đăng Nhập Lại !!! ');
        }
    }
    public function logoutUser(){
        Auth::logout(); // giúp logout để xóa session . 
        return redirect()->back();
    }
    public function gethome(){
        return view('client.pages.home');
    }
    public function getproduct(){
        return view('client.pages.products');
    }
    public function getcustomer(){
        return view('client.pages.customer');
    }
    public function getblog(){
        return view('client.pages.blog');
    }
    public function getcontact(){
        return view('client.pages.contact');
    }
    public function getlogin(){
        return view('client.pages.login');
    }
    public function getregister(){
        return view('client.pages.register');
    }
    public function get404(){
        return view('client.pages.404');
    }
    public function getsubmitpost(){
        $data_hinhthuc=DB::table('hinhthuc')->select('id','name')->get();
        $data_theloai=DB::table('loaitin')->select('id','name','id_hinhthuc')->get();
        $data_huong=DB::table('huong')->select('id','name')->get();
        return view('client.pages.submit_post',compact('data_hinhthuc','data_theloai','data_huong'));
    }
}
