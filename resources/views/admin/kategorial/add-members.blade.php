@extends('layouts.admin')

@section('adminContent')
    <section class="admin-posts mt-5">
        <div class="container">
            <form action="{{ route('admin_create_member', $kategorial) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3 ">Tambah Pengurus {{ $kategorial->name }}</h4>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="John Doe">

                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Gambar</label>
                            <input name="image" class="form-control form-control-sm" id="formFileSm" type="file"
                                onchange="previewImage(event)">

                            <img class="img-fluid mx-auto d-block mt-3 rounded" id="preview" src="#"
                                alt="Preview Image" style="max-width: 500px">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Example : Ketua OMK">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 mx-3">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <section class="admin-posts mt-5">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Pengurus {{ $kategorial->name }} </h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama </th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            {{-- @dd($kategorial) --}}
                            @if($kategorial->members)
                            @foreach ($kategorial->members as $index => $member)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td style="max-width: 100px;">{{ $member->name }}</td>
                                    <td style="width: 100px;">
                                        <img src="{{ url('storage/' . $member->image) }}" alt="Product Image" width="100px">
                                    </td>
                                    <td style="max-width: 500px;">{{ $member->jabatan }}</td>
                                    <td>
                                        <div class="d-flex mb-1">
                                            <a href="{{ route('admin_showup_member', $member) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                            <form action="{{ route('admin_destroy_member', $member) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" id="delete">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">Tidak ada anggota yang ditemukan.</td>
                            </tr>
                        @endif
                        

                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection
