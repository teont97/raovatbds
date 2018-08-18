<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hinhthuc;
use App\loaitin;
use App\loaiuptin;
use App\huong;
use Response;
class GeneralController extends Controller
{
    public function getListHinhThuc(){
        $data_hinhthuc=hinhthuc::get();
        return view('admin.general.hinhthuc',compact('data_hinhthuc'));
    }
    public function getlisttheloai(){
        $data_theloai=loaitin::get();
        $data_hinhthuc=hinhthuc::get();
        return view('admin.general.theloai',compact('data_theloai','data_hinhthuc'));
    }
    public function getlistuptin(){
        $data_uptin=loaiuptin::get();
        return view('admin.general.loaiuptin',compact('data_uptin'));
    }
    public function getlisthuongnha(){
        $data_huongnha=huong::get();
        return view('admin.general.huongnha',compact('data_huongnha'));
    }
    public function editHinhthuc(Request $request){
        $edit=hinhthuc::find($request->id);
        $edit->name=$request->string;
        $edit->alias=utf8tourl(utf8convert($request->string));
        $edit->save();
        return Response::json(array('success'=>true,'data'=>$request->string));
    }
    public function editTheloai(Request $request){
        $edit=loaitin::find($request->id);
        $edit->name=$request->string;
        $edit->save();
        return Response::json(array('success'=>true,'data'=>$request->string));
    }
    public function editUptin(Request $request){
        $edit=loaiuptin::find($request->id);
        $edit->name=$request->string;
        $edit->value=$request->value;
        $edit->save();
        return Response::json(array('success'=>true,'data'=>$request->string));
    }
    public function editHuongnha(Request $request){
        $edit=huong::find($request->id);
        $edit->name=$request->string;
        $edit->save();
        return Response::json(array('success'=>true,'data'=>$request->string));
    }
    public function createHinhthuc(Request $request){  
        $hinhthuc= new hinhthuc();
        $hinhthuc->name=$request->string;
        $hinhthuc->alias=utf8tourl(utf8convert($request->string));
        $hinhthuc->save();
        return Response::json(array('success'=>true,'data'=>$request->string));
    }
    public function deleteHinhthuc(Request $request){
        $delete=hinhthuc::find($request->id);
        $delete->delete();
    }
    public function createtheloai(Request $request){
        $theloai= new loaitin();
        $theloai->name=$request->string;
        $theloai->id_hinhthuc=$request->id_hinhthuc;
        $theloai->save();
        return Response::json(array('success'=>true,'data'=>$request->string));
    }
    public function deleteTheloai(Request $request){
        $delete=loaitin::find($request->id);
        $delete->delete();
    }
    public function createHuongnha(Request $request){
        $huong= new huong();
        $huong->name=$request->string;
        $huong->save();
        return Response::json(array('success'=>true,'data'=>$request->string));
    }
    public function deleteHuongnha(Request $request){
        $delete=huong::find($request->id);
        $delete->delete();
    }
    public function createUptin(Request $request){
        $loaiuptin= new loaiuptin();
        $loaiuptin->name=$request->string;
        $loaiuptin->value=$request->value;
        $loaiuptin->save();
        return Response::json(array('success'=>true,'data'=>$request->string));
    }
    public function deleteUptin(Request $request){
        $delete=loaiuptin::find($request->id);
        $delete->delete();
    }
}

