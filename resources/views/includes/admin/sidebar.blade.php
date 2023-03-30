<div class=" btn btn-primary menuandro">
  <i class='bx bx-menu' style='color:#00FFFF'></i>
</div>
<div class="sidebar" onmouseover="mouseOver()" onmouseout="mouseOut()">
  <div class="master-data">
    <h7 class="p-1 text-white label1">Master Data</h7>
    <hr>
    <ul class=" ">
      <li class="pilih "><i class='bx bx-category'></i><a class="pilihan-menu" href="/admin">Dasboard</a></li>
      <!-- <li class="pilih "><i class='bx bx-book'></i><a class="pilihan-menu" href="{{ url('admin/data_barang') }}">Data barang</a></li> -->
      <li class="pilih "><i class='bx bx-book'></i><a class="pilihan-menu" href="{{ url('admin/data_servis') }}">Data
          servis</a></li>
      <!-- <li class="pilih "><i class='bx bx-book'></i><a class="pilihan-menu" href="{{ url('admin/data_pelanggan') }}">Data pelanggan</a></li> -->
      <li class="pilih "><i class='bx bx-user-plus'></i><a class="pilihan-menu"
          href="{{ url('admin/data_anggota') }}">Data anggota</a></li>
      {{-- <li class="menu"><i class='bx bx-cog'></i><a href="#">kelengkapan</a></li>
        <li class="menu"><a href="#">Nim</a></li> --}}
    </ul>
  </div>

  <hr>
  <div class="tansaksi">
    <h7 class="p-1 text-white label1">Transaksi</h7>
    <ul>
      <li><i class='bx bx-cart-alt'></i><a class="pilihan-menu" href="{{ url('admin/data_booking') }}">Data
          booking</a></li>
      <li class="pilih "><i class='bx bx-book'></i><a class="pilihan-menu" href="{{ url('admin/data_teknisi') }}">Data
          teknisi</a></li>
      <li><i class='bx bx-menu'></i><a class="pilihan-menu" href="{{ url('admin/data_sewa') }}">Data sewa</a></li>
      <li><i class='bx bx-menu'></i><a class="pilihan-menu" href="{{ url('admin/data_sewa') }}">Data
          Pembayaran</a></li>

    </ul>
  </div>

  <hr>
  <div class="laporan">
    <h7 class="p-1 text-white label1">Laporan</h7>
    <ul>
      <!-- {{-- <li><i class='bx bxs-report'></i><a class="pilihan-menu" href="">Laporan Data lapangan</a></li> -->
      <!-- <li><i class='bx bxs-report'></i><a class="pilihan-menu" href="">Laporan Data Peminjam</a></li> --}} -->
      <li><i class='bx bxs-report'></i><a class="pilihan-menu" href="/admin/laporan_data_servis">Laporan Data
          Servis</a></li>
      <li><i class='bx bxs-report'></i><a class="pilihan-menu" href="/admin/laporan_data_pelanggan">Laporan Data
          pelanggan</a></li>
    </ul>
  </div>
</div>