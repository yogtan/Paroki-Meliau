@extends('layouts.main')
@section('container')
    <section class="information align-items-center">
        <div class="container">
            <div class="text-center mt-5">
                <h2 class="text-white fw-bolder">DETAIL BERITA</h2>
            </div>
        </div>
    </section>

    <section class="detail-berita">
        <div class="container">
            <div class="mt-5">
                <p>{{ $posts->created_at }}</p>
                <h3>{{ $posts->title }}</h3>
                <hr>
                <div class="text-center mb-3">
                    <img src="{{ url('storage/' . $posts->image) }}" alt=""
                        style="width: 1300px; object-fit: cover; height:300px; ">

                </div>
                <p>{{ $posts->content }}</p>
            </div>
        </div>
    </section>
@endsection
