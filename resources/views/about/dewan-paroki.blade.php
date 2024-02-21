@extends('layouts.main')

@section('container')
    <section class="about align-items-center">
        <div class="container">
            <div class="text-center mt-5">
                <h2 class="text-white fw-bolder">DEWAN PAROKI GEREJA</h2>
            </div>

        </div>
    </section>

    <section class="about-dewan-konten mt-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($dewans as $dewan)
                    <div class="col-md-3 mb-3">
                        <div class="image-struktur text-center">
                            <img class="rounded-circle" src="{{ url('storage/' . $dewan->image) }}" width="200px" alt="">
                            <div class="text-center mt-3">
                                <h5 class="fw-bolder">{{ $dewan->name }}</h5>
                                <p>{{ $dewan->jabatan }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
