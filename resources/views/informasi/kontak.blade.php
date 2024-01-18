@extends('layouts.main')

@section('container')
    <section class="hero-romo align-items-center">
        <div class="container">
            <div class="text-center mt-5 pt-5">
                <button type="button" class="btn btn-outline-light text-white  rounded-0 btn-lg fw-bolder fs-4">KONTAK</button>
            </div>

        </div>
    </section>


    <section class="kontak mt-5 pt-5">
        <div class="container">
            <h1 class="fw-bold">FORMULIR <span class="fw-light"> KONTAK </span></h1>
            <div class="row pt-5">
                <div class="form col-lg-6">

                    <label for="Nama Lengkap">Nama</label>
                    <div class="input-group mb-3 pt-2">

                        <input type="text" class="form-control pt-1" placeholder="" aria-label="Nama Lengkap"
                            aria-describedby="basic-addon1">
                    </div>
                    <label for="Nama Lengkap">Alamat Email</label>
                    <div class="input-group mb-3 pt-2">
                        <input type="text" class="form-control" placeholder="" aria-label="Email"
                            aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                    <label for="Nama Lengkap">Nomor Telepon</label>
                    <div class="input-group mb-3 pt-2">

                        <input type="text" class="form-control" placeholder=" " aria-label="Nomor Telepon"
                            aria-describedby="basic-addon1">
                    </div>
                    <label for="Nama Lengkap">Pesan</label>
                    <div class="input-group mb-3 pt-2">

                        <textarea class="form-control" placeholder="" aria-label="With textarea"></textarea>
                    </div>
                    <div class="pt-3" style="">
                        <button type="button" class="btn btn-dark  w-100 rounded-1 btn-lg fw-bolder">Kirim Pesan

                    </div>
                </div>
                <div class="form col-lg-6">

                    <div class="map-responsive2 ">
                        <iframe class="mt-3"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8086844659533!2d110.28603387487865!3d-0.1259234998728336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e0287cc01e28849%3A0xcbdbee312bbd5233!2sGereja%20Katolik%20St.%20Fransiskus%20Xaverius!5e0!3m2!1sid!2sid!4v1691209947265!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
    </section>

    <section class="infor  mt-3 pt-5">
        <div class="container">

            <div class="text-center">
                <p>V7FQ+5MH, Jl. Djoko Soedarmo, Hulu, Kec. Meliau, Kabupaten Sanggau, Kalimantan Barat 78571
                    <br><br>

                    E-Mail : parokimeliau@gmail.com
                    <br>
                    WA    : Klik untuk kirim WA
                    <br><br>
                    Wujud doa dan intensi misa bisa dikirim melalui Whatsapp Sekretariat</p>
            </div>
    </section>
@endsection
