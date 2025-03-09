<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>
        @hasSection("title")
            @yield('title')
        @else
            Kraftsportverein 1959 Langen e.V.
        @endif
    </title>

    <script src="{{ asset("assets/vendor/jquery/jquery-3.7.1.min.js") }}"></script>


    <link href="{{ asset("assets/img/favicon.png") }}" rel="icon">
    <link href="{{ asset("assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

    <!-- Font Nunito (Google Font) -->
    <link href="{{ asset("assets/css/fonts.css") }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset("assets/vendor/aos/aos.css") }}" rel="stylesheet">
    <script src="{{ asset("assets/vendor/aos/aos.js") }}"></script>

    <link href="{{ asset("assets/vendor/bootstrap-4.1.3/css/bootstrap.min.css") }}" rel="stylesheet">
    <script src="{{ asset("assets/vendor/bootstrap-4.1.3/js/bootstrap.min.js") }}"></script>

    <link href="{{ asset("assets/vendor/glightbox-3.3.0/css/glightbox.min.css") }}" rel="stylesheet">
    <script src="{{ asset("assets/vendor/glightbox-3.3.0/js/glightbox.min.js") }}"></script>

    <link href="{{ asset("assets/vendor/fontawesome-free-6.7.2/css/all.min.css") }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(["resources/css/template.css", "resources/js/template.js"])
    @vite("resources/css/custom.css")

</head>

<body>

<x-app.header />

@yield("content")

<x-app.preloader/>
<x-app.back-to-top/>
<x-app.footer />

</body>
</html>

