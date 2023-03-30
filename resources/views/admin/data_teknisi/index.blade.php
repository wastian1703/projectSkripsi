@extends('layouts.admin')

@section('tampilan')
<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-8" style="margin-left: 1rem"><img src="{{asset('logo/logo.jpeg')}}" width="70"> PT. MARVES MAJU
            SEJAHTERA<p7 style="margin-left: 10rem">Data Teknisi</p7>
        </div>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <th scope="col">No</th>
        <th scope="col">Gambar</th>
        <th scope="col">Harga Harang</th>
        <th scope="col">Harga Servis</th>
        <th scope="col" class="text-center">Status</th>
        <th scope="col">Daftar Pekerjaan</th>

    </thead>
    <tbody>
        @for($i=1; $i<=10; $i++) <tr>
            <td>{{ $i }}</td>
            <td><img src="{{ $gambar }}" alt=""></td>
            <td>Rp.{{ $harga_barang }}</td>
            <td>Rp.{{ $harga_servis }}</td>

            <td class="d-flex ">
                <a href="" class="btn btn-success ms-auto me-1 detail" type="button" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"><i class='bx bx-detail'></i> Sedang Bekerja</a>
            </td>

            <td>
                <div class="d-flex-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">Yansen</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </td>
            </tr>
            @endfor
    </tbody>
</table>

<style>
/* #gambar {} */
</style>

@endsection