<div class="contanier" style="width: 100%; height: 1rem; position:fixed; ">
    <nav class="navbar navbar-expand-lg navbar-light bg-info bd-subnavbar" style="position: relat;">
        <div class="container">
            <a class="navbar-brand" href="#" style="margin-left: 2rem"><img src="{{asset('logo/logo.jpeg')}}" alt=""
                    style="width:100%"> LAYANAN SERVIS AC</a>
        </div>

        <div class=" d-flex welcome col-6" style="margin-right:4rem">
            <div style="width: 1rem"></div>
            <div class="dropdown">
                <button class="dropbtn d-flex ">
                    <div style="width: 10px;  "></div> <img
                        src="https://nationaltoday.com/wp-content/uploads/2022/04/41-Roman-Reigns.jpg" alt="">
                </button>
                <div class="dropdown-content" style="position: absolute">
                    <a href="#" type="button" class="btn"><i class='bx bx-user'></i> My Profil</a>
                    <a href="#" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                            class='bx bx-log-out'></i> logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>

            </div>
            <div class="modal-body">
                Apakah Anda ingin logout
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary"><a href="/logout"
                        style="text-decoration: none; color: #f1f1f1">Ya</a> </button>
            </div>
        </div>
    </div>
</div>

<style>
.dropbtn {
    background-color: #f7fbfa;
    color: rgb(23, 21, 21);
    padding: 10px;
    font-size: 15px;
    border: none;
    border-radius: 2px;
}

.dropdown {
    position: relative;
    display: inline-block;
    margin-right: 2rem;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    padding: 0px 10px 0px 10px;
}

.dropdown-content a {
    color: black;
    padding: 10px 0px 10px 0px;
    text-decoration: none;
    display: block;

}

.dropdown-content a:hover {
    background-color: aqua;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: aqua;
}

img {
    height: 3rem;
    width: 3rem;
    border-radius: 1.5rem;
}

/* img {} */
</style>