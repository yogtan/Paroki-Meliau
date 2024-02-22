@extends('layouts.admin')

@section('adminContent')
    <section class="admin-posts mt-5">
        <div class="container">
            <form action="{{ route('admin_create_dokumen') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3 ">Tambah Dokumen</h4>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="John Doe">
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
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
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
                    <h5 class="card-title">Daftar Dokumen </h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama </th>
                                <th scope="col">Kategori </th>
                                <th scope="col">Preview Dokumen</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- @dd($documents) --}}

                            @foreach ($categories as $category)
                            @foreach ($category->documents as $index => $document)
                            <tr>
                                <th scope="row">{{ $loop->parent->index * $loop->count + $loop->index + 1 }}</th>
                                <td style="max-width: 100px;">{{ $category->name }}</td>
                                        <td style="max-width: 100px;">{{ $document->title }}</td>
                                        <td style="max-width: 400px;">
                                            <form action="{{ url('storage/document/' . $document->file) }}" method="GET"
                                                target="_blank">
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Lihat Dokumen
                                                </button>
                                            </form>
                                        </td>


                                        <td>
                                            <div class="d-flex mb-1">
                                                <a href="{{ route('admin_showup_dokumen', $document) }}"
                                                    class="btn btn-warning btn-sm me-2">Edit</a>
                                                <form action="{{ route('admin_destroy_dokumen', $document) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </section>

    <script>
        // Mendapatkan URL PDF dari query parameter
        const pdfUrl = new URLSearchParams(window.location.search).get('pdf');

        // Mendapatkan referensi canvas
        const canvas = document.getElementById('pdf-render');

        // Memuat PDF
        pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
            // Mengambil halaman pertama PDF
            pdf.getPage(1).then(page => {
                // Menentukan skala tampilan
                const scale = 1.5;
                const viewport = page.getViewport({
                    scale
                });

                // Menentukan konteks gambar
                const context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render PDF ke canvas
                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                page.render(renderContext);
            });
        });
    </script>
@endsection
