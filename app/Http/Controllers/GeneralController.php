<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hinhthuc;
use App\loaitin;
use App\loaiuptin;
use App\huong;
class GeneralController extends Controller
{
    public function getListHinhThuc(){
        $data_hinhthuc=hinhthuc::get();
        return view('admin.general.hinhthuc',compact('data_hinhthuc'));
    }
    public function getlisttheloai(){
        $data_theloai=loaitin::get();
        return view('admin.general.theloai',compact('data_theloai'));
    }
    public function getlistuptin(){
        $data_uptin=loaiuptin::get();
        return view('admin.general.loaiuptin',compact('data_uptin'));
    }
    public function getlisthuongnha(){
        $data_huongnha=huong::get();
        return view('admin.general.huongnha',compact('data_huongnha'));
    }
}
