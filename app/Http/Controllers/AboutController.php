<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use File;
class AboutController extends Controller
{
    public function getList(){
        $data_about=about::orderBy('id','DESC')->get();
        return view('admin.about.list',compact('data_about'));
    }
    public function getCreate(){
        return view('admin.about.create');
    }
    public function getEdit($id){
        $data_edit=about::find($id);
        return view('admin.about.edit',compact('data_edit'));
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
    public function postdelete(Request $request){
        $delete=about::find($request->id);
        File::delete('public/admin/dist/img/about/'.$delete['images']);
        $delete->delete();
    }
    public function postedit(Request $request, $id){
        $edit=about::find($id);
            if ($request->hasFile('fileupload2')) {
                File::delete('public/admin/dist/img/about/'.$edit['images']);
                $file_name=$request->file('fileupload2')->getClientOriginalName();
                $edit->images=$file_name;
                $request->file('fileupload2')->move('public/admin/dist/img/about',$file_name);
            }
        $edit->content= $request->txtdescript;
        $edit->save();
        return back();
    }
}
