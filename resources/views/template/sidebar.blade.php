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

  <style>
  .sidebar {
    padding: 0 5px;
    height: inherit;
    width: inherit;
    /* width: 32px;  */
    border: solid rgb(53, 50, 50);
    border-radius: 5px;
    position: fixed;
    /* transition: height width 2s; */
    top: 15%;
    background-color: rgb(87, 87, 233);
    /* box-shadow: 0px 5px 20px rgb(128, 126, 246) */

  }

  /* 
    .sidebar ul li .pilihan-menu,
    h5 {
        display: none;
    } */

  /* .konten .te {
        visibility: hidden;
    } */

  .sidebar ul li {
    width: 100%;
    position: relative;
    list-style-type: none;
    padding: 5px 20px 5px -1%;
    font-size: 1rem;
    color: white;

  }

  .sidebar ul li i {
    text-align: center;
  }

  .sidebar ul li a {
    padding-left: 5px;
    color: white;
    text-decoration: none;
    margin-left: 14px;
    font-size: 16px;
    top: 0;
  }

  .konten {
    display: flex;
  }

  .te {
    padding: 2px
  }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
  $(document).ready(function() {

    // $('.sidebar').hover(
    //     function() {
    //         $('.pilihan-menu, h5').show(50);
    //         $('.container1').css('width', '75%');
    //         $('.container1').css('transition', '1s');
    //         $('body').css('background-color', 'rgb(233, 239, 239');
    //     },
    //     function() {
    //         $('.pilihan-menu, h5').hide(100);
    //         $('.container1').css('width', '90%');
    //         $('body').css('background-color', 'white');
    //     }
    // );

    function normalImg(x) {
      x.style.height = "32px";
      x.style.width = "32px";
    }
    $('.pilihan-menu').hover(function() {
        $(this).css('color', 'aqua');
        $(this).css('text-shadow', '2px 0px 5px white');
        // $(this).css('font-size','20px')

      },
      function() {
        $(this).css('color', 'white');
        $(this).css('font-size', '16px');
        $(this).css('text-shadow', 'none');
      });
  });
  // $('.menuandro').on("click", function() {
  //     $('.sidebar').css('display', 'block');
  // });
  // function lihat(x){
  //     x.style.display = "block";
  // }
  </script>