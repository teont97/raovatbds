<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaitin;
use App\huyen;
use App\phuong;
class AjaxController extends Controller
{
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
    public function getphuong($id_huyen){
        $phuong = phuong::where('id_huyen',$id_huyen)->get();
        foreach($phuong as $iteam_phuong ){
            echo '<option value="' .$iteam_phuong->id.'">'.$iteam_phuong->name.'</option>';
         }
    }

}
