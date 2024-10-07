 <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SIJARENG</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
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

            .content {
                text-align: center;
                padding: 50px 20px;
            }

            .slider {
                position: relative;
                width: 100%;
                /* Sesuaikan lebar slider */
                max-width: 600px;
                margin: auto;
                overflow: hidden;
                border-radius: 10px;
            }

            .slides {
                display: flex;
                /* Membuat gambar berjejer secara horizontal */
                width: 100%;
                /* Pastikan lebar slide cukup untuk semua gambar */
                transition: transform 0.5s ease-in-out;
            }

            .slides img {
                width: 100%;
                /* Perkecil gambar jadi 70% dari lebar slider */
                height: 50%;
                margin: 0 auto;
                /* Agar gambar berada di tengah */
                border-radius: 10px;
            }

            .content .description {
                margin-top: 20px;
                font-size: 18px;
            }

            .content .description strong {
                font-size: 20px;
            }

            .auth-buttons {
                margin-top: 30px;
                /* Memberikan jarak antara deskripsi dan tombol */
            }

            .auth-buttons a {
                border-radius: 0.375rem;
                /* border-radius untuk tombol */
                padding: 0.5rem 1rem;
                /* padding untuk tombol */
                text-decoration: none;
                /* menghapus underline */
                margin: 0 10px;
                /* memberi jarak antar tombol */
                transition: background-color 0.3s;
            }

            .auth-buttons .login {
                color: black;
                border: 1px solid transparent;
            }

            .auth-buttons .login:hover {
                background-color: rgba(0, 0, 0, 0.1);
            }

            .auth-buttons .register {
                background-color: #FF2D20;
                color: white;
            }

            .auth-buttons .register:hover {
                background-color: #c62828;
                /* Warna gelap saat hover */
            }
        </style>
    </head>

    <body>
 @include('menu') <!-- Memanggil header yang sudah kita buat -->

    <div class="container">
        @yield('content') <!-- Tempat untuk konten yang diisi oleh child view -->
    </div>

        <div class="content">
            <div class="slider">
                <div class="slides">
                    <img src="{{ asset('img/gambar.jpg') }}" alt="Image 1" />
                    <img src="{{ asset('img/gambar2.jpg') }}" alt="Image 2" />
                </div>
            </div>
            <div class="description">
                <strong>JARENG (Belajar Bareng)</strong><br />
                JARENG merupakan sebuah inisiatif pendidikan yang mengedepankan kolaborasi antara guru, orang tua, dan santri untuk menciptakan lingkungan belajar yang harmonis dan mendukung. Dengan tekad bulat, semua pihak bersatu dalam semangat untuk belajar bersama, mencapai tujuan bersama, serta membentuk generasi yang cerdas dan berakhlak mulia.

                Berlokasi di Desa Kedungwungu, Kecamatan Anjatan, Kabupaten Indramayu, JARENG menjadi wadah bagi para santri untuk berkembang, mengasah potensi akademik, spiritual, dan sosial. Kami percaya bahwa dengan kebersamaan, proses belajar menjadi lebih menyenangkan dan bermakna, serta mampu membawa perubahan positif bagi masyarakat sekitar.
            </div>



        </div>
        <script>
            let currentIndex = 0;
            const slides = document.querySelector('.slides');
            const totalSlides = document.querySelectorAll('.slides img').length;
            const navbarLinks = document.querySelectorAll('.navbar a');

            function showNextSlide() {
                currentIndex++;
                if (currentIndex >= totalSlides) {
                    currentIndex = 0; // Kembali ke gambar pertama
                }
                slides.style.transform = `translateX(${-currentIndex * 100}%)`;
            }

            setInterval(showNextSlide, 3000);

            // Event listener untuk mengatur garis aktif pada navbar
            navbarLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navbarLinks.forEach(l => l.classList.remove(
                    'active')); // Menghapus kelas aktif dari semua tautan
                    this.classList.add('active'); // Menambahkan kelas aktif pada tautan yang diklik
                });
            });
        </script>
    </body>

    </html>
