@extends('layouts.admin')

@section('adminContent')
    <section class="admin-posts mt-5">
        <div class="container">
            <a href="{{ route('admin_album_create') }}" class="btn btn-primary mb-3">Tambah Album</a>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Album</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Album</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($albums as $index => $album)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td style="max-width: 100px;">{{ $album->name }}</td>
                                    <td style="max-width: 500px;">{{ Str::limit($album->description, 150) }}</td>
                                    <td>
                                        <div class="d-flex mb-1">
                                            <a href="{{ route('admin_showup_album', $album)  }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                            <form action="{{ route('admin_destroy_album', $album) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" id="delete">Hapus</button>
                                            </form>
                                        </div>
                                        <a href="{{ route('admin_show_galeri', $album) }}" class="btn btn-primary btn-sm">Lihat & Tambah Foto</a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection
