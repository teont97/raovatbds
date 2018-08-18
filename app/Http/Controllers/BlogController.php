<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\typeblog;
use App\parent_type;
use App\blog;
use Auth;
use File;
class BlogController extends Controller
{
    public function getListTypeBlog(){
        $data_typeblog=typeblog::orderBy('id','DESC')->get();
        return view('admin.blog.list_type',compact('data_typeblog'));
    }
    public function getTypeblog(){
        $data_parent=parent_type::get();
        return view('admin.blog.create_typeblog',compact('data_parent'));
    }
    public function postTypeBlog(Request $request){
        $type_blog= new typeblog();
        $type_blog->name=$request->txtname;
        $type_blog->alias=utf8tourl(utf8convert($request->txtname));
        $type_blog->id_parent=$request->slhinhthuc;
        $type_blog->description=$request->txtdescript;
        $type_blog->save();
        return redirect()->route('admin.blog.listTypeBlog')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Thêm thành công']);
    }
    public function getListBlog(){
        $data_blog=blog::orderBy('id','DESC')->get();
        //dd($data_blog);
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
        $tagString=explode(',',$request->txtkeyword);
        $request->file('fileupload')->move('public/admin/dist/img',$file_name);
        $blog->save();
        $blog->tag($tagString);
        return redirect()->route('admin.blog.listBlog')->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Thêm thành công']);
    }
    public function deleteTypeBlog(Request $request){
        $delete=typeblog::find($request->id);
        $delete->delete();
    }
    public function getEditTypeblog($id){
        $data_edit=typeblog::find($id);
        $data_parent=parent_type::get();
        return view('admin.blog.edit_typeblog',compact('data_edit','data_parent'));
    }
    public function editTypeBlog(Request $request , $id){
        $edit=typeblog::find($id);
        $edit->name= $request->txtname;
        $edit->alias=utf8tourl(utf8convert($request->txtname));
        $edit->description= $request->txtdescript;
        $edit->id_parent= $request->slparent;
        $edit->save();
        return back()->with('mesage','Đã sửa thành công !!! ');;
    }
    public function deleteBlog(Request $request){
        $delete=blog::find($request->id);
        $delete->delete();
    }
    public function getEditBlog($id){
        $data_edit=blog::find($id);
        $data_parent=parent_type::get();
        $data_type=typeblog::get();
        return view('admin.blog.edit_blog',compact('data_edit','data_parent','data_type'));
    }
    public function editBlog(Request $request , $id){
        $edit=blog::find($id);
        $edit->title=$request->txttieude;
        $edit->alias=utf8tourl(utf8convert($request->txttieude));
        $edit->tomtat=$request->short;
        $edit->content=$request->content;
        $edit->view=0;
            if ($request->hasFile('fileupload2')) {
                File::delete('public/admin/dist/img/'.$edit['images']);
                $file_name=$request->file('fileupload2')->getClientOriginalName();
                $edit->images=$file_name;
                $request->file('fileupload2')->move('public/admin/dist/img',$file_name);
                $edit->save(); 
            }
        $edit->id_user=Auth::user()->id;
        $edit->id_parent=$request->slparent;
        $edit->id_type=$request->sltypeblog;
        $edit->address=$request->txtaddress;
        $edit->host=$request->txthost;
        $tagString=explode(',',$request->txtkeyword);
        $edit->save();
        $edit->tag($tagString);
        return redirect()->back()->with(['flash_level'=>'success','flash_messages'=>'Bạn Đã Chỉnh Sửa Thành Công']);
    }
}
