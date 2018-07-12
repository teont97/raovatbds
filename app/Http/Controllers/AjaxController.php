<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaitin;
class AjaxController extends Controller
{
    public function getloaitin($id_hinhthuc){
    
        $loaitin = loaitin::where('id_hinhthuc',$id_hinhthuc)->get();
        foreach($loaitin as $iteam_loaitin ){
          
           echo ' 
                    <option value="' .$iteam_loaitin->id.'">'.$iteam_loaitin->name.'</option>
                ';
           
        }
    }
}
