<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\blog;
use App\post;
use App\data_email;
class DashboardController extends Controller
{
    public function GetDashboard(){
        $data_project=blog::where('id_parent',1)->orderBy('id','DESC')->get();
        $data_blog=blog::where('id_parent',2)->orderBy('id','DESC')->get();
        $data_post=post::orderBy('id','DESC')->get();
        $data_email=data_email::all()->count();

        return view('admin.dashboard.dashboard',compact('data_project','data_blog','data_post','data_email'));
    }
}
