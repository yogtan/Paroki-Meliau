@extends('layouts.main')

@section('container')
    <section class="home-hero">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center" id="popup">
                    <img class="img-hero mb-3 mt-5" src="../img/Logo-Hero.svg" alt="">
                    <h1 class="fw-bold" id="title">ST. FRANSISKUS XAVERIUS MELIAU</h1>
                    <h5 id="subtitle">A HOUSE OF PRAYER PEOPLE</h5>
                </div>
            </div>
        </div>
    </section>



    <section class="home-schedule mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4  mb-3" id="schedule">

                    <div class="card w-100" style="width: 25rem;">
                        <div class="card-body text-center">
                            <h2 class="fw-bolder text-center">JADWAL LITURGI</h2>
                            <hr>
                            <h5>Misa Hari Minggu</h5>
                            <p> 18.00 / 08.00 </p>
                            <h5>Misa Harian</h5>
                            <p>Senin - Jumat 7.00</p>
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-content-center" id="ayat">
                    <div class="text-center">
                        <h2 class="fw-bolder">ROMA 8:18</h2>
                        <p>"Sebab aku yakin, bahwa penderitaan masa kini tidak ada artinya dibandingkan dengan kemuliaan
                            yang akan dinyatakan kepada kita." </p>
                    </div>

                </div>
                <div class="col-md-4" id="sekretariat">

                    <div class="card w-100" style="width: 25rem;">
                        <div class="card-body text-center">
                            <h2 class="fw-bolder text-center">SEKRETARIAT</h2>
                            <hr>
                            <h5>Jam Kerja</h5>
                            <p>Senin - Jumat, 09:00 WIB - 17:00 WIB</p>
                            <h5>Kontak</h5>
                            <p>Telepon: (123) 456-7890</p>
                            
                        </div>
                    </div>

                </div>
    </section>

    <section class="home-about mt-3 bg-dark ">
        <div class="container">
            <div class="row">
                <h2 class="text-white mt-5 fw-bold">OUR CHURCH</h2>
                <div class="col-md-6">
                    <iframe class="mt-3 mb-5" style="width: 100%; height: 300px;"
                        src="https://www.youtube.com/embed/MmhFmVhQtJg" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <p style="text-align: justify" class="text-white mt-3 ">Lorem ipsum dolor sit amet consectetur
                        adipiscing elit Ut et.Lorem ipsum dolor sit amet consectetur
                        adipiscing elit Ut et.Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.Lorem ipsum dolor
                        sit amet consectetur adipiscing elit Ut et. Lorem ipsum dolor sit amet consectetur adipiscing elit
                        Ut et.Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.Lorem ipsum dolor sit amet
                        consectetur adipiscing elit Ut et.Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>

                    <div class="btn-more mb-5">
                        <button type="button" class="btn btn-light">Selengkapnya...</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-blog mt-5">
        <div class="container">
            <h2 class="text-dark text-center fw-bold mb-5">VISIT OUR BLOG</h2>
            <div class="row justify-content-center">
                @foreach ($posts->slice(0, 3) as $post)
                    <div class="col-lg-4 col-md-6 mt-3">
                        <a href="{{ route('detail_berita', $post->id) }}" class="text-decoration-none text-dark">
                            <div class="card w-100" style="height: 350px">
                                <img src="{{ url('storage/' . $post->image) }}" class="card-img-top"
                                    style="object-fit: cover; height:200px" alt="...">

                                <div class="card-body" style="height: 150px; overflow: hidden;">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->content }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="text-center col-12 mt-4">
            <a href="/berita" class="btn btn-dark">Selengkapnya</a>
        </div>

    </section>



    <section class="home-teks mt-5 ">
        <div class="map-responsive ">
            <iframe class="w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0728699540996!2d110.38161481846593!3d-7.782090060190769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59ce7e2c6b49%3A0xceb97f7672f69dad!2sJl.%20Kepuh%20GK%20III%20No.1011%2C%20Klitren%2C%20Kec.%20Gondokusuman%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta%2055222!5e0!3m2!1sid!2sid!4v1705573448710!5m2!1sid!2sid"
                width="" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="home-teks2 mt-5">
        <div class="container">
            <h1 class="text-center fw-bolder mb-5">A HOUSE OF PRAYER PEOPLE</h1>
        </div>
    </section>
@endsection
