<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perbaikan_servis;
use Illuminate\Support\Facades\DB;

class data_servis_controller extends Controller
{
    public function index(){
        $p=DB::table('perbaikan_servis')->select('*')->get();
        
        $data=["perbaikan_servis"=>$p];

        return view('admin.data_servis.index', $data);
        
       }
}
