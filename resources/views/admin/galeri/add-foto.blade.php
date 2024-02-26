@extends('layouts.admin')

@section('adminContent')
<section class="admin-galeri mt-5">
    <div class="container">
        <form action="{{ route('admin_create_galeri', $album) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 ">Tambah Album Foto {{ $album->name }}</h4>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Gambar</label>
                        <input name="images[]" class="form-control form-control-sm" id="formFileSm" type="file" multiple style="display: none;" onchange="previewImages(event)">
                        <div id="file-selector" class="file-selector">
                            <p class="text-center">Drop Foto Disini atau Klik Disini Untuk Memilih Foto</p>
                        </div>
                        <div id="image-preview-container" class="mt-3"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-3 mx-3">Submit</button>
                {{-- @dd('image') --}}
            </div>
        </form>
    </div>
</section>



    <section class="admin-posts mt-5">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $album->name }} </h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>

                                <th scope="col">Gambar</th>

                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- @dd($album->fotos) --}}

                            @if ($album->fotos)
                                @foreach ($album->fotos as $index => $foto)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>

                                        <td style="width: 600px;">
                                            <img src="{{ url('storage/' . $foto->image) }}" alt="Product Image"
                                                width="100px">
                                        </td>

                                        <td>
                                            <div class="d-flex mb-1">
                                               
                                                <form action="{{ route('admin_destroy_foto', $foto) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        id="delete">Hapus</button>
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
    <script>
        // Select the file input element
        var fileInput = document.getElementById('formFileSm');
    
        // Select the file selector element
        var fileSelector = document.getElementById('file-selector');
    
        // When the file selector is clicked, trigger a click event on the file input
        fileSelector.addEventListener('click', function () {
            fileInput.click();
        });
    
        // Function to preview selected images
        function previewImages(event) {
            var container = document.getElementById('image-preview-container');
            container.innerHTML = ''; // Clear previous previews
            var files = event.target.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();
                reader.onload = function (e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-fluid mx-auto d-block mt-3 rounded';
                    img.style.maxWidth = '500px';
                    container.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
    
    <style>
        /* Style the file selector container */
        .file-selector {
            border: 2px dashed #ccc;
            padding: 20px;
            cursor: pointer;
        }
    
        /* Style the file selector container when hovered */
        .file-selector:hover {
            background-color: #f9f9f9;
        }
    </style>
@endsection
