@extends('layouts.admin')

@section('adminContent')
    <section class="admin-posts mt-5">
        <div class="container">
            <a href="{{ route('admin_show_create') }}" class="btn btn-primary mb-3">Tambah Postingan Berita</a>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title ">Daftar Postingan Berita</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Image</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $index => $post)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td style="max-width: 100px;">{{ $post->title }}</td>
                                    <td style="width: 100px;">

                                        <img src="{{ url('storage/' . $post->image) }}" alt="Product Image" width="100px">

                                    </td>
                                    <td style="max-width: 200px;">{{ Str::limit($post->content, 150) }}</td>

                                    <td > 
                                        <div class="d-flex">
                                        <a href="{{ route('admin_show_update', $post) }}"
                                            class="btn btn-warning btn-sm me-2">Edit  </a>
                                        <form action="{{ route('admin_destroy_posts', $post) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection
