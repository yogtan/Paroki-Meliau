@extends('layouts.main')

@section('container')
    <section class="about align-items-center">
        <div class="container">
            <div class="text-center mt-5">
                <h2 class="text-white fw-bolder">DETAIL GALERI</h2>
            </div>

        </div>
    </section>

    <section class="about-dewan-konten mt-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($fotos as $foto)
                    <div class="col-lg-4 col-md-6 mt-3">
                        {{-- <a href="{{ route('detail_galeri', $album->id) }}" class="text-decoration-none text-dark"> --}}
                        <div class="card w-100" style="height: 360px">
                            <img src="{{ url('storage/' . $foto->image) }}" class="card-img-top"
                                style="object-fit: cover; height:360px" alt="...">

                            {{-- <p class="card-text">{{ Str::limit($post->content, 100)}}</p> --}}

                        </div>

                        </a>
                    </div>
                @endforeach
            </div>

        </div>

    </section>
@endsection
