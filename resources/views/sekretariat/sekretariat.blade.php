@extends('layouts.main')

@section('container')
    <section class="sekretariat align-items-center">
        <div class="container">
            <div class="text-center mt-5">
                <h2 class="text-white fw-bolder">DONASI</h2>
            </div>
        </div>
    </section>

    <section class="sekretariat-konten mt-5">
        <div class="container">
            <div class="dokumen mb-3">
                @foreach ($categories as $category)
                    @if ($category->documents->isNotEmpty())
                        <span class="border border-light d-inline-block w-100">
                            <div class="baptis-teks m-3">
                                <h5 class="fw-bold">{{ strtoupper($category->name) }}</h5>
                            </div>
                            @foreach ($category->documents as $document)
                                <span class="border border-dark d-inline-block bg-light w-100">
                                    <div class="row m-4 ">
                                        <div class="col d-flex">
                                            <img src="../img/Docs.svg" alt="">
                                            <a class="text-dark" href="{{ url('storage/document/' . $document->file) }}" target="_blank">
                                                <p class="align-self-center fw-bolder mt-3">
                                                    {{ strtoupper($document->title) }}
                                                </p>
                                            </a>
                                        </div>
                                        <div class="col text-end align-self-center">

                                            <a href="{{ url('storage/document/' . $document->file) }}" download="{{ $document->file }}" class="btn btn-primary">
                                                Download
                                            </a>

                                        </div>
                                    </div>
                                </span>
                            @endforeach
                        </span>
                    @endif
                @endforeach

            </div>


        </div>

    </section>
@endsection
