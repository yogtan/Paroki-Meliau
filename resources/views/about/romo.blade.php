@extends('layouts.main')

@section('container')
    <section class="about  align-items-center">
        <div class="container">
            <div class="text-center mt-5">
                <h2 class="text-white fw-bolder">ROMO PAROKI</h2>
            </div>

        </div>
    </section>

    <section class="about-sejarah-konten mt-5">
        <div class="container">

            <div class="row justify-content-center">
                @foreach ($romos as $member)
                    <div class="col-md-3 mb-3">
                        <div class="image-struktur text-center">
                            <img class="rounded-circle" src="{{ url('storage/' . $member->image) }}" width="200px"
                                height="200px" style="object-fit: cover" alt="">

                            <div class="text-center mt-3">
                                <h5 class="fw-bolder">{{ $member->name }}</h5>
                                <p>{{ $member->jabatan }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
