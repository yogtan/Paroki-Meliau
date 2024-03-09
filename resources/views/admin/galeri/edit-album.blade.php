@extends('layouts.admin')

@section('adminContent')
    <section class="edit-posts mt-5">
        <div class="container">
            <form action="{{ route('admin_update_album', $album) }}" method="post" enctype="multipart/form-data">
                
                @method('patch')
                @csrf

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3 ">Edit Album</h4>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Album</label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="OMK (Orang Muda Katolik)" value="{{ $album->name }}">
                            
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Gambar</label>
                            <input name="image" class="form-control form-control-sm" id="formFileSm" type="file"
                            onchange="previewImage(event)">
                            @if ($album->image)
                                <img style="max-width: 500px" class="img-fluid mx-auto d-block mt-3 rounded" src="{{ url('storage/' . $post->image) }}" alt="Product Image">
                            @endif
                            <img class="img-fluid mx-auto d-block mt-3 rounded" id="preview" src="#"
                                alt="Preview Image" style="max-width: 500px">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{!! nl2br($album->description) !!}</textarea>
                        </div>
                        
                        
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 mx-3">Submit</button>

                </div>

            </form>
        </div>
    </section>

 
@endsection
