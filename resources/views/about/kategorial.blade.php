@extends('layouts.main')

@section('container')
    <section class="about align-items-center">
        <div class="container">
            <div class="text-center mt-5">
                <h2 class="text-white fw-bolder">KATEGORIAL</h2>
            </div>

        </div>
    </section>

    <section class="about-kategorial-konten mt-5">
        <div class="container">
            <div class="row">

                @foreach ($kategorials as $kategorial)
                    <div class="col-md-4 mb-3">
                        <div class="card position-relative">
                            <img src="../img/card.svg" alt="" class="card-img-top">
                            <div class="card-body overlay-text fw-bolder text-center">
                                {{ $kategorial->name }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h5 class="fw-bolder mt-1">{{ $kategorial->name }}</h5>
                        <p>{{ Str::limit($kategorial->description, 400)}}</p>
                        <div class="">
                            {{-- @dd($kategorial->id) --}}
                            <a href="{{ route('show_detail_kategorial', $kategorial->id) }}" class="text-dark mt-3">Detail Kategorial...</a>
                        </div>
                    </div>
                    @endforeach
            </div>

        
        </div>
    </section>
@endsection
