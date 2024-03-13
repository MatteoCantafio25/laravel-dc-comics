<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matteo Cantafio">
    <meta name="description" content="@yield('title')">
    <title>@yield('title')</title>
    <link rel="icon" href="{{Vite::asset('resources/img/favicon.ico')}}">

    <!-- CDNS -->
    @yield('cdns')

    <!-- App Js -->
    @vite('resources/js/app.js')
</head>

<body>
  <!-- Header -->
    @include('includes.header')

    <!-- Jumbotron -->
    <div class="jumbotron-container"></div>

    <!-- Main -->
    @yield('main-content')

    @yield('details')

    {{-- Spam --}}
    @yield('spam')

    <!-- Footer -->
    <footer>
        <!-- Footer Top -->
        @include('includes.footertop')

        <!-- Footer Bottom -->
        @include('includes.footerbottom')
    </footer>  

    {{-- Scripts --}}
    @yield('scripts')
</body>
</html>