@extends('layouts.admin')

@section('tampilan')
<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-8">
            <h3>
                Data Pelanggan
            </h3>
        </div>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <th scope="col">No</th>
        <th scope="col">gambar</th>
        <th scope="col">Harga barang</th>
        <th scope="col">harga servis</th>
    </thead>
    <tbody>
        @for($i=1; $i<=10; $i++) <tr>
            <td>{{ $i }}</td>
            <td><img src="{{ $gambar }}" alt=""></td>
            <td>Rp.{{ $harga_barang }}</td>
            <td>Rp.{{ $harga_servis }}</td>
            </tr>
            @endfor
    </tbody>
</table>


<style>
/* #gambar {} */
</style>



@endsection