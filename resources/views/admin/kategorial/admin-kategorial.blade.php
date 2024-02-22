@extends('layouts.admin')

@section('adminContent')
    <section class="admin-posts mt-5">
        <div class="container">
            <a href="{{ route('admin_showkat_create') }}" class="btn btn-primary mb-3">Tambah Kategorial</a>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Kategorial</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Kategorial</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategorials as $index => $kategorial)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td style="max-width: 100px;">{{ $kategorial->name }}</td>
                                    <td style="max-width: 500px;">{{ Str::limit($kategorial->description, 150) }}</td>
                                    <td>
                                        <div class="d-flex mb-1">
                                            <a href="{{ route('admin_showup_kategorial', $kategorial)  }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                            <form action="{{ route('admin_destroy_kategorial', $kategorial) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" id="delete">Hapus</button>
                                            </form>
                                        </div>
                                        <a href="{{ route('admin_show_member', $kategorial) }}" class="btn btn-primary btn-sm">Lihat & Tambah Pengurus</a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection
