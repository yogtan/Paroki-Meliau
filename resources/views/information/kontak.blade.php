@extends('layouts.main')

@section('container')
    <section class="information align-items-center">
        <div class="container">
            <div class="text-center mt-5">
                <h2 class="text-white fw-bolder">KONTAK</h2>
            </div>
        </div>
    </section>

    <section class="informasi-kontak-konten mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="icon d-flex align-items-center ">
                        <img class="img-icon img-fluid"  src="../img/Email.svg" alt="">
                        <span class="ms-2 fw-bolder">EMAIL <span class="fw-normal"><br>ParokiMeliau@gmail.com</span></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon d-flex align-items-center">
                        <img class="img-icon img-fluid"  src="../img/Phone.svg" alt="">
                        <span class="ms-2 fw-bolder">PHONE <span class="fw-normal"><br>082157041190</span></span>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="icon d-flex align-items-center ">
                        <img class="img-icon img-fluid" src="../img/Whatsapp.svg" alt="">
                        <span class="ms-2 fw-bolder">WHATSAPP <span class="fw-normal"><br>082157041190</span></span>

                    </div>
                </div>
            </div>
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
@endsection
