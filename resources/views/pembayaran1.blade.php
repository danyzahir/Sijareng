<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIJARENG</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f3f6;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: left;
            font-size: 24px;
            font-weight: bold;
        }

        .navbar {
            display: flex;
            justify-content: center;
            background-color: #007bff;
            padding: 10px 0;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            font-size: 18px;
            font-weight: bold;
            position: relative;
        }

        .navbar a::after {
            content: '';
            display: block;
            height: 3px;
            background: white;
            width: 0%;
            transition: width 0.3s;
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
        }

        .navbar a:hover::after,
        .navbar a.active::after {
            width: 100%;
        }

        .profile {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            text-align: center;
        }

        .profile img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }

        .form-container {
            max-width: 400px;
            margin: 60px auto;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            font-size: 24px;
            color: #007bff;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 16px;
            transition: border-color 0.3s ease;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        .form-group .readonly {
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            pointer-events: none;
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .submit-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .form-container .info {
            text-align: center;
            font-size: 14px;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>
<body>
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
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white; margin-left: 10px; font-weight: bold;">
                Logout
            </a>
        @endauth
    </div>

    <div class="form-container">
        <h2>Form Pembayaran</h2>
        <form action="/submit-pembayaran" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select id="kelas" name="kelas" required>
                    <option value="" disabled selected>Pilih Kelas</option>
                    <option value="1">Kelas 1</option>
                    <option value="2">Kelas 2</option>
                    <option value="3">Kelas 3</option>
                    <option value="4">Kelas 4</option>
                    <option value="5">Kelas 5</option>
                    <option value="6">Kelas 6</option>
                </select>
            </div>

            <div class="form-group">
                <label for="metode">Metode Pembayaran</label>
                <select id="metode" name="metode" required>
                    <option value="" disabled selected>Pilih Metode Pembayaran</option>
                    <option value="cash">Cash</option>
                    <option value="e-wallet">E-wallet</option>
                </select>
            </div>

            <div class="form-group">
                <label for="total">Total Pembayaran</label>
                <input type="text" id="total" name="total" value="Rp. 150.000" class="readonly" readonly>
            </div>

            <button type="submit" class="submit-btn">Bayar Sekarang</button>
        </form>
    </div>
</body>
</html>
