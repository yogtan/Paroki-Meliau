@extends('layouts.admin')

@section('adminContent')
    <section class="admin-posts mt-5">
        <div class="container">
            <form action="{{ route('admin_create_posts') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3 ">Tambah Berita</h4>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                            <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Example : OMK Paroki Mengakan Tend OMK 2024">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Gambar</label>
                            <input name="image" class="form-control form-control-sm" id="formFileSm" type="file"
                                onchange="previewImage(event)">

                            <img class="img-fluid mx-auto d-block mt-3 rounded" id="preview" src="#"
                                alt="Preview Image" style="max-width: 500px">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Content Berita</label>
                            <textarea name="content"  class="form-control" id="exampleFormControlTextarea1" rows="3">Teks Panjang</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 mx-3">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection