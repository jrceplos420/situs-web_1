<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Servis Kelistrikan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f5f5;
        }

        /* Navbar */

        .navbar {
            background: linear-gradient(135deg, #0077b6, #00b4d8);
            color: white;
            padding: 20px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        /* Hero */

        .hero {
            background: white;
            width: 90%;
            margin: 40px auto;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .15);
            text-align: center;
        }

        .hero img {
            width: 100%;
            max-width: 700px;
            height: 400px;
            object-fit: cover;
            border-radius: 20px;
            margin-bottom: 30px;
        }

        .hero h1 {
            color: #0077b6;
            margin-bottom: 20px;
            font-size: 40px;
        }

        .hero p {
            font-size: 20px;
            line-height: 35px;
            color: #555;
        }

        /* Informasi */

        .info {
            width: 90%;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .1);
        }

        .card h2 {
            color: #0077b6;
            margin-bottom: 20px;
        }

        .card ul {
            padding-left: 20px;
        }

        .card li {
            margin-bottom: 12px;
            line-height: 28px;
        }

        /* Harga */

        .harga {
            text-align: center;
        }

        .harga h1 {
            color: #ff5722;
            font-size: 45px;
        }

        /* Tombol */

        .btn {
            display: inline-block;
            margin-top: 30px;
            background: #0077b6;
            color: white;
            padding: 15px 35px;
            text-decoration: none;
            border-radius: 10px;
            transition: .3s;
        }

        .btn:hover {
            background: #023e8a;
        }

        .footer {
            background: #0077b6;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>

</head>

<body>

    <div class="navbar">

        <h2>⚡ Servis Kelistrikan</h2>

        <a href="customer.php">← Kembali</a>

    </div>

    <div class="hero">

        <img src="assets/img/kelistrikan.jpg">

        <h1>Servis Kelistrikan Motor</h1>

        <p>

            Kami melayani seluruh kerusakan sistem kelistrikan motor seperti
            aki, lampu, klakson, starter elektrik, spul, kiprok,
            sekering, pengisian aki, hingga pemeriksaan kabel motor.

            Pengerjaan dilakukan menggunakan alat modern sehingga
            kerusakan dapat diketahui dengan cepat dan tepat.

        </p>

        <a href="booking.php" class="btn">
            Booking Sekarang
        </a>

    </div>

    <div class="info">

        <div class="card">

            <h2>🔧 Layanan Yang Dikerjakan</h2>

            <ul>

                <li>Pengecekan Aki</li>

                <li>Ganti Aki Baru</li>

                <li>Perbaikan Starter</li>

                <li>Perbaikan Lampu</li>

                <li>Perbaikan Klakson</li>

                <li>Perbaikan Spul</li>

                <li>Perbaikan Kiprok</li>

                <li>Pengecekan Kabel Motor</li>

                <li>Pengecekan Sekering</li>

                <li>Pengisian Sistem Kelistrikan</li>

            </ul>

        </div>

        <div class="card harga">

            <h2>💰 Estimasi Harga</h2>

            <h1>Rp 50.000</h1>

            <p>

                Harga dapat berubah sesuai
                jenis kerusakan dan sparepart
                yang digunakan.

            </p>

        </div>

    </div>

    <div class="footer">

        © 2026 KENGGEMOTI Racing Team

    </div>

</body>

</html>