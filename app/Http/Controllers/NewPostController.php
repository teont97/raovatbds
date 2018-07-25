<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use File;
class NewPostController extends Controller
{
    public function getList(){
        $data_post=post::orderBy('id','DESC')->get();
        //dd($data_post);
        return view('admin.newpost.list',compact('data_post'));
    }
    public function postupdate(Request $request){
        //$data=$request->id;
        //echo $data;
        $data=post::find($request->id);
        if($data->status == 0 )
        {
            $data->status=1;  
            $data->save();
        }
        else {
            //echo "haha";
        }
        return response()->json($data);
    }
    public function postdelete(Request $request){
        $delete=post::find($request->id);
        $delete_img=$delete->post_images;
        //dd($delete);
        foreach ($delete_img as $iteam) {
            File::delete('storage/app/public/upload/images/'.$iteam['images']);
                }
        $delete->delete($request->id);
    }
}
