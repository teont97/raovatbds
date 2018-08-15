<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tinh;
use App\huyen;
use App\phuong;
class AddressController extends Controller
{
    public function getListTinh(){
        $data_tinh=tinh::orderBy('id','DESC')->get();
        return view('admin.address.tinh',compact('data_tinh'));
    }
    public function getListHuyen(){
        $data_huyen=huyen::orderBy('id','DESC')->get();
        return view('admin.address.huyen',compact('data_huyen'));
    }
    public function getListPhuong(){
        $data_phuong=phuong::orderBy('id','DESC')->get();
        return view('admin.address.phuong',compact('data_phuong'));
    }
    public function getCreateTinh(){
        return view('admin.address.create_tinh');
    }
    public function postCreateTinh(Request $request){
        $tinh= new tinh();
        $tinh->name=$request->txttinh;
        $tinh->alias=utf8tourl(utf8convert($request->txttinh));
        $tinh->save();
        return back()->with('mesage','Chúc Mừng Bạn Đã Thêm Thành Công ');
    }
    public function getCreateHuyen(){
        $data_tinh=tinh::orderBy('id','DESC')->get();
        return view('admin.address.create_huyen',compact('data_tinh'));
    }
    public function postCreateHuyen(Request $request){
        $huyen= new huyen();
        $huyen->name=$request->txthuyen;
        $huyen->alias=utf8tourl(utf8convert($request->txthuyen));
        $huyen->id_tinh=$request->sltinh;
        $huyen->save();
        return back()->with('mesage','Chúc Mừng Bạn Đã Thêm Thành Công ');
    }
    public function getCreatePhuong(){
        $data_tinh=tinh::orderBy('id','DESC')->get();
        return view('admin.address.create_phuong',compact('data_tinh'));
    }
    public function postCreatePhuong(Request $request){
        $phuong= new phuong();
        $phuong->name=$request->txtphuong;
        $phuong->alias=utf8tourl(utf8convert($request->txtphuong));
        $phuong->id_huyen=$request->slhuyen;
        $phuong->save();
        return back()->with('mesage','Chúc Mừng Bạn Đã Thêm Thành Công ');
    }
    public function deleteTinh(Request $request){
        $delete=tinh::find($request->id);
        $delete->delete();
    }
    public function deleteHuyen(Request $request){
        $delete=huyen::find($request->id);
        $delete->delete();
    }
    public function deletePhuong(Request $request){
        $delete=phuong::find($request->id);
        $delete->delete();
    }
    public function getEditTinh($id){
        $data_edit=tinh::find($id);
        return view('admin.address.edit_tinh',compact('data_edit'));
    }
    public function getEditHuyen($id){
        $data_edit=huyen::find($id);
        $data_tinh=tinh::orderBy('id','DESC')->get();
        return view('admin.address.edit_huyen',compact('data_edit','data_tinh'));
    }
    public function getEditPhuong($id){
        $data_edit=phuong::find($id);
        $data_tinh=tinh::orderBy('id','DESC')->get();
        return view('admin.address.edit_phuong',compact('data_edit','data_tinh'));
    }
    public function editPostTinh(Request $request , $id){
        $edit=tinh::find($id);
        $edit->name= $request->txttinh;
        $edit->alias=utf8tourl(utf8convert($request->txttinh));
        $edit->save();
        return back()->with('mesage','Đã sửa thành công !!! ');;
    }
    public function editPostHuyen(Request $request , $id){
        $edit=huyen::find($id);
        $edit->name= $request->txthuyen;
        $edit->alias=utf8tourl(utf8convert($request->txthuyen));
        $edit->id_tinh= $request->sltinh;
        $edit->save();
        return back()->with('mesage','Đã sửa thành công !!! ');;
    }
    public function editPostPhuong(Request $request , $id){
        $edit=phuong::find($id);
        $edit->name= $request->txtphuong;
        $edit->alias=utf8tourl(utf8convert($request->txtphuong));
        $edit->id_huyen= $request->slhuyen;
        $edit->save();
        return back()->with('mesage','Đã sửa thành công !!! ');;
    }


}
