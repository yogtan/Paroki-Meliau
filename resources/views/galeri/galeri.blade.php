@extends('layouts.main')

@section('container')
    <section class="galeri align-items-center">
        <div class="container">
            <div class="text-center mt-5">
                <h2 class="text-white fw-bolder">GALERI</h2>
            </div>
        </div>
    </section>

    <section class="informasi-dewan-konten mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($albums as $album)
                    <div class="col-lg-4 col-md-6 mt-3">
                        <a href="{{ route('detail_galeri', $album->id) }}" class="text-decoration-none text-dark">
                            <div class="card w-100" style="height: 360px">
                                <img src="{{ url('storage/' . $album->image) }}" class="card-img-top"
                                    style="object-fit: cover; height:360px" alt="...">

                                {{-- <p class="card-text">{{ Str::limit($post->content, 100)}}</p> --}}

                            </div>
                            <p class="pt-3 mb-1">{{ $album->created_at }}</p>
                            <h5 class="">{{ $album->name }}</h5>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
