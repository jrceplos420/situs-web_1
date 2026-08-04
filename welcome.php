<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KENGGEMOTI Racing Team</title>

    <style>
        body {

            margin: 0;

            font-family: Arial, sans-serif;

            background: #f5f5f5;

        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 60px;
            background: linear-gradient(90deg, #00b4d8, #0077b6);
            z-index: 1000;
        }

        .logo {
            font-size: 36px;
            font-weight: bold;
            color: white;
        }

        .navbar ul {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 25px;
            margin: 0;
            padding: 0;
            margin-right: 50px;
        }

        .navbar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: .3s;
        }

        .navbar ul li a:hover {
            color: #ffcc00;
        }

        .admin-btn {
            background: #ff9800;
            color: white !important;
            padding: 10px 22px;
            border-radius: 30px;
        }

        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            padding-top: 120px;

            background: linear-gradient(135deg, #00b4d8, #0077b6);

            color: white;
        }

        .hero-content {

            max-width: 900px;

            animation: muncul 1.2s ease;

        }

        .hero-content h1 {

            font-size: 70px;
            font-weight: bold;
            color: #FFD43B;
            margin-bottom: 15px;

        }

        .hero-content h2 {

            font-size: 30px;
            margin-bottom: 20px;
            font-weight: 400;

        }

        .hero-content p {

            font-size: 22px;
            line-height: 38px;
            max-width: 850px;
            margin: auto;
            margin-bottom: 40px;

        }

        .hero-button {

            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;

        }

        .btn:hover {

            background: red;

        }

        .btn {

            display: inline-block;
            padding: 14px 35px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            transition: .3s;

        }

        .btn-primary {
            background: #0d6efd;
        }

        .btn-primary:hover {
            background: #0b5ed7;
        }

        .btn-success {
            background: #198754;
        }

        .btn-success:hover {
            background: #157347;
        }


        .btn:hover {

            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, .3);

        }

        @keyframes muncul {

            from {

                opacity: 0;

                transform: translateY(60px);

            }

            to {

                opacity: 1;

                transform: translateY(0);

            }

        }

        .layanan {

            padding: 80px 8%;

            background: #f8f9fa;

            text-align: center;

        }

        .layanan h2 {

            font-size: 40px;

            color: #0077b6;

            margin-bottom: 10px;

        }

        .layanan p {

            color: #666;

            margin-bottom: 40px;

        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        @media(max-width:1200px) {
            .card-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width:768px) {
            .card-container {
                grid-template-columns: 1fr;
            }
        }

        .card {

            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .15);
            transition: .4s;
        }

        .card:hover {

            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .25);

        }

        .card img {

            width: 100%;
            height: 240px;
            object-fit: cover;

        }

        .card h3 {

            margin: 20px 0 10px;
            color: #0077b6;
            font-size: 28px;

        }

        .card p {

            padding: 0 20px;
            line-height: 30px;
            color: #555;
            min-height: 90px;

        }

        .btn-card {

            display: inline-block;
            margin: 25px;
            padding: 13px 30px;
            background: #0077b6;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            transition: .3s;

        }

        .btn-card:hover {

            background: #023e8a;
            transform: scale(1.05);

        }

        @media(max-width:768px) {

            .navbar {

                flex-direction: column;
                padding: 15px;

            }

            .navbar ul {

                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;

            }

            .hero-content h1 {

                font-size: 38px;

            }

            .hero-content h3 {

                font-size: 24px;

            }

            .card-container {

                grid-template-columns: 1fr;

            }

        }

        /* ================= MENGAPA MEMILIH KAMI ================= */

        .keunggulan {

            padding: 80px 8%;

            background: white;

            text-align: center;

        }

        .keunggulan h2 {

            font-size: 40px;

            color: #0077b6;

            margin-bottom: 15px;

        }

        .keunggulan p {

            color: #666;

            margin-bottom: 45px;

        }

        .keunggulan-box {

            display: grid;

            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));

            gap: 30px;

        }

        .keunggulan-card {

            background: #f8fbff;

            padding: 35px 25px;

            border-radius: 20px;

            box-shadow: 0 10px 25px rgba(0, 0, 0, .12);

            transition: .4s;

        }

        .keunggulan-card:hover {

            transform: translateY(-12px);

            background: #0077b6;

            color: white;

        }

        .keunggulan-card:hover h3,
        .keunggulan-card:hover p {

            color: white;

        }

        .icon {

            font-size: 60px;

            margin-bottom: 20px;

        }

        .keunggulan-card h3 {

            color: #0077b6;

            margin-bottom: 15px;

        }

        .keunggulan-card p {

            line-height: 28px;

            color: #666;

        }

        /* ================= STATISTIK ================= */

        .statistik {

            padding: 80px 8%;

            background: linear-gradient(135deg, #0077b6, #00b4d8);

            color: white;

            text-align: center;

        }

        .statistik h2 {

            font-size: 42px;

            margin-bottom: 15px;

        }

        .statistik p {

            margin-bottom: 45px;

            font-size: 18px;

        }

        .statistik-box {

            display: grid;

            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));

            gap: 30px;

        }

        .stat {

            background: rgba(255, 255, 255, .15);

            padding: 35px;

            border-radius: 20px;

            transition: .4s;

        }

        .stat:hover {

            transform: translateY(-10px);

            background: white;

            color: #0077b6;

        }

        .stat h1 {

            font-size: 55px;

            margin-bottom: 10px;

        }

        .stat h3 {

            font-size: 22px;

        }

        /* ================= TESTIMONI ================= */

        .testimoni {

            padding: 80px 8%;

            background: #f8f9fa;

            text-align: center;

        }

        .testimoni h2 {

            font-size: 40px;

            color: #0077b6;

            margin-bottom: 15px;

        }

        .testimoni p {

            color: #666;

            margin-bottom: 40px;

        }

        .testimoni-container {

            display: grid;

            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));

            gap: 30px;

        }

        .testimoni-card {

            background: white;

            padding: 30px;

            border-radius: 20px;

            box-shadow: 0 10px 25px rgba(0, 0, 0, .12);

            transition: .4s;

        }

        .testimoni-card:hover {

            transform: translateY(-10px);

        }

        .testimoni-card img {

            width: 90px;

            height: 90px;

            border-radius: 50%;

            object-fit: cover;

            margin-bottom: 15px;

            border: 4px solid #00b4d8;

        }

        .bintang {

            color: orange;

            font-size: 22px;

            margin: 15px 0;

        }

        .testimoni-card h3 {

            color: #0077b6;

            margin-bottom: 10px;

        }

        .testimoni-card p {

            line-height: 28px;

        }

        /* ================= GALERI ================= */

        .galeri {

            padding: 80px 8%;

            background: white;

            text-align: center;

        }

        .galeri h2 {

            font-size: 40px;

            color: #0077b6;

            margin-bottom: 15px;

        }

        .galeri p {

            color: #666;

            margin-bottom: 40px;

        }

        .galeri-container {

            display: grid;

            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));

            gap: 20px;

        }

        .galeri-item {

            overflow: hidden;

            border-radius: 20px;

            box-shadow: 0 8px 20px rgba(0, 0, 0, .15);

        }

        .galeri-item img {

            width: 100%;

            height: 260px;

            object-fit: cover;

            transition: .5s;

        }

        .galeri-item:hover img {

            transform: scale(1.1);

        }

        /* ================= TESTIMONI ================= */

        .testimoni {
            padding: 80px 8%;
            background: #ffffff;
            text-align: center;
        }

        .testimoni h2 {
            font-size: 40px;
            color: #0077b6;
            margin-bottom: 10px;
        }

        .testimoni p {
            color: #666;
            margin-bottom: 40px;
        }

        .testimoni-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testi-card {
            background: #f8f9fa;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .1);
            transition: .3s;
        }

        .testi-card:hover {
            transform: translateY(-10px);
        }

        .testi-card img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 4px solid #00b4d8;
        }

        .bintang {
            color: #ffc107;
            font-size: 22px;
            margin: 10px 0;
        }

        .testi-card h3 {
            color: #0077b6;
            margin-top: 10px;
        }

        .testi-card span {
            color: #777;
            font-size: 14px;
        }

        /* ================= FAQ ================= */

        .faq {
            padding: 80px 8%;
            background: #f8f9fa;
        }

        .faq h2 {
            text-align: center;
            font-size: 40px;
            color: #0077b6;
            margin-bottom: 15px;
        }

        .faq p {
            text-align: center;
            color: #666;
            margin-bottom: 40px;
        }

        .faq-item {
            background: white;
            margin: 15px auto;
            max-width: 900px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
            overflow: hidden;
        }

        .faq-question {
            width: 100%;
            padding: 20px;
            border: none;
            background: #0077b6;
            color: white;
            font-size: 18px;
            text-align: left;
            cursor: pointer;
        }

        .faq-answer {
            display: none;
            padding: 20px;
            line-height: 30px;
            color: #555;
            background: white;
        }
    </style>

</head>

<body>

    <nav class="navbar">

        <div class="logo">

            🏍️ KENGGEMOTI Racing Team

        </div>

        <ul>

            <li><a href="#home">Home</a></li>

            <li><a href="#layanan">Layanan</a></li>

            <li><a href="blog.php">Blog</a></li>

            <li><a href="#lokasi">Lokasi</a></li>

            <li><a href="login_customer.php">Login Customer</a></li>

            <li>

                <a class="admin-btn" href="index.php">

                    Admin

                </a>

            </li>

        </ul>

    </nav>

    <section class="hero" id="home">

        <div class="hero-content">

            <h1>🏍️ KENGGEMOTI Racing Team</h1>

            <h2>Bengkel Motor Terpercaya di Kota Mataram</h2>

            <p>
                Solusi terbaik untuk servis, tune up, ganti oli,
                bore up, servis CVT, tambal ban,
                hingga modifikasi motor racing dengan mekanik profesional.
            </p>

            <div class="hero-button">

                <a href="login_customer.php" class="btn btn-primary">
                    🔧 Booking Servis
                </a>

                <a href="#layanan" class="btn btn-success">
                    📋 Lihat Layanan
                </a>

            </div>

        </div>

    </section>

    <section class="layanan" id="layanan">

        <h2>Layanan Kami</h2>

        <p>
            Kami menyediakan berbagai layanan terbaik
            untuk menjaga performa motor Anda.
        </p>

        <div class="card-container">

            <div class="card">

                <img src="assets/img/servis mesin motor.jpg">

                <h3>Servis Mesin</h3>

                <p>
                    Perawatan dan perbaikan mesin motor agar tetap prima.
                </p>

                <a href="servis_motor.php" class="btn-card">
                    Lihat Detail
                </a>

            </div>

            <div class="card">

                <img src="assets/img/ganti oli.webp">

                <h3>Ganti Oli</h3>

                <p>
                    Menggunakan oli berkualitas untuk performa terbaik.
                </p>

                <a href="ganti_oli.php" class="btn-card">
                    Lihat Detail
                </a>

            </div>

            <div class="card">

                <img src="assets/img/servis cvt.jpg">

                <h3>Servis CVT</h3>

                <p>
                    Membersihkan dan merawat CVT agar tetap nyaman.
                </p>

                <a href="servis_cvt.php" class="btn-card">
                    Lihat Detail
                </a>

            </div>

            <div class="card">

                <img src="assets/img/tambal ban.webp">

                <h3>Tambal Ban</h3>

                <p>
                    Melayani tambal ban tubeless dan ban biasa dengan alat modern.
                </p>

                <a href="tambal_ban.php" class="btn-card">
                    Lihat Detail
                </a>

            </div>

            <div class="card">

                <img src="assets/img/boreup.webp" alt="Naik CC Motor">

                <h3>Naik CC Motor</h3>

                <p>
                    Upgrade kapasitas mesin untuk meningkatkan tenaga,
                    akselerasi, dan performa motor sesuai kebutuhan.
                </p>

                <a href="naik_cc.php" class="btn-card">
                    Lihat Detail
                </a>

            </div>

            <div class="card">

                <img src="assets/img/kampas_rem.jpg" alt="Kampas Rem">

                <h3>Ganti Kampas Rem</h3>

                <p>
                    Penggantian kampas rem depan maupun belakang
                    agar pengereman tetap pakem dan aman digunakan.
                </p>

                <a href="kampas_rem.php" class="btn-card">
                    Lihat Detail
                </a>

            </div>

            <div class="card">

                <img src="assets/img/ganti_aki.jpg" alt="Ganti Aki">

                <h3>Ganti Aki</h3>

                <p>
                    Penggantian aki motor baru disertai pengecekan sistem
                    kelistrikan agar motor mudah dihidupkan.
                </p>

                <a href="ganti_aki.php" class="btn-card">
                    Lihat Detail
                </a>

            </div>

            <div class="card">

                <img src="assets/img/injeksi.jpg" alt="Servis Injeksi">

                <h3>Servis Injeksi</h3>

                <p>
                    Membersihkan throttle body dan injector menggunakan
                    alat scanner agar pembakaran lebih sempurna.
                </p>

                <a href="servis_injeksi.php" class="btn-card">
                    Lihat Detail
                </a>

            </div>

        </div>

    </section>

    <section class="keunggulan">

        <h2>Mengapa Memilih Kami?</h2>

        <p>
            Kami selalu mengutamakan kualitas pelayanan dan kepuasan pelanggan.
        </p>

        <div class="keunggulan-box">

            <div class="keunggulan-card">

                <div class="icon">👨‍🔧</div>

                <h3>Mekanik Profesional</h3>

                <p>
                    Seluruh mekanik kami berpengalaman menangani berbagai jenis motor matic, bebek maupun sport.
                </p>

            </div>

            <div class="keunggulan-card">

                <div class="icon">⚡</div>

                <h3>Pengerjaan Cepat</h3>

                <p>
                    Didukung peralatan modern sehingga proses servis menjadi lebih cepat dan tepat.
                </p>

            </div>

            <div class="keunggulan-card">

                <div class="icon">💰</div>

                <h3>Harga Terjangkau</h3>

                <p>
                    Harga transparan tanpa biaya tersembunyi serta sesuai kualitas pekerjaan.
                </p>

            </div>

            <div class="keunggulan-card">

                <div class="icon">🛡️</div>

                <h3>Garansi Servis</h3>

                <p>
                    Setiap pekerjaan tertentu mendapatkan garansi sehingga pelanggan merasa lebih tenang.
                </p>

            </div>

        </div>

    </section>

    <section class="statistik">

        <h2>Statistik Bengkel Kami</h2>

        <p>
            Kepercayaan pelanggan adalah semangat kami untuk terus berkembang.
        </p>

        <div class="statistik-box">

            <div class="stat">

                <h1 class="counter" data-target="500">0</h1>

                <h3>Motor Diservis</h3>

            </div>

            <div class="stat">

                <h1 class="counter" data-target="300">0</h1>

                <h3>Pelanggan Puas</h3>

            </div>

            <div class="stat">

                <h1 class="counter" data-target="10">0</h1>

                <h3>Tahun Pengalaman</h3>

            </div>

            <div class="stat">

                <h1 class="counter" data-target="4">0</h1>

                <h3>Mekanik Profesional</h3>

            </div>

        </div>

    </section>

    <script>
        const counters = document.querySelectorAll(".counter");

        counters.forEach(counter => {

            const update = () => {

                const target = +counter.getAttribute("data-target");

                const count = +counter.innerText;

                const speed = 40;

                const increment = target / speed;

                if (count < target) {

                    counter.innerText = Math.ceil(count + increment);

                    setTimeout(update, 40);

                } else {

                    counter.innerText = target + "+";

                }

            };

            update();

        });
    </script>

    <section class="testimoni">

        <h2>Testimoni Pelanggan</h2>

        <p>
            Kepuasan pelanggan adalah prioritas utama kami.
        </p>

        <div class="testimoni-container">

            <div class="testimoni-card">

                <img src="gambar/pelanggan2.jpg">

                <h3>Liwa Casper</h3>

                <div class="bintang">
                    ⭐⭐⭐⭐⭐
                </div>

                <p>

                    Servisnya cepat, mekaniknya ramah, dan harga sangat terjangkau.
                    Motor saya kembali seperti baru.

                </p>

            </div>

            <div class="testimoni-card">

                <img src="gambar/pelanggan1.jpg">

                <h3>Putri Lestari A</h3>

                <div class="bintang">
                    ⭐⭐⭐⭐⭐
                </div>

                <p>

                    Saya booking lewat website, datang langsung dikerjakan.
                    Sangat praktis dan tidak perlu antre lama.

                </p>

            </div>

            <div class="testimoni-card">

                <img src="gambar/pelanggan3.jpg">

                <h3>Zekyyy</h3>

                <div class="bintang">
                    ⭐⭐⭐⭐⭐
                </div>

                <p>

                    Pelayanannya luar biasa.
                    Hasil servis rapi dan motor menjadi lebih nyaman dipakai.

                </p>

            </div>

        </div>

    </section>

    <section class="galeri">

        <h2>Galeri Bengkel</h2>

        <p>
            Beberapa dokumentasi kegiatan dan hasil pekerjaan mekanik kami.
        </p>

        <div class="galeri-container">

            <div class="galeri-item">
                <img src="assets/img/servis cvt.jpg">
            </div>

            <div class="galeri-item">
                <img src="assets/img/injeksi.jpg">
            </div>

            <div class="galeri-item">
                <img src="assets/img/ganti_aki.jpg">
            </div>

            <div class="galeri-item">
                <img src="assets/img/ganti oli.webp">
            </div>


        </div>

    </section>

    <section class="faq">

        <h2>❓ Pertanyaan Umum</h2>

        <p>
            Beberapa pertanyaan yang sering diajukan pelanggan.
        </p>

        <div class="faq-item">

            <button class="faq-question">
                Apakah harus booking terlebih dahulu?
            </button>

            <div class="faq-answer">

                Booking tidak wajib, tetapi sangat disarankan agar tidak perlu antre.

            </div>

        </div>

        <div class="faq-item">

            <button class="faq-question">
                Berapa lama servis mesin?
            </button>

            <div class="faq-answer">

                Sekitar 1–2 jam tergantung kondisi motor.

            </div>

        </div>

        <div class="faq-item">

            <button class="faq-question">
                Apakah ada garansi servis?
            </button>

            <div class="faq-answer">

                Ya, beberapa jenis servis mendapatkan garansi sesuai ketentuan bengkel.

            </div>

        </div>

        <div class="faq-item">

            <button class="faq-question">
                Apakah menerima motor semua merek?
            </button>

            <div class="faq-answer">

                Ya. Kami melayani Honda, Yamaha, Suzuki, Kawasaki, dan merek lainnya.

            </div>

        </div>

    </section>

    <script>
        const faq = document.querySelectorAll(".faq-question");

        faq.forEach(btn => {

            btn.addEventListener("click", () => {

                const jawab = btn.nextElementSibling;

                if (jawab.style.display === "block") {

                    jawab.style.display = "none";

                } else {

                    jawab.style.display = "block";

                }

            });

        });
    </script>

    <section id="lokasi" class="galeri">

        <h2>📍 Lokasi Bengkel</h2>

        <p>

            Silakan datang langsung ke bengkel kami.

        </p>

        <iframe

            src="https://www.google.com/maps?q=Mataram&output=embed"

            width="100%"

            height="450"

            style="border:0;border-radius:20px;"

            allowfullscreen

            loading="lazy">

        </iframe>

    </section>

    <footer style="background:#023e8a;color:white;padding:50px 8%;">

        <div style="display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:40px;">

            <div>

                <h2>🏍️ KENGGEMOTI Racing Team</h2>

                <p style="line-height:30px;margin-top:15px;">

                    Bengkel motor terpercaya di Kota Mataram yang
                    melayani servis, tune up, sparepart,
                    hingga modifikasi racing.

                </p>

            </div>

            <div>

                <h3>📍 Alamat</h3>

                <p>

                    Jl. Raya Kenggemoti<br>
                    Kota Mataram<br>
                    NTB

                </p>

            </div>

            <div>

                <h3>🕒 Jam Operasional</h3>

                <p>

                    Senin - Sabtu<br>

                    08.00 - 17.00 WITA

                </p>

            </div>

            <div>

                <h3>📞 Hubungi Kami</h3>

                <p>

                    WhatsApp : 0822-3481-3822

                </p>

                <p>

                    Email :
                    jrceplos420@gmail.com

                </p>

                <p style="margin-top:15px;font-size:26px;">

                    📘 📷 ▶️ 💬

                </p>

            </div>

        </div>

        <hr style="margin:35px 0;border-color:rgba(255,255,255,.2);">

        <center>

            © 2026 KENGGEMOTI Racing Team | All Rights Reserved.

        </center>

    </footer>


</body>

</html>