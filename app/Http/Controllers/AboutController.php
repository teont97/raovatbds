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
}
