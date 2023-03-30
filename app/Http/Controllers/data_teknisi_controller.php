<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class data_teknisi_controller extends Controller
{
    public function index(){
        $data = [
            'gambar'=> 'https://images.tokopedia.net/blog-tokopedia-com/uploads/2018/11/2.-Pilih-Jenis-AC-yang-Sesuai.jpg',
            'harga_barang'=>number_format('40000'),
            'harga_servis'=>number_format('76000'),
        ];
    
     
    
        return view('admin.data_teknisi.index', $data);
       }
}
