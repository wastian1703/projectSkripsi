@extends('template.mainAdmin')

@section('tampilan')
<div class="container">
  <div class="row">
    <div class="col-4">
    </div>
    <div class="col-8" style="margin-left: 1rem"><img src="{{asset('logo/logo.jpeg')}}" width="70">
      PT. MARVES MAJU SEJAHTERA
      <p7 style="margin-left: 10rem"> Data Anggota</p7>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <th scope="col">No Tlp</th>
    <th scope="col">password</th>
    <th scope="col">Nam Lengkap</th>
    <th scope="col">Alamat</th>
    <th scope="col">status</th>
    <th scope="col" class="text-center">Aksi</th>
  </thead>

  <tbody>
    @foreach($penggunas as $p)
    <tr>
      <td>{{ $p->hp_anggota }}</td>
      <td>{{ $p->password }}</td>
      <td>{{ $p->nama }}</td>
      <td>{{ $p->alamat }}</td>
      <td>{{ $p->r }}</td>

      <td class="d-flex ">
        <a href="" class="btn btn-success ms-auto me-1 detail" type="button" data-bs-toggle="modal"
          data-bs-target="#staticBackdrop"><i class='bx bx-detail'></i> Detail</a>
        <a href="" class="btn btn-warning me-1"><i class='bx bx-edit'></i> Edit</a>
        <button type="button" class="btn btn-danger me-auto hapus" data-bs-toggle="modal"
          data-bs-target="#modal-hapus"><i class='bx bx-trash'></i> Hapus</button>
      </td>

    </tr>

    @endforeach
  </tbody>
</table>

<style>
/* #gambar {} */
</style>



@endsection