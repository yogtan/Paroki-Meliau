<nav class="navbar navbar-expand-lg fixed-top bg-transparent" id="navbar">
    <div class="container">
        
        <a class="navbar-brand" href="/"><img src="../img/logo.svg" id="navbar-logo" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
           <img src="../img/Menu.svg" alt="" width="50px"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="/">HOME</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        ABOUT </a>
                    <ul class="dropdown-menu dropdown-menu-white ">
                        <li><a class="dropdown-item" href="/sejarah">Sejarah Paroki</a></li>
                        <li><a class="dropdown-item" href="/romo">Romo Paroki</a></li>
                        <li><a class="dropdown-item" href="/dewan-paroki">Dewan Paroki</a></li>
                        <li><a class="dropdown-item" href="/kategorial">Kategorial</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active " aria-current="page" href="/sekretariat">SEKRETARIAT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active " aria-current="page" href="/galeri">GALERI</a>
                </li>
                <li class="nav-item dropdown  ">
                    <a class="nav-link dropdown-toggle  " href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        INFORMATION
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-white ">
                        <li><a class="dropdown-item " href="/berita">Blog & Berita</a></li>
                        <li><a class="dropdown-item" href="/donasi">Donasi</a></li>
                        <li><a class="dropdown-item" href="/kontak">Kontak</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Menampilkan dropdown menu saat mouse berada di atas item navbar yang memiliki dropdown
    document.addEventListener("DOMContentLoaded", function () {
        var dropdowns = document.querySelectorAll('.nav-item.dropdown');

        dropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('mouseover', function () {
                this.querySelector('.dropdown-menu').classList.add('show');
            });

            dropdown.addEventListener('mouseleave', function () {
                this.querySelector('.dropdown-menu').classList.remove('show');
            });
        });
    });

</script>