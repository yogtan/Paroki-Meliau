@extends('layouts.admin')

@section('adminContent')
    <section class="edit-posts mt-5">
        <div class="container">
            <form action="{{ route('admin_update_dokumen', $document) }}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3 ">Edit Dokumen</h4>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Example : OMK Paroki Mengakan Tend OMK 2024" value="{{ $document->title }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">File</label>
                            <input name="file" class="form-control form-control-sm" id="formFileSm" type="file"
                                onchange="previewImage(event)">

                            <img class="img-fluid mx-auto d-block mt-3 rounded" id="preview" src="#"
                                alt="Preview Image" style="max-width: 500px">
                        </div>

                         <div class="mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <select name="categories_id" class="form-control" id="category">
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 mx-3">Submit</button>

                </div>

            </form>
        </div>
    </section>
@endsection
