@extends('layouts.main')

@section('container')
    <section class="hero align-items-center">
        <div class="container">
            <h1 style="font-size: 64px; color: #FF6A3D; font-weight: 700px ">SELAMAT DATANG</h1>
            <h3 class="text-white">WEBSITE GEREJA ST. FRANSISKUS XAVERIUS</h3>
            <h3 class="text-white">MELIAU, KALIMANTAN BARAT</h3>
        </div>
    </section>


    <section class="jadwalMisa">
        <div class="container">
            <h1 class="judulmisa pt-5">JADWAL MISA</h1>

        </div>
    </section>

    <section class="sejarah ">
        <div" class="container">
            <div class="row mt-5 pt-5 ">
                <div class="col">
                    <img style="height: 400px; width:750px" class="img-fluid" src="../img/sejarah.jpg" alt="">

                </div>
                <div class="col-md-4">
                    <h1 class="judulsejarah">SEJARAH GEREJA</h1>
                    <p class="text-white pt-3 col-md-14" style="text-align: justify;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deleniti, in quidem molestiae
                        animi dolor cum magnam iure mollitia ad velit, iste laborum dolorum, delectus voluptatum
                        reprehenderit laboriosam corrupti adipisci! Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Laboriosam cupiditate eum fugit obcaecati quos quis libero adipisci magni assumenda fuga vero
                        necessitatibus ducimus dolore dolorem, enim nesciunt consequuntur est id!</p>
                </div>
            </div>
            </div>
    </section>

    <section class="galeri">
        <div class="container">
            <h1 class="pt-5 text-center">GALERI</h1>
            <p class="text-center pt-5  w-75 mx-auto">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deleniti, in quidem molestiae
                animi dolor cum magnam iure mollitia ad velit, iste laborum dolorum, delectus voluptatum
                reprehenderit laboriosam corrupti adipisci! Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Laboriosam cupiditate eum fugit obcaecati quos quis libero adipisci magni assumenda fuga vero
                necessitatibus ducimus dolore dolorem, enim nesciunt consequuntur est id!
            </p>
            <div class="pt-5  align-items-center">

                <img class="w-25 rounded float-start  mx-5 " src="../img/OMK.svg" alt="...">
                <img class="w-25 rounded   mx-5" src="../img/Misdinar.svg" alt="...">
                <img class="w-25 rounded float-end mx-4" src="../img/Pastoral.svg" alt="...">

                {{-- <h3>MISDINAR</h3> --}}
            </div>

            <div class="row mt-5 pt-5 ">
                <div class="col">
                    <img style="height: 400px; width:750px" class="img-fluid" src="../img/sejarah.jpg" alt="">

                </div>
                <div class="col-md-4">
                    <h5 class="pt-5">Sejarah Gereja</h5>
                    <p class="text-black pt-3 col-md-14" style="text-align: justify;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deleniti, in quidem molestiae
                        animi dolor cum magnam iure mollitia ad velit, iste laborum dolorum, delectus voluptatum
                        reprehenderit laboriosam corrupti adipisci! Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button class="btn btn-dark me-md-2" type="button">READ MORE</button>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
