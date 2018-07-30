<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\typeblog;
use App\parent_type;
use App\blog;
use Auth;
class BlogController extends Controller
{
    public function getListTypeBlog(){
        $data_typeblog=typeblog::orderBy('id','DESC')->get();
        return view('admin.blog.list_type',compact('data_typeblog'));
    }
    public function getListBlog(){
        $data_blog=blog::get();
        dd($data_blog);
        return view('admin.blog.list_blog',compact('data_blog'));
    }
    public function getBlog(){
        $data_parent=parent_type::get();
        $data_type=typeblog::get();
        return view('admin.blog.create_blog',compact('data_parent','data_type'));
    }
    public function postBlog(Request $request){
        $this->validate($request,[
            'txttieude'=>'required',
            'short'=>'required',
            'content'=>'required',
            'sltypeblog'=>'required',
        ],
        [
            "txttieude.required"=>"Vui lòng nhập  tiêu đề  !!!",
            "short.required"=>"Vui lòng nhâp vào tóm tắt bài viết   !!!",
            "content.required"=>"Vui lòng nhập vào nội dung bài viết   !!!",
            "sltypeblog.required"=>"vui lòng chọn thể loại  !!!",
        ]);
        $file_name=$request->file('fileupload')->getClientOriginalName();
        $blog= new blog();
        $blog->title=$request->txttieude;
        $blog->alias=utf8tourl(utf8convert($request->txttieude));
        $blog->tomtat=$request->short;
        $blog->content=$request->content;
        $blog->view=0;
        $blog->images=$file_name;
        $blog->id_user=Auth::user()->id;
        $blog->id_parent=$request->slparent;
        $blog->id_type=$request->sltypeblog;
        $blog->address=$request->txtaddress;
        $blog->host=$request->txthost;
        $request->file('fileupload')->move('public/admin/dist/img',$file_name);
        $blog->save();
        return redirect()->route('admin.blog.listBlog')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Thêm thành công']);
    }
}
