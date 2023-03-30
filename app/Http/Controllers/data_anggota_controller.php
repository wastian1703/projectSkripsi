<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;
use Illuminate\Support\Facades\DB;

class data_anggota_controller extends Controller
{
    public function index(){
        $p=DB::table('penggunas')->join('roles','penggunas.role','=','roles.id')
        ->select('penggunas.hp_anggota', 'penggunas.password', 'penggunas.nama','penggunas.alamat', 'roles.role as r')->get();

        $data=["penggunas"=>$p];
        
        // $p=DB::table('penggunas')->select('*')->get();
        // $data=["penggunas"=>$p];

        return view("admin.data_anggota.index", $data);


    
    }
}