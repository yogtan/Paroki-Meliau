@extends('layouts.main')

@section('container')
    <section class="hero align-items-center ">

        <div class="container text-center">
            <div class="tes ">

                <p class="gereja-text text-white">Paroki St. Fransiskus Xaverius Meliau</p>
                <p class="gereja-text2">A House of Prayer For All People</h3>




            </div>

        </div>
    </section>


    <section class="social-media mt-5">
        <div class="container">
            <div class="row">
                <!-- Kolom kiri untuk menampilkan gambar, teks, dan dua kartu -->
                <div class="col-lg-6">
                    <img class="object-fit-cover" style="width: 100%; height: 300px;" src="img/hero2.png" alt="">
                    <p class="pt-2 foter1 fw-bold">ALL LITURGICAL</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-1 ml-3">
                            <div class="card  jadwal-hover  h-100 w-100 rounded-2" style="width: 12rem; height: 10rem;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-left">Misa Harian</h5>
                                    <p class="card-text fw-bold  ">Senin - Sabtu : <br><span class="fw-light"> 05.30 & 06.05
                                            WIB </span></p>
                                    <p class="card-text fw-bold lh-1 ">Senin-Jumat : <span class="fw-light">17.30 WIB</span>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-1 ml-3">
                            <div class="card jadwal-hover h-100 w-100 rounded-2" style="width: 12rem; height: 10rem;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-left ">Mingguan</h5>
                                    <p class="card-text fw-bold ">Sabtu : <span class="fw-light">16.30 WIB</span></p>
                                    <p class="card-text fw-bold lh-1">Minggu : <span class="fw-light">08.00 WIB</span></p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom kanan untuk menampilkan tautan YouTube dan kartu -->
                <div class="col-lg-6 text-right">
                    <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/MmhFmVhQtJg"
                        frameborder="0" allowfullscreen></iframe>
                    <p class="pt-2 foter1 fw-bold">ALL EVENTS</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-1 ml-3">
                            <div class="card  jadwal-hover  h-100 w-100 rounded-2" style="width: 12rem; height: 10rem;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-left">TEND OMK</h5>
                                    <p class="card-text fw-bold ">Senin - Sabtu : <br><span class="fw-light"> 05.30 & 06.05
                                            WIB </span></p>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog  mt-3 pt-3">
        <div class="container">
            <hr>
            <h1 class="judulmisa pt-2  fw-semibold">Berita Paroki Meliau</h1>

            <div class="row mt-1">
                <div class="col-lg-4 col-md-6 mt-3 ml-3">
                    <div class="card  h-100 w-100 rounded-0">
                        <img src="img/berita.jpg" class="card-img-top rounded-0" style="object-fit: cover; height:200px"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-tittle fw-semibold">Perayaan Ekaristi Natal 2023<h5>

                                    <p class="card-text pt-3">Perayaan Natal merupakan perayaan yang ditunggu-tunggu oleh
                                        umat Katolik di mana pun mereka berada. Perayaan Natal juga dilaksanakan dengan
                                        meriah</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="card  h-100 w-100 rounded-0">
                        <img src="img/berita.jpg" class="card-img-top rounded-0" style="object-fit: cover; height:200px"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-tittle fw-semibold">Pesta Keluarga Kudus 2023
                                <h5>

                                    <p class="card-text pt-3">Keluarga Katolik adalah tempat pertama untuk mendalami iman.
                                        Pada Pesta Keluarga Kudus kemarin Minggu (31/12/2023), Gereja St.Fransisus Xaverius
                                    </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="card  h-100 w-100 rounded-0">
                        <img src="img/berita.jpg" class="card-img-top rounded-0" style="object-fit: cover; height:200px"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-tittle fw-semibold">Perayaan Ekaristi Malam Natal 2023
                                <h5>

                                    <p class="card-text pt-3">Perayaan Natal tahun ini dirayakan dengan penuh sukacita dan
                                        lebih ramai daripada tahun sebelumnya. Tahun kemarin, jumlah umat dalam Perayaan
                                        Natal.</p>
                        </div>
                    </div>
                </div>



                <div class="text-center pt-5">
                    <button type="button" class="btn btn-outline-dark align-content-center rounded-0 btn-lg">All
                        Blog</button>
                </div>
            </div>
        </div>
    </section>

    <section class="galeri mt-3">
        <div class="container">
            <hr>
            <h1 class="judulmisa fw-semibold">Explore Galeri Paroki</h1>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
                <div class="col">
                    <a href="img/berita.jpg" data-lightbox="gallery" data-title="OMK Image" class="rounded-0 h-100 w-100">
                        <img src="img/berita.jpg" alt="OMK Image" class="rounded-0 img-fluid">

                    </a>
                </div>
                <div class="col">
                    <a href="img/berita.jpg" data-lightbox="gallery" data-title="OMK Image" class="rounded-0 h-100 w-100">
                        <img src="img/berita.jpg" alt="OMK Image" class="rounded-0 img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a href="img/berita.jpg" data-lightbox="gallery" data-title="OMK Image"
                        class="rounded-0 h-100 w-100">
                        <img src="img/berita.jpg" alt="OMK Image" class="rounded-0 img-fluid">
                    </a>
                </div>
                <!-- Add more images as needed -->
            </div>


            <div class="text-center pt-5">
                <button type="button" class="btn btn-outline-dark align-content-center rounded-0 btn-lg">All
                    Gallery</button>
            </div>
        </div>
    </section>
@endsection
