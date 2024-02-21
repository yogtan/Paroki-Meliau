@extends('layouts.main')
@section('container')
    <section class="about align-items-center">
        <div class="container">
            <div class="text-center mt-5">
                <h2 class="text-white fw-bolder">{{ $kategorial->name }}</h2>
            </div>
        </div>
    </section>

    <section class="detail-berita">
        <div class="container">
            <div class="mt-5">
               <div class="row">
                <div class="col-md-8">
                    <h3 class="fw-bold mb-3">TENTANG KATEGORIAL</h3>
                    <p>{!! nl2br(e($kategorial->description)) !!}</p>
                </div>
                <div class="col-md-4">
                    <h3 class="fw-bold mb-3">STRUKTUR PENGURUS</h3>
                    @foreach ($members as $member )
                        <p class="fw-bold">{{ $member->name }}</p>
                        <p class="fw-normal">{{ $member->jabatan }}</p>
                        <hr>
                    @endforeach
                    <p></p>
                </div>
               </div>
            </div>
        </div>
    </section>
@endsection
