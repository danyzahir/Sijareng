<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
        <div class="navbar">
            <div class="header">SIJARENG</div>
            <div class="navbar">
                <a href="{{ route('home') }}">BERANDA</a>
                <a href="{{ route('matkul') }}">JADWAL</a>
                <a href="{{ route('tugas') }}">TUGAS</a>
                <a href="{{ route('pembayaran') }}">PEMBAYARAN</a>
            </div>
            <div class="profile">
                @auth
                    <img src="https://via.placeholder.com/40" alt="User Avatar">
                    <br>
                    <span>{{ Auth::user()->name }}</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        style="color: white; margin-left: 10px; font-weight: bold;">
                        Logout
                    </a>
                @endauth
            </div>
        </div>
    </header>
</body>
</html>
