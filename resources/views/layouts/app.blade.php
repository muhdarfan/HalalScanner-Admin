<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/tabler.css', 'resources/js/app.js'])
</head>
<body class="theme-dark">
<div class="wrapper">
    @include('layouts.components.aside')

    @include('layouts.components.header')

    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            @yield('title', 'Page Title')
                        </h2>
                    </div>
                    @yield('page-action')
                </div>
            </div>
        </div>

        <div class="page-body">
            <div class="container-xl">

                @yield('content')

            </div>
        </div>

        @include('layouts.components.footer')
    </div>
</div>
</body>
</html>
