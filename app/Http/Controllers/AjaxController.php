<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaitin;
use App\huyen;
use App\phuong;
use App\typeblog;
use App\comment_post;
use App\comment_blog;
use Auth;
use App\repliespost;
use App\repliesblog;
use Carbon\Carbon;
use App\User;
use App\Unit;
class AjaxController extends Controller
{
    public function getChartLine(){
        $line_chart = User::select(\DB::raw('MONTH(created_at) as month'),\DB::raw('level as level')  , \DB::raw('count(*) as total'))->whereBetween('created_at', array(date('2018-06-01'), date('2018-12-31')))
        ->groupBy('month')
        ->groupBy('level')
        ->get();
        return response()->json($line_chart);
    }
    public function getloaitin($id_hinhthuc){
    
        $loaitin = loaitin::where('id_hinhthuc',$id_hinhthuc)->get();
        foreach($loaitin as $iteam_loaitin ){
           echo '<option value="' .$iteam_loaitin->id.'">'.$iteam_loaitin->name.'</option>';
        }
    }
    public function gethuyen($id_tinh){
        $huyen = huyen::where('id_tinh',$id_tinh)->get();
        foreach($huyen as $iteam_huyen ){
            echo '<option value="' .$iteam_huyen->id.'">'.$iteam_huyen->name.'</option>';
         }
    }
    public function getUnit($id_hinhthuc){
        $Unit = Unit::where('id_hinhthuc',$id_hinhthuc)->get();
        //dd($Unit);
        foreach($Unit as $iteam_unit ){
           echo '<option value="' .$iteam_unit->id.'">'.$iteam_unit->name.'</option>';
        }
    }

    public function getphuong($id_huyen){
        $phuong = phuong::where('id_huyen',$id_huyen)->get();
        foreach($phuong as $iteam_phuong ){
            echo '<option value="' .$iteam_phuong->id.'">'.$iteam_phuong->name.'</option>';
         }
    }
    public function gettheloai($id_parent){
        $data_theloai = typeblog::where('id_parent',$id_parent)->get();
        foreach($data_theloai as $iteam_theloai ){
            echo '<option value="' .$iteam_theloai->id.'">'.$iteam_theloai->name.'</option>';
         }

    }
    public function getcmtpost($id_post){
        $data_cmtpost = comment_post::where('id_post',$id_post)->orderBy('id','DESC')->get();
    
        /* foreach($data_cmtpost as $iteam_cmtpost ){
            echo '<div class="comment">
            <div class="comment-author">
                <a href="#">
                    <img src="http://placehold.it/60x60" alt="avatar-5">
                </a>
            </div>
            <div class="comment-content">
                <div class="comment-meta">
                    <div class="comment-meta-author">
                        Jane Doe
                    </div>
                    <div class="comment-meta-reply">
                        <a  cid="'.$iteam_cmtpost->id.'" name_a="'. Auth::user()->id .'"  class="reply">Reply</a>
                    </div>
                    <div class="comment-meta-date">
                        <span class="hidden-xs">8:42 PM 3/3/2017</span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="comment-body">
                    <div class="comment-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>' .$iteam_cmtpost->content. '</p>
                </div>
            </div>
        </div>'
         }
        */
        return view('client.pages.ajax.getcmtpost',compact('data_cmtpost'));
    
    }
    public function getreplypost($id_comment){
        $data_replypost = repliespost::where('id_cmtpost',$id_comment)->orderBy('id','DESC')->get();
       // dd($data_replypost);
        foreach($data_replypost as $iteam_reply ){
            echo '<div class="comment">
            <div class="comment-author">
                <a href="#">
                    <img src="/public/client/img/avatar/'.Auth::user()->avatar.'" alt="avatar-5" >
                </a>
            </div>

            <div class="comment-content">
                <div class="comment-meta">
                    <div class="comment-meta-author">
                        '. Auth::user()->name .'
                    </div>

              

                    <div class="comment-meta-date">
                        <span class="hidden-xs">'. $iteam_reply->created_at .'</span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="comment-body">
                    <div class="comment-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p style="word-wrap: break-word;">'. $iteam_reply->rely .'</p>
                </div>
            </div>
        </div>';
        }
    }
    public function getcmtblog($id_blog){
        $data_cmtblog = comment_blog::where('id_blog',$id_blog)->orderBy('id','DESC')->get();
        //dd($data_cmtblog);
        return view('client.pages.ajax.getcmtblog',compact('data_cmtblog'));

    }
    public function getreplyblog($id_comment){
        $data_replyblog = repliesblog::where('id_cmtblog',$id_comment)->orderBy('id','DESC')->get();
        // dd($data_replypost);
         foreach($data_replyblog as $iteam_reply ){
             echo '<div class="comment">
             <div class="comment-author">
                 <a href="#">
                    <img src="/public/client/img/avatar/'.Auth::user()->avatar.'" alt="avatar-5" >
                 </a>
             </div>
 
             <div class="comment-content">
                 <div class="comment-meta">
                     <div class="comment-meta-author">
                         Jane Doe
                     </div>
 
               
 
                     <div class="comment-meta-date">
                         <span class="hidden-xs">'. $iteam_reply->created_at .'</span>
                     </div>
                 </div>
                 <div class="clearfix"></div>
                 <div class="comment-body">
                     <div class="comment-rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>
                     </div>
                     <p style="word-wrap: break-word;">'. $iteam_reply->reply .'</p>
                 </div>
             </div>
         </div>';
         }
    }

}
