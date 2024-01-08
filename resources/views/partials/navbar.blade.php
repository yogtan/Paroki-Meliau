<nav class="navbar navbar-expand-lg fixed-top bg-transparent navbar-scrolled">
    <div class="container">

        <a class="navbar-brand fs-4" href="#"><img src="img/logofix.png" width="80px" alt="logoParoki"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- siodebearrr --}}

        
        <div class="sidebar offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            {{-- sidebar header --}}
            <div class="offcanvas-header border-bottom">
                
                <a class="navbar-brand fs-4" href="#"><img src="img/logofix.png" width="80px" alt="logoParoki"> </a>
                
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            
            
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tentang Gereja
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/sejarah">Sejarah Gereja</a></li>
                            <li><a class="dropdown-item" href="#">Pastor Paroki</a></li>
                            <li><a class="dropdown-item" href="#">Dewan Paroki</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Sekretariat
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Formulir</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Blog & berita
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Lingkungan Gereja</a></li>
                            <li><a class="dropdown-item" href="#">Orang Muda Katolik</a></li>
                            <li><a class="dropdown-item" href="#">Puta & Putri Altar</a></li>

                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</nav>
