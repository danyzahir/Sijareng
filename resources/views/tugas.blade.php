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
                background-color: #f8f9fa;
            }

            .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .header .title {
            margin: 0;
            font-size: 24px;
            position: absolute;
            left: 20px; /* Posisikan judul di sebelah kiri */
            transition: left 0.3s;
        }

        .navbar {
            display: flex;
            justify-content: center;
            width: 100%; /* Pastikan navbar berada di tengah */
            align-items: center;
            list-style: none;
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

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); /* Gradien modern biru ke ungu */
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 30px;
            width: 250px; /* Membesarkan ukuran kartu */
            height: 150px; /* Tinggi kartu ditambah */
            text-align: center;
            font-size: 20px; /* Membesarkan ukuran font */
            font-weight: bold;
            color: white; /* Teks berwarna putih */
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-12px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    @include('menu') <!-- Memanggil header yang sudah kita buat -->

    <div class="container">
        @yield('content') <!-- Tempat untuk konten yang diisi oleh child view -->
    </div>
    <div class="content">
        <div class="card">MATEMATIKA (UMUM)</div>
        <div class="card">MATEMATIKA</div>
        <div class="card">B.INDONESIA</div>
        <div class="card">B.INGGRIS</div>
        <div class="card">IPS</div>
        <div class="card">IPAS</div>
        <div class="card">KIMIA</div>
        <div class="card">BIOLOGI</div>
        <div class="card">GEOGRAFI</div>
    </div>
</body>
</html>
