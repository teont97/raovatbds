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
    public function postcreate(Request $request){
        $faq= new faq();
        $faq->title=$request->txttieude;
        $faq->content=$request->txtcontent;
        $faq->save();
        return redirect()->route('admin.faq.getlist');
    }
}
