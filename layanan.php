<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Semua Layanan | KENGGEMOTI Racing Team</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background: #f4f7fb;
        }

        /* ================= NAVBAR ================= */

        .navbar {

            background: linear-gradient(135deg, #0077b6, #00b4d8);

            padding: 18px 50px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            position: sticky;

            top: 0;

            z-index: 999;

            box-shadow: 0 3px 10px rgba(0, 0, 0, .2);

        }

        .logo {

            font-size: 28px;

            font-weight: bold;

            color: white;

        }

        .menu {

            display: flex;

            gap: 25px;

        }

        .menu a {

            text-decoration: none;

            color: white;

            font-weight: bold;

            transition: .3s;

        }

        .menu a:hover {

            color: yellow;

        }

        .kembali {

            background: red;

            padding: 10px 18px;

            border-radius: 10px;

            text-decoration: none;

            color: white;

            font-weight: bold;

            transition: .3s;

        }

        .kembali:hover {

            background: #b30000;

        }

        /* ================= HERO ================= */

        .hero {

            width: 95%;

            margin: 30px auto;

            background: white;

            padding: 40px;

            border-radius: 20px;

            text-align: center;

            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);

        }

        .hero h1 {

            font-size: 40px;

            color: #0077b6;

            margin-bottom: 10px;

        }

        .hero p {

            font-size: 18px;

            color: #666;

        }

        /* ================= JUDUL ================= */

        .judul {

            text-align: center;

            margin: 40px 0;

        }

        .judul h2 {

            font-size: 35px;

            color: #0077b6;

            margin-bottom: 10px;

        }

        .judul p {

            color: #666;

            font-size: 18px;

        }

        /* ================= CONTAINER ================= */

        .container {

            width: 95%;

            margin: auto;

        }

        /* ================= GRID ================= */

        .cards {

            display: grid;

            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));

            gap: 25px;

            margin-bottom: 40px;

        }

        /* ================= CARD ================= */

        .card {

            position: relative;

            background: white;

            border-radius: 20px;

            overflow: hidden;

            box-shadow: 0 8px 20px rgba(0, 0, 0, .15);

            transition: .3s;

            display: flex;

            flex-direction: column;

        }

        .card:hover {

            transform: translateY(-10px);

        }

        .card img {

            width: 100%;

            height: 220px;

            object-fit: cover;

        }

        .card h2 {

            text-align: center;

            margin-top: 15px;

            color: #0077b6;

            font-size: 28px;

        }

        .card p {

            padding: 15px 20px;

            text-align: center;

            color: #555;

            line-height: 28px;

            flex: 1;

        }

        /* ================= BUTTON ================= */

        .btn {

            display: block;

            width: 160px;

            margin: 20px auto;

            padding: 13px;

            text-align: center;

            background: #0077b6;

            color: white;

            text-decoration: none;

            border-radius: 10px;

            font-weight: bold;

            transition: .3s;

        }

        .btn:hover {

            background: #005b8f;

        }

        /* ================= FOOTER ================= */

        .footer {

            margin-top: 50px;

            background: #0077b6;

            color: white;

            text-align: center;

            padding: 25px;

            font-size: 18px;

        }

        .info {

            display: flex;

            justify-content: space-around;

            padding: 12px;

            background: #eef8ff;

            font-weight: bold;

            color: #0077b6;

            font-size: 15px;

        }

        .badge {

            position: absolute;

            margin: 15px;

            background: red;

            color: white;

            padding: 8px 14px;

            border-radius: 30px;

            font-size: 13px;

            font-weight: bold;

        }

        .booking {

            display: block;

            width: 170px;

            margin: 0 auto 20px;

            padding: 12px;

            background: #28a745;

            color: white;

            text-decoration: none;

            text-align: center;

            border-radius: 10px;

            font-weight: bold;

            transition: .3s;

        }

        .booking:hover {

            background: #1f8a37;

        }

        .promo {

            width: 95%;

            margin: 30px auto;

            background: linear-gradient(90deg, #ff9800, #ff5722);

            padding: 30px;

            border-radius: 20px;

            text-align: center;

            color: white;

            font-size: 24px;

            font-weight: bold;

            box-shadow: 0 5px 15px rgba(0, 0, 0, .2);

        }
    </style>

</head>

<body>

    <div class="navbar">

        <div class="logo">
            🚗 KENGGEMOTI Racing Team
        </div>

        <div class="menu">

            <a href="customer.php">Dashboard</a>

            <a href="#">Semua Layanan</a>

        </div>

        <a href="customer.php" class="kembali">
            ⬅ Kembali
        </a>

    </div>

    <div class="hero">

        <h1>🔧 Semua Layanan Bengkel</h1>

        <p>

            Kami menyediakan berbagai layanan servis motor dengan mekanik profesional,
            peralatan modern, serta harga yang terjangkau untuk semua jenis kendaraan roda dua.

        </p>

    </div>

    <div class="promo">

        🎉 PROMO BULAN INI

        <br><br>

        Diskon 20% untuk Servis Mesin

        <br>

        Gratis Cek Mesin untuk Semua Pelanggan

    </div>

    <div class="judul">

        <h2>Semua Layanan Kami</h2>

        <p>

            Pilih layanan sesuai kebutuhan kendaraan Anda.

        </p>

    </div>

    <div class="container">

        <div class="cards">

            <!-- CARD 1 SAMPAI CARD 10 AKAN SAYA KIRIM PADA BAGIAN 2 -->
            <div class="card">

                <img src="servis mesin motor.jpg" alt="Servis Mesin">

                <h2>🛠 Servis Mesin Motor</h2>

                <p>
                    Servis lengkap untuk mengembalikan performa mesin motor agar tetap bertenaga,
                    irit bahan bakar, dan nyaman digunakan.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp100.000</span>
                    <span>⏱ 1 jam Menit</span>
                </div>

                <a href="servis_motor.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

            <div class="card">

                <div class="badge">
                    🔥 Paling Laris
                </div>

                <img src="ganti oli.webp" alt="Ganti Oli">

                <h2>🛢 Ganti Oli</h2>

                <p>
                    Penggantian oli mesin dan oli gardan menggunakan oli berkualitas tinggi agar
                    mesin tetap awet dan performanya maksimal.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp75.000</span>
                    <span>⏱ 20 Menit</span>
                </div>

                <a href="ganti_oli.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

            <div class="card">

                <img src="servis cvt.jpg" alt="Servis CVT">

                <h2>⚙ Servis CVT</h2>

                <p>
                    Membersihkan roller, kampas ganda, dan rumah CVT supaya tarikan motor
                    lebih halus dan responsif.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp50.000</span>
                    <span>⏱ 40 Menit</span>
                </div>

                <a href="servis_cvt.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

            <div class="card">

                <img src="tambal ban.webp" alt="Tambal Ban">

                <h2>🔧 Tambal Ban</h2>

                <p>
                    Tambal ban tubeless maupun ban biasa dengan alat modern sehingga lebih
                    kuat, aman, dan tahan lama.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp20.000</span>
                    <span>⏱ 15 Menit</span>
                </div>

                <a href="tambal_ban.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

            <div class="card">

                <img src="boreup.webp" alt="Naik CC">

                <h2>🏍 Naik CC Motor</h2>

                <p>
                    Upgrade kapasitas mesin sesuai kebutuhan untuk meningkatkan tenaga dan
                    performa motor Anda.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp500.000</span>
                    <span>⏱ 2 jam</span>
                </div>

                <a href="naik_cc.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

            <div class="card">

                <img src="kampas_rem.jpg" alt="Kampas Rem">

                <h2>🛑 Ganti Kampas Rem</h2>

                <p>
                    Penggantian kampas rem depan maupun belakang agar pengereman tetap pakem
                    dan aman digunakan.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp50.000</span>
                    <span>⏱ 30 Menit</span>
                </div>

                <a href="kampas_rem.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

            <div class="card">

                <img src="ganti_aki.jpg" alt="Ganti Aki">

                <h2>🔋 Ganti Aki</h2>

                <p>
                    Penggantian aki motor baru beserta pengecekan sistem pengisian agar motor
                    mudah dihidupkan.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp200.000</span>
                    <span>⏱ 10 Menit</span>
                </div>

                <a href="ganti_aki.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

            <div class="card">

                <img src="rantai.jpg" alt="Servis Rantai">

                <h2>⛓ Servis Rantai</h2>

                <p>
                    Membersihkan, melumasi, serta menyetel kekencangan rantai agar lebih awet
                    dan tidak berisik.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp35.000</span>
                    <span>⏱ 15 Menit</span>
                </div>

                <a href="servis_rantai.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

            <div class="card">

                <img src="injeksi.jpg" alt="Servis Injeksi">

                <h2>💻 Servis Injeksi</h2>

                <p>
                    Membersihkan throttle body dan injector menggunakan alat scanner sehingga
                    pembakaran lebih sempurna.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp150.000</span>
                    <span>⏱ 1 jam</span>
                </div>

                <a href="servis_injeksi.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

            <div class="card">

                <img src="cuci_motor.webp" alt="Cuci Motor">

                <h2>🧼 Cuci Motor Premium</h2>

                <p>
                    Cuci motor premium hingga bagian mesin, kolong, velg, dan bodi sehingga
                    motor tampak bersih seperti baru.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp50.000</span>
                    <span>⏱ 40 Menit</span>
                </div>

                <a href="cuci_motor.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

            <div class="card">

                <img src="cuci_motor.webp" alt="Cuci Motor">

                <h2>🧼 Cuci Motor Premium</h2>

                <p>
                    Cuci motor premium hingga bagian mesin, kolong, velg, dan bodi sehingga
                    motor tampak bersih seperti baru.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp75.000</span>
                    <span>⏱ 45 Menit</span>
                </div>

                <a href="cuci_motor.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

            <div class="card">

                <img src="cuci_motor.webp" alt="Cuci Motor">

                <h2>🧼 Cuci Motor Premium</h2>

                <p>
                    Cuci motor premium hingga bagian mesin, kolong, velg, dan bodi sehingga
                    motor tampak bersih seperti baru.
                </p>

                <div class="info">
                    <span>💰 Mulai Rp75.000</span>
                    <span>⏱ 45 Menit</span>
                </div>

                <a href="cuci_motor.php" class="btn">Lihat</a>
                <a href="booking.php" class="booking">
                    📅 Booking Sekarang
                </a>

            </div>

        </div>

    </div>

    <div class="footer">

        <h2>🚗 KENGGEMOTI Racing Team</h2>

        <br>

        <p>
            Jl. Raya Kenggemoti No.123
        </p>

        <p>
            📞 0822-3481-3822
        </p>

        <p>
            📧 jrceplos420@gmail.com
        </p>

        <br>

        <hr>

        <br>

        © 2026 KENGGEMOTI Racing Team

    </div>

</body>

</html>