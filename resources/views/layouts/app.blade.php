<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ @$meta['description'] }}">
    <meta name="keywords" content="{{ @$meta['keywords'] }}">
    <meta property="og:site_name" content="{{ @$meta['app_name'] }}">
    <link rel="canonical" href="{{ @$meta['app_url'] }}"/>
    <meta property="og:title" content="{{ @$meta['title'] }}"/>
    <meta property="og:description" content="{{ @$meta['description'] }}"/>
    <meta property="og:url" content="{{ @$meta['app_url'] }}"/>
    <link rel="shortcut icon" href="{{ @$meta['favicon'] }}" type="image/x-icon">



    <title>{{ @$meta['title'] }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
    ">

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    @yield('css')
    @stack('css')
</head>
<body>
    <div id="app">
        @navbar
        @sidebar
        <main class="flex-1 py-4">
            @yield('content')
        </main>
        @endsidebar
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

@yield('scripts')
@stack('js')

</body>
</html>
