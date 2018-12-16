<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Auth;
use Image;
use Hash;
use App\User;
use App\post_images;
use App\lienhe;
use File;
class PersonalController extends Controller
{
    public function getprofile(){
        $user = Auth::user();
        return view('client.pages.user_profile',compact('user'));
    }
    public function postUpdateProfile(Request $request){
                $user = Auth::user();
                $user->name = $request->name;
                $user->alias = $request->alias;
                $user->email = Auth::user()->email;
                $user->aboutme=$request->aboutme;
                $user->phone=$request->phone;
                $user->address=$request->address;
                $user->save();
                return back();      
    }
    public function changePostPassword(Request $request){
                $user = Auth::user();
                $curPassword = $request->current;
                $newPassword = $request->new;
                if (Hash::check($curPassword, $user->password)) {
                    $user->password = Hash::make($newPassword);
                    $user->save();
                    return back()->with('mesage','Bạn Đã Thây Đổi Mật Khẩu Thành Công  !!! ');
                }
                else
                {
                    return back()->with('mesage','Thay Đổi Mật Khẩu Thất Bại  !!! ');
                }
    }
    public function getmypost(){
        $data_user=Auth::user()->id;
        //dd($data_user);
        $data_mypost=post::where('id_user',$data_user)->paginate(5);
        return view('client.pages.my_post',compact('data_mypost'));
    }
    public function getmyfavorited(){
        return view('client.pages.my_favorited');
    }
    public function changepassword(){
        return view('client.pages.change_password');
    }
    public function postuploadavatar(Request $request){
        if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(150,150)->save(public_path('/client/img/avatar/' . $filename ) );
    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}
    	return redirect()->route('personal.profile');
    }
    public function GetEditMyPost($id){
        $EditMyPost=post::find($id);
        //dd($EditMyPost);
        return view('client.pages.edit_my_post',compact('EditMyPost'));
    }
    public function GetImages(Request $request, $id){
    $post=post::orderBy('id','DESC')->where('id',$id)->first();
    $data = [];
    foreach ($post->post_images as $image) {
    $data[] = [
    'id' => $image->id,
    'images' => $image->images,
    'url' => asset('storage/app/public/upload/images/' . $image->images),
    ];
    }
    return response()->json($data);
    }
    public function PostEditMyPost(Request $request){
        $data=$request->all();

        //dd($data);
        $post=post::find($request->id);
        $post->title=$request->txttitle;
         $post->id_hinhthuc=$request->slhinhthuc;
         $post->id_theloai=$request->slloaitin;
         $post->price=$request->txtgia;
         $post->area=$request->txtdientich;
         $post->room=1;
         $post->bathroom=$request->txtphongtam;
         $post->images='haha';
         $post->address=$request->txtdiachi;
         $post->id_tinh=$request->sltinh;
         $post->id_huyen=$request->slhuyen;
         $post->id_duong=$request->slphuong;
         $post->description=$request->message;
         $post->id_unit=$request->slunit;
         //dd($request->message);
         $data=$request->message;
         $post->id_uptin=$request->sluptin;
         $post->id_user=Auth::user()->id;
         $post->status=0;
         $post->date_start=date("Y-m-d", strtotime($request->dateStart));
         $post->date_end=date("Y-m-d", strtotime($request->dateEnd));
         $post->save(); 
         $post_id=$post->id;
         //dd($request->file('file'));
        // dd($dataEdit=$post->post_images as $images);
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as  $file ) {
                if ($file->isValid()) {
                    $name = $file->getClientOriginalName();
                    $type = $file->getClientOriginalExtension();
                    $path = $file->storeAs('public/upload/images', $name);
                    $post_images = new post_images();
			        $post_images->images = $file->getClientOriginalName();
			        $post_images->id_post = $post_id;
                    $post_images->save();
                }
            }
        }
        $user=Auth::user()->id;
        $lienhe= lienhe::where('id_post',$request->id)->first();
        $lienhe->hoten=$request->txtname;
        $lienhe->email=$request->txtemail;
        $lienhe->sodienthoai=$request->txtphone;
        $lienhe->id_post=$post_id;
        $lienhe->id_user=$user;
        $lienhe->save();
       return redirect()->route('personal.mypost')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Chỉnh Sửa Thành Công']);
    }
    public function PostDeleteImages(Request $request){
        $delete=post_images::find($request->id);
        File::delete('storage/app/public/upload/images/'.$delete['images']);
        $delete->delete();
        return response()->json("Đã Xóa Thành Công");
    }
    public function PostDeleteMypost(Request $request){
        $delete=post::find($request->id);
        foreach($delete->post_images as $deletes){
            File::delete('storage/app/public/upload/images/'.$deletes['images']);
            $deletes->delete();
        }
        $delete->delete();
        return response()->json("Đã Xóa Thành Công");
    }

}
