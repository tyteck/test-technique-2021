<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <meta name="description" content="Hosting youtube podcasts">
    <meta name="keywords" content="youtube, podcast, podcats, hosting, converting">
    <meta name="author" content="Frederick Tyteca">

    <!--Favicon-->
    <link rel="icon" type="image/png" href="/favicon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>