@extends('template.mainAdmin')

@section('tampilan')
<div class="container">
    <div class="row">
 <div class="col-4">

 </div>
 <div class="col-8" style="margin-left: 1rem"><img src="{{asset('logo/logo.jpeg')}}"> PT. MARVES MAJU SEJAHTERA<p7 
 style="margin-left: 10rem">Data Servis</p7>
 </div>
    </div>
</div>
<table class="table table-striped">

    <thead>
        <th scope="col">ID</th>
        <th scope="col">Nam Teknisi</th>
        <th scope="col">Merek AC</th>
        <th scope="col">HP Teknisi</th>
        <th scope="col">Kerusakan</th>
        <th scope="col">Lokasi Servis</th>
        <th scope="col">HP Konsumen</th>
        <th scope="col">Tgl Servis</th>
        <th scope="col" class="text-center">Aksi</th>

    </thead>

    <tbody>
    @php $i=1; @endphp
        @foreach($perbaikan_servis as $p)
<tr>
    <td>{{ $i++ }}</td>
    <td>{{ $p->nam_teknisi }}</td>
    <td>{{ $p->merk_ac }}</td>
    <td>{{ $p->hp_teknisi }}</td>
    <td>{{ $p->kerusakan }}</td>
    <td>{{ $p->lok_servis }}</td>
    <td>{{ $p->hp_konsumen	}}</td>
    <td>{{ $p->tgl_servis }}</td>

    <td class="d-flex ">
                        <a href=""
                            class="btn btn-success ms-auto me-1 detail" type="button"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bx-detail'></i> detail</a>
                        <a href="" class="btn btn-warning  me-1"><i
                                class='bx bx-edit'></i> Edit</a>
                        <button type="button" class="btn btn-danger me-auto hapus" data-bs-toggle="modal"
                            data-bs-target="#modal-hapus" ><i class='bx bx-trash'></i>
                            Hapus</button>
                    </td>
</tr>

@endforeach
    </tbody>
</table>


<style>
    #gambar{
        ''
    }

</style>



@endsection