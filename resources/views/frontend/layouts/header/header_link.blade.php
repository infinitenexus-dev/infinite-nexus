<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">

    <meta property="og:title" content="Your all-in-one hub for transforming ideas into reality">
    <meta property="og:description" content="Contact us to get a free consultation.">
    <meta property="og:image" content="{{ asset('frontend/img/Favicon.svg') }}">
    <meta property="og:url" content="https://infinitynexus.tech/">
    <meta property="og:type" content="website">


    <!-- Favicon -->
    <link href="{{ asset('frontend/img/Favicon.svg') }}" rel="icon">
    <link rel="apple-touch-icon" href="{{ asset('frontend/img/Favicon.svg') }}">

    <!-- Google Web Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet"> --}}

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/font-awesome/sweetalert2.min.css') }}">
    <script src="{{ asset('frontend/font-awesome/sweetalert2.min.js') }}"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include jQuery Validation Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>



</head>

<body>
    @if (session('status') === 'success')
    <script>
        Swal.fire({
            title: 'Success!',
            text: '{{ session('message') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
@elseif(session('status') === 'error')
    <script>
        Swal.fire({
            title: 'Error!',
            text: '{{ session('message') }}',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
@endif