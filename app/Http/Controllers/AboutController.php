<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
class AboutController extends Controller
{
    public function getList(){
        $data_about=about::orderBy('id','DESC')->get();
        return view('admin.about.list',compact('data_about'));
    }
    public function getCreate(){
        return view('admin.about.create');
    }
    public function postcreate(Request $request){
        $file_name=$request->file('fileupload1')->getClientOriginalName();
        $about= new about();
        $about->content=$request->txtdescript;
        $about->images=$file_name;
        $about->role=0;
        $request->file('fileupload1')->move('public/admin/dist/img/about',$file_name);
        $about->save();
        return redirect()->route('admin.about.getlist');
    }
}
