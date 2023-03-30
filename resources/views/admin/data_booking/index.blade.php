@extends('template.mainAdmin')

@section('tampilan')
<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-8" style="margin-left: 1rem"><img src="{{asset('logo/logo.jpeg')}}"> PT. MARVES MAJU SEJAHTERA
            <p7 style="margin-left: 10rem">Data Booking</p7>
        </div>
    </div>
</div>
<table class="table table-striped">

    <thead>
        <th scope="col">ID</th>
        <th scope="col">Jenis Jasa</th>
        <th scope="col">Masala Anda</th>
        <th scope="col">Jumla Unit</th>
        <th scope="col">Merek AC</th>
        <th scope="col">Jns Bangunan</th>
        <th scope="col">Hp Konsumen</th>
        <th scope="col">Nam Pemilik</th>
        <th scope="col">Alamat</th>
        <th scope="col">Tgl Servis</th>

    </thead>

    <tbody>
        @php $i=1; @endphp
        @foreach($pesan_services as $p)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $p->jenis_jasa }}</td>
            <td>{{ $p->msl_anda }}</td>
            <td>{{ $p->jumla_unit }}</td>
            <td>{{ $p->merk_ac }}</td>
            <td>{{ $p->jenis_bangunan }}</td>
            <td>{{ $p->hp_konsumen }}</td>
            <td>{{ $p->pemilik	}}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->tgl_servis }}</td>
        </tr>

        @endforeach
    </tbody>
</table>


<style>
/* #gambar {} */
</style>



@endsection