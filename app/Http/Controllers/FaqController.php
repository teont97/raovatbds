<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faq;
class FaqController extends Controller
{
    public function getList(){
        $data_faq=faq::orderBy('id','DESC')->get();
        return view('admin.faq.list',compact('data_faq'));
    }
    public function getCreate(){
        return view('admin.faq.create');
    }
    public function getEdit($id){
        $data_edit=faq::find($id);
        return view('admin.faq.edit',compact('data_edit'));
    }
    public function postcreate(Request $request){
        $faq= new faq();
        $faq->title=$request->txttieude;
        $faq->content=$request->txtcontent;
        $faq->save();
        return redirect()->route('admin.faq.getlist');
    }
    public function postdelete(Request $request){
        $delete=faq::find($request->id);
        $delete->delete();
    }
    public function postedit(Request $request, $id){
        $edit=faq::find($id);
        $edit->title= $request->txttieude;
        $edit->content=$request->txtcontent;
        $edit->save();
        return back()->with('mesage','Đã lưu lại thành công !!! ');;
    }
}
