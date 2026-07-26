<?php
session_start();

if (!isset($_SESSION['customer'])) {

    header("Location: login_customer.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Customer Bengkel</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f9;
        }

        .navbar {
            background: linear-gradient(135deg, #0077b6, #00b4d8);
            padding: 20px 50px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;

            position: sticky;
            top: 0;
            z-index: 999;
        }

        .logout {
            background: red;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 10px;
        }

        .hero {
            background: white;
            margin: 20px;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }


        .hero h1 {
            color: #0077b6;
            margin-bottom: 10px;
        }

        .hero p {
            color: #555;
        }

        .container {
            width: 95%;
            margin: auto;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            flex: 1;
            min-width: 250px;
            background: white;
            padding: 25px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .08);
            transition: .3s;

            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .status-box {
            background: #ffffff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: .3s;
        }

        .status-box:hover {
            transform: translateY(-5px);
        }

        .status-box h2 {
            color: #0077b6;
            margin-bottom: 15px;
        }

        .status-box p {
            margin: 8px 0;
            color: #555;
        }

        .status {
            color: green;
            font-weight: bold;
        }

        .promo {
            color: red;
            font-size: 18px;
            font-weight: bold;
        }

        .card h2 {
            color: #0077b6;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .card p {
            color: #555;
        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #0077b6;
            color: white;
            text-decoration: none;
            border-radius: 10px;
        }

        .footer {
            margin-top: 30px;
            padding: 20px;
            text-align: center;
            background: #0077b6;
            color: white;
        }

        .card .btn {
            margin-top: auto;
            align-self: center;
        }

        .galeri {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .galeri {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .mekanik {
            background: white;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .mekanik h3 {
            margin-top: 10px;
            color: #0077b6;
        }

        .mekanik p {
            margin-top: 10px;
            color: #555;
            line-height: 1.6;
            text-align: justify;
        }

        .menu {
            display: flex;
            gap: 25px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .menu a:hover {
            color: yellow;
        }

        .galeri-home {
            margin-top: 30px;
        }

        .galeri-home h2 {
            text-align: center;
            color: #0077b6;
            margin-bottom: 20px;
        }

        .galeri-foto {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        .galeri-foto img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 15px;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .galeri-foto img:hover {
            transform: scale(1.05);
        }

        .galeri-home p {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }

        #lokasi {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        #lokasi h1 {
            color: #0077b6;
            margin-bottom: 15px;
        }

        #lokasi iframe {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .footer-modern {
            background: #0b2c84;
            color: white;
            padding: 50px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .footer-box h2 {
            margin-bottom: 15px;
        }

        .footer-box p {
            line-height: 1.8;
        }

        .sosmed {
            margin-top: 15px;
        }

        .sosmed a {
            text-decoration: none;
            font-size: 25px;
            margin-right: 10px;
            background: white;
            padding: 10px;
            border-radius: 50%;
        }

        .artikel {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .artikel img {
            width: 70px;
            height: 50px;
            object-fit: cover;
            border-radius: 10px;
        }

        .copyright {
            background: #07205f;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 18px;
        }

        .sosmed {
            margin-top: 15px;
            display: flex;
            gap: 15px;
        }

        .sosmed a {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.3s;
        }

        .sosmed a:hover {
            transform: translateY(-5px);
        }

        .sosmed img {
            width: 30px;
            height: 30px;
            object-fit: contain;
        }
    </style>

</head>

<body>

    <div class="navbar">

        <h2>🚗 KENGGEMOTI RACING TEAM</h2>

        <div class="menu">
            <a href="#home">Home</a>
            <a href="#layanan">Layanan</a>
            <a href="blog.php">Blog</a>
            <a href="#lokasi">Lokasi</a>
            <a href="#tentang">Tentang Kami</a>
            <a href="booking.php">Booking</a>
        </div>

        <a class="logout" href="logout_customer.php">
            Logout
        </a>

    </div>

    <div class="hero" id="home">

        <h1>Selamat Datang Customer 👋</h1>

        <p>
            Servis kendaraan lebih mudah, cepat, dan terpercaya.
        </p>

    </div>

    <!-- Statistik Bengkel -->
    <div class="container">

        <div class="cards">

            <div class="card">
                <h2>🚗 350+</h2>
                <p>Motor Sudah Diservis</p>
            </div>

            <div class="card">
                <h2>😊 500+</h2>
                <p>Pelanggan Puas</p>
            </div>

            <div class="card">
                <h2>🔧 4</h2>
                <p>Mekanik Profesional</p>
            </div>

            <div class="card">
                <h2>🏆 5 Tahun</h2>
                <p>Pengalaman Bengkel</p>
            </div>

        </div>

    </div>

    <div class="container" id="layanan">

        <div class="cards">

            <div class="card">
                <h2>🛠 5+</h2>
                <p>Layanan Bengkel</p>
            </div>

            <div class="card">
                <h2>😊 100+</h2>
                <p>Pelanggan Puas</p>
            </div>

            <div class="card">
                <h2>📞 08.00 - 18.00</h2>
                <p>Layanan Customer</p>
            </div>

            <div class="card">
                <h2>⭐ 4.9</h2>
                <p>Rating Bengkel</p>
            </div>

        </div>


        <div class="cards">

            <div class="cards">

                <div class="card">
                    <img src="assets/img/servis mesin motor.jpg"
                        alt="Servis Motor"
                        style="width:100%; height:200px; object-fit:cover; border-radius:10px;">

                    <h2>🛠 Servis Mesin Motor</h2>

                    <p>Servis lengkap untuk semua jenis motor.</p>

                    <a href="servis_motor.php" class="btn">Lihat</a>
                </div>
                <div class="card">
                    <img src="assets/img/ganti oli.webp"
                        alt="Ganti Oli"
                        style="width:100%; height:200px; object-fit:cover; border-radius:10px;">

                    <h2>🛢 Ganti Oli</h2>

                    <p>Oli berkualitas untuk performa terbaik.</p>

                    <a href="ganti_oli.php" class="btn">Lihat</a>
                </div>

                <div class="card">
                    <img src="assets/img/servis cvt.jpg"
                        alt="Servis CVT"
                        style="width:100%; height:200px; object-fit:cover; border-radius:10px;">

                    <h2>⚙ Servis CVT</h2>

                    <p>Perawatan CVT agar motor tetap nyaman.</p>

                    <a href="servis_cvt.php" class="btn">Lihat</a>
                </div>

                <div class="card">
                    <img src="assets/img/tambal ban.webp"
                        alt="Tambal Ban"
                        style="width:100%; height:200px; object-fit:cover; border-radius:10px;">

                    <h2>🔧 Tambal Ban</h2>

                    <p>Tambal ban biar aman disetiap perjalananmu.</p>

                    <a href="assets/img/tambal_ban.php" class="btn">Lihat</a>
                </div>

                <div class="card">
                    <img src="assets/img/boreup.webp"
                        alt="Naik CC Motor"
                        style="width:100%; height:200px; object-fit:cover; border-radius:10px;">

                    <h2>🏍️ Naik CC Motor</h2>

                    <p>Kalau motor ingin lebih kencang, jangan lupa naikkan kapasitas CC sesuai kebutuhan.</p>

                    <a href="naik_cc.php" class="btn">Lihat</a>
                </div>


            </div>

            <div style="text-align:center; margin:30px 0;">
                <a href="layanan.php" class="btn"
                    style="padding:15px 35px; font-size:18px;">
                    🔍 Lihat Semua Layanan
                </a>
            </div>

            <div class="cards">

                <div class="card">
                    <h2>📅 Booking Servis</h2>
                    <p>Pesan jadwal servis tanpa antre.</p>
                    <a href="booking.php" class="btn">Booking Sekarang</a>
                </div>

                <div class="card">
                    <h2>📞 Hubungi Kami</h2>
                    <p>WhatsApp: 082234813822</p>
                    <a href="https://wa.me/6282234813822"
                        class="btn">
                        Chat WhatsApp
                    </a>
                </div>

                <div class="card">

                    <h2>📋 Status Servis Saya</h2>

                    <p>Total Booking : 5</p>

                    <p>Sedang Diproses : 1</p>

                    <p>Selesai : 3</p>

                    <p class="status">Status Pembayaran : Lunas</p>

                    <a href="riwayat.php" class="btn">
                        Lihat Riwayat
                    </a>

                </div>

                <div class="card">

                    <h2>🎁 Promo Bengkel</h2>

                    <p class="promo">
                        Diskon 20%
                    </p>

                    <p>
                        Ganti Oli Semua Merek
                    </p>

                    <p>
                        Gratis Cek Mesin
                    </p>

                    <p>
                        Berlaku Sampai 31 Juli 2026
                    </p>

                    <a href="#" class="btn">
                        Lihat Promo
                    </a>

                </div>

                <div class="card">

                    <h2>🕒 Jam Operasional</h2>

                    <p><b>Senin - Jumat</b></p>
                    <p>08.00 - 18.00 WIB</p>

                    <br>

                    <p><b>Sabtu</b></p>
                    <p>08.00 - 16.00 WIB</p>

                    <br>

                    <p><b>Minggu</b></p>
                    <p>Tutup</p>

                    <a href="#lokasi" class="btn">
                        Lihat Lokasi
                    </a>

                </div>

            </div>

        </div>

        <div class="hero" style="margin-top:30px;">

            <h1>⭐ Kenapa Memilih Kami?</h1>

            <div class="cards">

                <div class="card">
                    <h2>⚡</h2>
                    <p>Pengerjaan Cepat</p>
                </div>

                <div class="card">
                    <h2>🛠</h2>
                    <p>Mekanik Berpengalaman</p>
                </div>

                <div class="card">
                    <h2>💰</h2>
                    <p>Harga Terjangkau</p>
                </div>

                <div class="card">
                    <h2>✅</h2>
                    <p>Garansi Servis</p>
                </div>

            </div>

        </div>

        <div class="hero" id="tentang" style="margin-top:30px;">

            <h1>🏍️ Tentang Kami</h1>

            <div class="galeri">

                <div class="galeri">

                    <div class="mekanik">
                        <img src="assets/img/1.jpg" alt="Mekanik 1">

                        <h3>🔧 Sulaiman</h3>

                        <p>
                            Mekanik Senior yang memiliki pengalaman lebih dari 10 tahun
                            dalam perbaikan mesin motor. Bertugas melakukan diagnosis
                            kerusakan dan memastikan setiap kendaraan kembali dalam
                            kondisi prima.
                        </p>
                    </div>

                    <div class="mekanik">
                        <img src="assets/img/2.jpg" alt="Mekanik 2">

                        <h3>⚙ Budi Setiawan</h3>

                        <p>
                            Spesialis Servis CVT dan sistem transmisi otomatis.
                            Bertanggung jawab dalam perawatan CVT agar kendaraan
                            tetap nyaman, halus, dan bertenaga saat digunakan.
                        </p>
                    </div>

                    <div class="mekanik">
                        <img src="assets/img/8.jpg" alt="Mekanik 3">

                        <h3>🛢 Rizky Pratama</h3>

                        <p>
                            Ahli dalam perawatan berkala dan penggantian oli.
                            Memastikan penggunaan oli sesuai spesifikasi sehingga
                            performa mesin tetap maksimal dan awet.
                        </p>
                    </div>

                    <div class="mekanik">
                        <img src="assets/img/7.jpg" alt="Mekanik 4">

                        <h3>🏍 Dimas Racing</h3>

                        <p>
                            Mekanik Modifikasi dan Bore Up. Berpengalaman dalam
                            meningkatkan performa motor, mulai dari setting mesin,
                            upgrade komponen, hingga peningkatan kapasitas CC.
                        </p>
                    </div>

                </div>

            </div>

            <p style="margin-top:15px; line-height:1.8; text-align:justify;">

                KENGGEMOTI Racing Team (KRT) adalah bengkel motor yang menyediakan berbagai
                layanan perawatan dan perbaikan kendaraan roda dua. Kami melayani
                servis mesin, ganti oli, servis CVT, tambal ban, hingga modifikasi
                dan peningkatan performa motor (bore up/naik CC).

                <br><br>

                Dengan dukungan mekanik yang berpengalaman dan penggunaan suku cadang
                berkualitas, kami berkomitmen memberikan pelayanan terbaik untuk
                menjaga performa dan keamanan kendaraan pelanggan.

                <br><br>

                Kepuasan pelanggan adalah prioritas utama kami. Oleh karena itu,
                kami selalu berusaha memberikan pelayanan yang cepat, ramah,
                profesional, dan terpercaya.

            </p>

        </div>

        <div class="hero" id="lokasi">

            <h1>📍 Lokasi Bengkel</h1>

            <p style="margin-bottom:20px;">
                KENGGEMOTI Racing Team
            </p>

            <iframe
                src="https://www.google.com/maps?q=Mataram&output=embed"
                width="100%"
                height="450"
                style="border:0; border-radius:20px;">
            </iframe>

            <br><br>

            <h3>📌 Alamat</h3>

            <p>
                Jl. Raya Kenggemoti No. 123, Surabaya, Jawa Timur
            </p>

            <br>

            <a href="https://maps.google.com/?q=Surabaya"
                target="_blank"
                class="btn">
                Buka di Google Maps
            </a>

        </div>

        <!-- FOOTER -->
        <div class="footer-modern">

            <div class="footer-box">

                <h2>Tentang Kami</h2>

                <p>
                    KENGGEMOTI Racing Team melayani segala kebutuhan
                    perawatan maupun perbaikan sepeda motor mulai
                    dari servis rutin, penggantian oli, pergantian ban,
                    pergantian aki, sparepart dan lain-lain.
                </p>

            </div>

            <div class="footer-box">

                <h2>Alamat</h2>

                <p>
                    Bengkel kami berlokasi di Surabaya
                </p>

                <div class="sosmed">

                    <a href="tiktok.com/@liwacaspr.420" target="_blank">
                        <img src="assets/img/tiktok.jpg" alt="TikTok">
                    </a>

                    <a href="https://www.instagram.com/____kosonggggggg?igsh=ZnMxZmM3NTY2enJw" target="_blank">
                        <img src="assets/img/ig.jpg" alt="Instagram">
                    </a>

                    <a href="https://www.facebook.com/share/1N2WqWoysJ/" target="_blank">
                        <img src="assets/img/fb.jpg" alt="Facebook">
                    </a>

                    <a href="https://wa.me/6282234813822" target="_blank">
                        <img src="assets/img/wa.jpg" alt="WhatsApp">
                    </a>

                </div>

            </div>

            <div class="footer-box">

                <h2>Hubungi Kami</h2>

                <p>📞 082234813822</p>
                <p>💬 082234813822</p>
                <p>📧 jrceplos420@gmail.com</p>

            </div>

            <div class="footer-box">

                <h2>Info Terbaru</h2>

                <div class="artikel">

                    <img src="assets/img/servis mesin motor.jpg">

                    <span>
                        Tips Merawat Mesin Motor Agar Tetap Prima
                    </span>

                </div>

                <div class="artikel">

                    <img src="assets/img/servis cvt.jpg">

                    <span>
                        Cara Mengetahui Kerusakan CVT Motor
                    </span>

                </div>

                <div class="artikel">

                    <img src="assets/img/ganti oli.webp">

                    <span>
                        Panduan Lengkap Ganti Oli Motor
                    </span>

                </div>

            </div>

        </div>

        <div class="copyright">
            © 2025 KENGGEMOTI Racing Team
        </div>

</body>

</html>