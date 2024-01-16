<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paroki Meliau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="icon" href="img/favicon.ico" sizes="32x32" type="image/x-icon">
    <link rel="icon" href="img/favicon-64x64.ico" sizes="64x64" type="image/x-icon">




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;800&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:opsz,wght@8..60,200;8..60,300;8..60,400;8..60,500;8..60,600;8..60,700;8..60,800&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sejarah.css">
    <link rel="stylesheet" href="../css/romo.css">
    <link rel="stylesheet" href="../css/informasi.css">
</head>

<body>

    @include('partials.navbar')

    @yield('container')
    @include('partials.footer')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        const navEl = document.querySelector('.navbar');
        var logoImg = document.getElementById('navbar-logo');
        var navbar = document.querySelector('.navbar');

        // Menetapkan logo awal pada saat halaman dimuat
        var originalLogoSrc = 'img/logofix.png'; // Ganti dengan path gambar logo asli
        logoImg.src = originalLogoSrc;

        function toggleNavbarClass() {
            if (window.scrollY >= 56) {
                navEl.classList.add('navbar-scrolled');

                logoImg.src = 'img/logofix2.png';
            } else {
                navEl.classList.remove('navbar-scrolled');
                logoImg.src = originalLogoSrc;
            }
        }

        // Tambahkan kelas saat halaman pertama kali dimuat
        toggleNavbarClass();

        // Event listener untuk scroll
        window.addEventListener('scroll', toggleNavbarClass);


        document.addEventListener('DOMContentLoaded', () => {
            const animatedTexts = document.querySelectorAll('.tes p');
            animatedTexts.forEach((text, index) => {
                setTimeout(() => {
                    text.classList.add('animate');
                }, index * 500); // Menetapkan delay berbeda untuk setiap teks
            });
        });
    </script>
  



</body>

</html>
