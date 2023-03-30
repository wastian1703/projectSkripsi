@extends("template.main")

@section("tampilan")


<div class="row g-0">

    <div class="p-4 border col-sm-6 col-md-4">


        <h5>Jenis Jasa</h5>
        <hr>
        <div style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class=><input type="checkbox"> Cuci AC</li>
                <li class=><input type="checkbox"> Bongkar Pasang Ac</li>
                <li class=><input type="checkbox"> Reparasi AC</li>
            </ul>
        </div>
        <h5 class="mt-4">Info Cuci AC Dan Bangunan</h5>
        <hr>
        <h5 class="mt-4">Masalah Anda</h5>

        <div class="row">
            <div class="col-6">
                <ul class="list-group list-group-flush">
                    <li class=><input type="radio"> AC Tidak Dingin</li>
                </ul>
            </div>
            <div class="col-6">
                <li class=><input type="radio"> Bongkar Pasang Ac</li>
                <li class=><input type="radio"> Lainya</li>
                </ul>
            </div>
        </div>
        <h5 class="mt-4">Jumlah Unit AC</h5>
        <div class="input-group mb-3">
            <!-- <span class="input-group-text" id="basic-addon1">0</span> -->
            <input type="number" class="form-control" value="1" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <h5 class="mt-4">Merek AC</h5>
        <div class="row">
            <div class="col-6">
                <ul class="list-group list-group-flush">
                    <li class=><input type="checkbox"> LG</li>
                    <li class=><input type="checkbox"> Samsung</li>
                    <li class=><input type="checkbox"> Daikin</li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-group list-group-flush">
                    <li class=><input type="checkbox"> Panasonic</li>
                    <li class=><input type="checkbox"> Sharp</li>
                    <li class=><input type="checkbox"> Lainnya</li>
                </ul>
            </div>
            <h5 class="mt-4"></h5>
            <div class="row">
                <div class="col-6">
                    <ul class="list-group list-group-flush">
                        <li class=><input type="radio"> Rumah</li>
                        <li class=><input type="radio"> Ruko (+Rp. 25,000)</li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="list-group list-group-flush">
                        <li class=><input type="radio"> Apartemen (+Rp. 25,000)</li>
                        <li class=><input type="radio"> Gedung Kantor (+Rp. 25,000)</li>
                    </ul>
                </div>
            </div>
        </div>
        <h5 class="mt-4">Kapan Anda Membutukan Layanan Kami?</h5>
        <hr>
        <h5>Tanggal</h5>
        <div class="input-group mb-3">
            <!-- <span class="input-group-text" id="basic-addon1">0</span> -->
            <input type="date" class="form-control" value="1" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <h5>Waktu</h5>
        <select class="form-select" aria-label="Default select example">
            <option selected>Kapan Anda Membutukan Layanan Kami?</option>
            <option value="1">08.00</option>
            <option value="2">09.00</option>
            <option value="3">10.00</option>
            <option value="1">11.00</option>
            <option value="2">12.00</option>
            <option value="3">13.00</option>
        </select>
        <h5>Alamat</h5>
        <hr>
        <div style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class=><input type="Texs"> lokasi</li>

            </ul>
        </div>
        <hr>
        <h5 class="mt-4">Harga Total</h5>
    </div>
    <div class="col-6 col-md-4">
        <div class="ms-2 card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class=>An item</li>
                <li class=>A second item</li>
                <li class=>A third item</li>
            </ul>
        </div>
    </div>
</div>
<style>
ul {
    list-style-type: none;
    margin-left: 1rem;
}

li {
    list-style-type: none;
    margin-bottom: 5px;
}
</style>
@endsection