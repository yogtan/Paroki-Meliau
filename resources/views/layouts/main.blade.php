<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/information.css">
    <link rel="stylesheet" href="../css/sekretariat.css">

    <title>Xaverian Meliau</title>
</head>

<body>

    <div class="d-flex flex-column min-vh-100">
        <header>
        
            @include('partials.navbar')
        </header>
        <main class="flex-grow-1">
          
            @yield('container')
        </main>
        <footer class="bg-dark text-light text-center">
           
            @include('partials.footer')
        </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var popup = document.getElementById('popup');
        var img = document.querySelector('.img-hero');
        var title = document.getElementById('title');
        var subtitle = document.getElementById('subtitle');
        var schedule = document.getElementById('schedule');
        var sekretariat = document.getElementById('sekretariat');
        var ayat = document.getElementById('ayat');
        var navbar = document.getElementById('navbar');
        var navbarLogo = document.getElementById('navbar-logo');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.remove('transparent');
                navbar.classList.add('white');

                navbarLogo.src = '../img/Logo-black.svg';
            } else {
                navbar.classList.remove('white');
                navbar.classList.add('transparent');
              
                navbarLogo.src = '../img/Logo.svg'; 
            }
        });

        img.style.opacity = '0';
        setTimeout(function() {
            img.style.transition = 'opacity 1s ease';
            img.style.opacity = '1';

        }, 500);

        title.style.opacity = '0';
        setTimeout(function() {
            title.style.transition = 'opacity 1s ease';
            title.style.opacity = '1';

        }, 1000);

        subtitle.style.opacity = '0';
        setTimeout(function() {
            subtitle.style.transition = 'opacity 1s ease';
            subtitle.style.opacity = '1';
            
        }, 1500);
        ayat.style.opacity = '0';
        setTimeout(function() {
            ayat.style.transition = 'opacity 1s ease';
            ayat.style.opacity = '1';

        }, 1500);

        setTimeout(function() {
            schedule.style.opacity = '1';
            schedule.style.transform = 'translateX(0)'; /* Menggeser elemen kembali ke posisi semula */
        }, 1500);

        setTimeout(function() {
            sekretariat.style.opacity = '1';
            sekretariat.style.transform =
                'translateX(0)'; /* Menggeser elemen kembali ke posisi semula */
        }, 1500);
    });



    
</script>

</html>
