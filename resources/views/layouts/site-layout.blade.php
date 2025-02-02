<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ 'Ultimate Image Compressor - Optimize Your Images for Faster Websites' }}</title>
    <meta name="description"
        content="{{ 'Compress and optimize images without losing quality. Improve your website’s speed and performance with our advanced image compression tool.' }}">
    <meta name="keywords"
        content="{{ 'image compressor, image optimization, website speed, image quality, compress images, online image compressor, web performance optimization, fast website' }}">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ 'Ultimate Image Compressor - Optimize Your Images for Faster Websites' }}">
    <meta property="og:description"
        content="{{ 'Reduce your image file sizes without compromising on quality, improving your website’s performance and loading times. Try our easy-to-use image compression tool today!' }}">
    <meta property="og:image" content="{{ asset('dist/img/logo.png') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ 'Ultimate Image Compressor - Optimize Your Images for Faster Websites' }}">
    <meta name="twitter:description"
        content="{{ "Improve your website's performance by compressing images without losing quality. Fast, efficient, and free online image compression tool." }}">
    <meta name="twitter:image" content="{{ asset('dist/img/logo.png') }}">

    <!-- Favicons -->
    <link href="{{ asset('dist/img/favicon/favicon.ico') }}" rel="icon">
    <link href="{{ asset('dist/img/favicon/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('dist/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="{{ asset('dist/css/main.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body class="index-page">
    @include('sections.header')
    <main class="main">
        @yield('content')
    </main>
    @include('sections.footer')
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('dist/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('dist/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('dist/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
