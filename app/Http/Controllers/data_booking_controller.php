<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perbaikan_servis;
use Illuminate\Support\Facades\DB;

class data_booking_controller extends Controller
{
    public function index(){
        $p=DB::table('pesan_services')->select('*')->get();

        $data=["pesan_services"=>$p];

        return view("admin.data_booking.index", $data);

    }
}