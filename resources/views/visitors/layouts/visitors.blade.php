<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? 'HOME' }} | Saurabh Jewel Pack</title>
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="images\logosjp.png" />


    <meta name="theme-color" content="#a7baff">
    <!--plugin-css-->

    <meta property="og:site_name" content="Saurav Jewel Pack">

    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ config('app.url') }}/images/sauravlogo.png">

    <link rel="canonical" href="{{ config('app.url') }}">


    <meta name="description"
        content="Saurabh Jewel Pack, trusted since 1983, excels in providing exceptional packing services to jewelers. With unbeatable quality at affordable prices, they prioritize earning trust through their brand power and customer satisfaction.">
    <meta property="og:title" content="Saurav Jewel Pack">
    <meta property="og:description"
        content="Saurabh Jewel Pack, trusted since 1983, excels in providing exceptional packing services to jewelers. With unbeatable quality at affordable prices, they prioritize earning trust through their brand power and customer satisfaction.">



    <meta name="theme-color" content="#a7baff">
    <meta name="msapplication-TileColor" content="#a7baff">
    <meta name="msapplication-navbutton-color" content="#a7baff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#a7baff">



    @include('visitors.inc.headerlinks')
    @yield('head')
    <style>
        html,
        body {
            overflow-x: hidden
        }
    </style>
</head>

<body>
    <!-- START PRELOADER -->

    <!-- END PRELOADER -->
    <!-- START HEADER SECTION -->
    @include('visitors.inc.header')
    <!-- END HEADER SECTION -->
    <!-- START SLIDER SECTION -->
    @yield('content')
    <!-- END CLIENT SECTION -->
    <!-- START FOOTER -->

    @include('visitors.inc.footer')
    @include('visitors.inc.footerlinks')
    @yield('scripts')
    <!-- Latest jQuery -->
    @if (Session::has('success'))
    <script>
        swal("Success", "{{ Session::get('success') }}", 'success', {
        buttons: {
            confirm: "OK",
        },
    });
    </script>
    @endif

</body>

</html>