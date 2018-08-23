<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_email;
class DataController extends Controller
{
    public function getDataEmail(){
        $data_email=data_email::orderBy('id','DESC')->get();
        // dd($data_faq);
         return view('admin.data.email_duan',compact('data_email'));
    }
}
