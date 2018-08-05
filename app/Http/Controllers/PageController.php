<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use DB;
use App\post;
use App\post_images;
use App\lienhe;
use App\loaitin;
use App\blog;
use App\comment_blog;
use App\comment_post;
use App\repliesblog;
use App\repliespost;
class PageController extends Controller
{
  
    public function postregister(Request $request){
            $User = new User();
            $User->name = $request->fullname;
            $User->email=$request->email;
            $User->password = Hash::make($request->password);
            $User->remember_token=$request->confirm_Password;
            $User->level=0;
            $User->save();
            return redirect()->route('getregister')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Đăng Ký Thành Công Vui Lòng Đăng Nhập Để Sử Dụng']);
    }
    public function postlogin(Request $request){
        $login = array(
            'email' => $request->email,
            'password'=> $request->Password
        );
        if(Auth::attempt($login)){
            return redirect()->route('personal.profile');
        }
        else{
            return redirect('login')->with('mesage','Đăng Nhập Không Thành Công . Vui Lòng Đăng Nhập Lại !!! ');
        }
    }
    public function logoutUser(){
        Auth::logout(); // giúp logout để xóa session . 
        return redirect()->back();
    }
    public function gethome(){
        $data_post=post::where('status','1')->orderBy('id','DESC')->take(6) ->get();
        $data_hinhthuc=DB::table('hinhthuc')->select('id','name')->get();
        $data_theloai=DB::table('loaitin')->select('id','name','id_hinhthuc')->get();
       // $data_huong=DB::table('huong')->select('id','name')->get();
        $data_tinh=DB::table('tinh')->select('id','name')->get();
        $data_duan=blog::where('id_parent','1')->orderBy('id','DESC')->get();
        $data_tintuc=blog::where('id_parent','2')->orderBy('id','DESC')->get();
        //dd($data_post);
        return view('client.pages.home',compact('data_post','data_hinhthuc','data_theloai','data_tinh','data_duan','data_tintuc'));
    }
    public function getproduct($id_type){
        $data_post=post::where('id_theloai',$id_type)->orderBy('id','DESC')->get();
        //$data_random=count($loaitin_random->post);
       // dd($data_random);
       // $loaitin_random=loaitin::orderBy('id','DESC')->get();
        //dd($loaitin_random);
        return view('client.pages.products',compact('data_post'));
    }
    public function getproductdetail($id_product){
        $post_detail=post::where('id',$id_product)->first();
        //dd($post_detail);
        //dd($post_detail);
        $post_random=post::orderByRaw("RAND()")->take(5)->get();
        $loaitin_random=loaitin::orderByRaw("RAND()")->take(6)->get();
        //dd($post_random);
        //dd($post_random);
        {
            $user=Auth::user();
        }
        return view('client.pages.product_detail',compact('post_detail','user'));
    }
    public function getcustomer(){
        return view('client.pages.customer');
    }
    public function getblog($id_type){
        $data_blog=blog::where('id_type',$id_type)->orderBy('id','DESC')->get();
        return view('client.pages.blog',compact('data_blog'));
    }
    public function getblogdetail($id_blog){
        $data_tintuc_detail=blog::where('id',$id_blog)->first();
        if(Auth::check())
        {
            $user=Auth::user();
        }
        return view('client.pages.blog_detail',compact('data_tintuc_detail','user'));
    }
    public function getcontact(){
        return view('client.pages.contact');
    }
    public function getabout(){
        return view('client.pages.about');
    }
    public function getlogin(){
        return view('client.pages.login');
    }
    public function getregister(){
        return view('client.pages.register');
    }
    public function get404(){
        return view('client.pages.404');
    }
    public function getsubmitpost(){
        $data_hinhthuc=DB::table('hinhthuc')->select('id','name')->get();
        $data_theloai=DB::table('loaitin')->select('id','name','id_hinhthuc')->get();
        $data_huong=DB::table('huong')->select('id','name')->get();
        $data_tinh=DB::table('tinh')->select('id','name')->get();
        $data_uptin=DB::table('loaiuptin')->select('id','name','value')->get();
        return view('client.pages.submit_post',compact('data_hinhthuc','data_theloai','data_huong','data_tinh','data_uptin'));
    }
    public function postsubmitpost(Request $request){
        /*
         $this->validate($request,[
            'txttitle'=>'required',
            'slhinhthuc'=>'required',
            'slloaitin'=>'required',
            'txtgia'=>'required',
            'txtdientich'=>'required',
            'txtphongngu'=>'required',
             'txtphongtam'=>'required',
            'txtdiachi'=>'required',
             'sltinh'=>'required',
             'slhuyen'=>'required',
             'slphuong'=>'required',
             'message'=>'required',
             'txtmattien'=>'required',
             'txtduongvao'=>'required',
             'slhuong'=>'required',
             'textnoithat'=>'required',
             'txtname'=>'required',
            'txtemail'=>'required|email',
             'txtphone'=>'required'
         ],
         [
             "txttitle.required"=>"vui lòng nhập  tiêu đề  !!!",
             "slhinhthuc.required"=>"vui lòng chọn hình thức đăng bài  !!!",
             "slloaitin.required"=>"vui lòng chọn thể loại  !!!",
                "txtgia.required"=>"vui lòng nhập giá sản phẩm  !!!",
             "txtdientich.required"=>"vui lòng nhập diện tích !!!",
             "txtphongngu.required"=>"vui lòng nhập số lượng phòng ngủ !!!",
             "txtphongtam.required"=>"vui lòng nhập số lượng phòng tắm !!!",
             "txtdiachi.required"=>"vui lòng nhập địa chỉ  !!!",
             "sltinh.required"=>"vui lòng chọn tỉnh / thành phố !!!",
             "slhuyen.required"=>"vui lòng chọn quận / huyện   !!!",
             "slphuong.required"=>"vui lòng chọn phường / xã   !!!",
             "message.required"=>"vui lòng nhập vào mô tả chi tiết !!!",
             "txtmattien.required"=>"vui lòng nhập số mặt tiền  !!!",
             "txtduongvao.required"=>"vui lòng nhập diện tích đường vào hẻm !!!",
             "textnoithat.required"=>"vui lòng nhập nội thất  !!!",
             "txtname.required"=>"vui lòng nhập tên liên hệ !!!",
             "txtemail.required"=>"vui lòng nhập địa chỉ email  !!!",
             "txtphone.required"=>"vui lòng nhập số điện thoại !!!",
             "txtemail.email"=>"định dạng email không chính xác !!!"
         ]);
         */
         $post= new post();
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
         //dd($request->message);
         $data=$request->message;
         $post->id_uptin=$request->sluptin;
         $post->id_user=Auth::user()->id;
         $post->status=0;
         $post->save(); 
         $post_id=$post->id;
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
        $lienhe= new lienhe();
        $lienhe->hoten=$request->txtname;
        $lienhe->email=$request->txtemail;
        $lienhe->sodienthoai=$request->txtphone;
        $lienhe->id_post=$post_id;
        $lienhe->id_user=$user;
        $lienhe->save();
        return response()->json(['status'=>true,'message'=>$data]);
    }
    public function deletefile(Request $request)
    {


    }
    public function autocomplete(Request $request){
        $result = post::where('title', 'like', '%' . $request->key . '%')->get();
        return response()->json($result);
    }
    public function getsearch(Request $request){
        $data_search=$request->key;
        $result_search = post::where('title', 'like', '%' . $request->key .'%')->get();
        return view('client.pages.search',compact('result_search','data_search'));
    }
    public function getsearchblog(Request $request){
        $data_search=$request->key;
        $result_search = blog::where('title', 'like', '%' . $request->key .'%')->orWhere('tomtat', 'like', '%' . $request->key .'%')->get();
        return view('client.pages.search_blog',compact('result_search','data_search'));
    }
    public function PostCommentBlog(Request $request){
        $cmt_blog = new comment_blog();
        $cmt_blog->content = $request->message;
        $cmt_blog->id_user=Auth::user()->id;
        $cmt_blog->id_blog =$request->IdBLog;
        $cmt_blog->save();
        return response()->json(['success'=>'Data is successfully added']);
    }
    public function PostCommentPost(Request $request){
        $cmt_post = new comment_post();
        $cmt_post->content = $request->message;
        $cmt_post->id_user=Auth::user()->id;
        $cmt_post->id_post = $request->IdPost;
        $cmt_post->save();
        return response()->json(['success'=>'Data is successfully added']);
    }
    public function PostReplyBlog(Request $request){
        $rep_blog = new repliesblog();
        $rep_blog->reply = $request->mesreply;
        $rep_blog->id_user=Auth::user()->id;
        $rep_blog->id_cmtblog = $request->comment_id;
        $rep_blog->save();
        return response()->json(['success'=>'Data is successfully added']);
    }
    public function PostReplyPost(Request $request){
        $rep_post = new repliespost();
        $rep_post->rely = $request->mesreply;
        $rep_post->id_user=Auth::user()->id;
        $rep_post->id_cmtpost = $request->comment_id;
        $rep_post->save();
        return response()->json(['success'=>'Data is successfully added']);
    }
}
