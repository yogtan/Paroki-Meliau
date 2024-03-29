@extends('layouts.admin')

@section('adminContent')
    <section class="admin-posts mt-5">
        <div class="container">
            <form action="{{ route('admin_create_kategorial') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3 ">Tambah Kategorial</h4>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Kategorial</label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="OMK (Orang Muda Katolik)" ">

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary mb-3 mx-3">Submit</button>

                </div>

            </form>
        </div>
    </section>
@endsection
