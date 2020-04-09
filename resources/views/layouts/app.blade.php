<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@livewireStyles

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('layouts.nav')
        <div class="container-fluid">
            <main class="py-4">
                @include('layouts.partials.flashes')
                @yield('content')
            </main>
        </div>
    </div>
    @yield('scripts')
    @livewireScripts

    <!-- Font awesome  -->
    <script src="https://kit.fontawesome.com/4e8530644b.js" crossorigin="anonymous"></script>


</body>

</html>
