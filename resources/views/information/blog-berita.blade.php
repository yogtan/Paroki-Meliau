@extends('layouts.main')

@section('container')
    <section class="information align-items-center">
        <div class="container">
            <div class="text-center mt-5">
                <h2 class="text-white fw-bolder">BLOG & BERITA</h2>
            </div>

        </div>
    </section>

    <section class="informasi-dewan-konten mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($posts as $post)
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
    </section>
@endsection
