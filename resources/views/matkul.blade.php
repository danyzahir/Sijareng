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
                /* Menambahkan latar belakang */
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

        .schedule-container {
            width: 80%;
            max-width: 800px;
            margin: 20px auto;
        }

        .schedule {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px;
        }

        .schedule tr {
            background-color: #7a7a7a;
            color: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .schedule td {
            padding: 15px;
        }

        .day {
            width: 20%;
            font-weight: bold;
            text-align: center;
            background-color: #6a6a6a;
        }

        .details {
            width: 80%;
        }
    </style>
</head>
<body>
    @include('menu') <!-- Memanggil header yang sudah kita buat -->

    <div class="container">
        @yield('content') <!-- Tempat untuk konten yang diisi oleh child view -->
    </div>

    <div class="schedule-container">
        <table class="schedule">
            <tr>
                <td class="day">SENIN</td>
                <td class="details">
                    Jam : 16.00 - 19.00<br>
                    Kegiatan : Baca Al-Qur’an, Matematika, Praktik Sholat, Matematika (umum)
                </td>
            </tr>
            <tr>
                <td class="day">SELASA</td>
                <td class="details">
                    Jam : 16.00 - 19.00<br>
                    Kegiatan : Baca Al-Qur’an, Matematika, B.Indonesia, IPAS
                </td>
            </tr>

            <tr>
                <td class="day">RABU</td>
                <td class="details">
                    Jam : 16.00 - 19.00<br>
                    Kegiatan : Baca Al-Qur’an, Matematika, Menulis Latin, B.Inggris
                </td>
            </tr>
            <tr>
                <td class="day">Kamis</td>
                <td class="details">
                    Jam : 16.00 - 19.00<br>
                    Kegiatan : Baca Al-Qur’an, Matematika, Menulis Latin, B.Inggris
                </td>
            </tr>
            <tr>
                <td class="day">Jum"at</td>
                <td class="details">
                    Jam : 16.00 - 19.00<br>
                    Kegiatan : Baca Al-Qur’an, Matematika, Menulis Latin, B.Inggris
                </td>
            </tr>
            <tr>
                <td class="day">Sabtu</td>
                <td class="details">
                    Jam : 16.00 - 19.00<br>
                    Kegiatan : Baca Al-Qur’an, Matematika, Menulis Latin, B.Inggris
                </td>
            </tr>
            <tr>
                <td class="day">Minggu</td>
                <td class="details">
                    Jam : 16.00 - 19.00<br>
                    Kegiatan : Baca Al-Qur’an, Matematika, Menulis Latin, B.Inggris
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
