<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @stack('styles')
</head>
<body>

    <header>
        @yield('header')
        @include('_partials.nav')
    </header>

    <section>
        @yield('body')
    </section>
    <main>
        @yield('content')
    </main>

    <footer>
        @include('_partials.footer')
    </footer>
</body>
</html>