<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        @include('home')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
