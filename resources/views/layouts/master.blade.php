<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />
</head>

<body>
    <header class="container d-flex flex-wrap align-items-center justify-content-between bg-branded mb-2 pt-2">
        @include('includes.header')
    </header>
    <main>
        @yield('content')
    </main>
    <section class="container">
        @include('includes/studentsForm')
    </section>
    <section class="footer-hero d-flex flex-column h-100 text-white py-5 flex-grow-1">
        @include('includes.footerHero')
    </section>
    <footer class="w-100 pt-4 pb-2 flex-shrink-0">
        @include('includes.footer')
    </footer>
</body>

</html>
