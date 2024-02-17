@extends('layouts.admin')

@section('adminContent')
    <section class="admin-dokumen mt-5">
        <div class="container">
            <a href=""" class="btn btn-primary mb-3">Tambah Dokumen</a>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Dokumen</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Dokumen</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>y</td>
                                <td>h</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection
