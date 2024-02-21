@extends('layouts.admin')

@section('adminContent')
    <section class="edit-posts mt-5">
        <div class="container">
            <form action="{{ route('admin_edit_member', $member) }}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3 ">Edit Member</h4>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Example : OMK Paroki Mengakan Tend OMK 2024" value="{{ $member->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                            <input name="jabatan" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Example : OMK Paroki Mengakan Tend OMK 2024" value="{{ $member->jabatan }}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Gambar</label>
                            <input name="image" class="form-control form-control-sm" id="formFileSm" type="file"
                                onchange="previewImage(event)">
                            @if ($member->image)
                                <img style="object-fit: cover;"
                                    class="rounded img-fluid mx-auto d-block mt-3 rounded"
                                    src="{{ url('storage/' . $member->image) }}" alt="Product Image" width="200px"
                                    height="200px">
                            @endif
                            <img class="img-fluid mx-auto d-block mt-3 rounded" id="preview" src="#"
                                alt="Preview Image" style="max-width: 500px">
                        </div>


                    </div>
                    <button type="submit" class="btn btn-primary mb-3 mx-3">Submit</button>

                </div>

            </form>
        </div>
    </section>
@endsection
