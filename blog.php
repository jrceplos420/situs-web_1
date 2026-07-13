<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog & Berita | KENGGEMOTI Racing Team</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f4f6f9;
        }

        /* NAVBAR */

        .navbar {
            background: linear-gradient(135deg, #0077b6, #00b4d8);
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            gap: 25px;
        }

        .menu a {
            color: white;
            text-decoration: none;
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
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* HERO */

        .hero {

            width: 95%;

            margin: 30px auto;

            background: white;

            padding: 40px;

            border-radius: 20px;

            box-shadow: 0 5px 20px rgba(0, 0, 0, .1);

            text-align: center;

        }

        .hero h1 {

            font-size: 45px;

            color: #0077b6;

            margin-bottom: 15px;

        }

        .hero p {

            font-size: 18px;

            color: #555;

        }

        /* KATEGORI */

        .kategori {

            width: 95%;

            margin: auto;

            display: flex;

            gap: 10px;

            margin-bottom: 25px;

            flex-wrap: wrap;

        }

        .kategori span {

            background: #ececec;

            padding: 10px 18px;

            border-radius: 20px;

            cursor: pointer;

            font-weight: bold;

            transition: .3s;

        }

        .kategori span:hover {

            background: #ffc107;

        }

        /* GRID */

        .wrapper {

            width: 95%;

            margin: auto;

            display: grid;

            grid-template-columns: 3fr 1fr;

            gap: 30px;

            margin-bottom: 50px;

        }

        .konten {

            display: grid;

            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));

            gap: 25px;

        }

        /* CARD */

        .card {

            background: white;

            border-radius: 20px;

            overflow: hidden;

            box-shadow: 0 5px 15px rgba(0, 0, 0, .08);

            transition: .3s;

            display: flex;

            flex-direction: column;

        }

        .card:hover {

            transform: translateY(-8px);

        }

        .card img {

            width: 100%;

            height: 220px;

            object-fit: cover;

        }

        .card-body {

            padding: 20px;

        }

        .tag {

            display: inline-block;

            background: #ffc107;

            padding: 5px 12px;

            border-radius: 15px;

            font-size: 13px;

            margin-bottom: 10px;

        }

        .tanggal {

            color: gray;

            font-size: 13px;

            margin-left: 8px;

        }

        .card h3 {

            margin: 15px 0;

            color: #222;

        }

        .card p {

            color: #666;

            line-height: 24px;

            margin-bottom: 20px;

        }

        .btn {

            display: inline-block;

            background: #0077b6;

            color: white;

            padding: 10px 20px;

            border-radius: 10px;

            text-decoration: none;

        }

        .btn:hover {

            background: #005b8d;

        }

        /* SIDEBAR */

        .sidebar {

            display: flex;

            flex-direction: column;

            gap: 25px;

        }

        .box {

            background: white;

            padding: 20px;

            border-radius: 20px;

            box-shadow: 0 5px 15px rgba(0, 0, 0, .08);

        }

        .box h2 {

            margin-bottom: 20px;

            color: #0077b6;

        }

        .box ul {

            list-style: none;

        }

        .box li {

            padding: 12px 0;

            border-bottom: 1px solid #ddd;

        }

        .box li:last-child {

            border: none;

        }

        .box a {

            text-decoration: none;

            color: #333;

        }

        .box a:hover {

            color: #0077b6;

        }

        .wa {

            background: #111;

            color: white;

        }

        .wa p {

            margin: 15px 0;

            line-height: 25px;

        }

        .wa a {

            display: inline-block;

            padding: 12px 20px;

            background: #ffc107;

            color: black;

            text-decoration: none;

            border-radius: 10px;

            font-weight: bold;

        }

        /* FOOTER */

        footer {

            margin-top: 50px;

            background: #0077b6;

            color: white;

            text-align: center;

            padding: 25px;

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

            <a href="blog.php">Blog</a>

            <a href="booking.php">Booking</a>

        </div>

        <a href="customer.php" class="kembali">

            ⬅ Kembali

        </a>

    </div>

    <div class="hero">

        <h1>📰 Blog & Berita Bengkel</h1>

        <p>

            Tips servis, edukasi motor, promo, dan informasi terbaru
            seputar dunia otomotif.

        </p>

    </div>

    <div class="kategori">

        <span>Semua</span>

        <span>Tips</span>

        <span>Servis</span>

        <span>Promo</span>

        <span>Modifikasi</span>

        <span>Edukasi</span>

    </div>

    <div class="wrapper">

        <div class="konten">

            <!-- ARTIKEL 1 -->
            <div class="card">

                <img src="gambar_blog/ganti_olii.webp">

                <div class="card-body">

                    <span class="tag">Tips</span>
                    <span class="tanggal">14 Juli 2026</span>

                    <h3>Kapan Waktu yang Tepat Ganti Oli Motor?</h3>

                    <p>
                        Jangan menunggu mesin rusak. Ketahui waktu yang tepat
                        mengganti oli agar performa motor tetap maksimal.
                    </p>

                    <a href="artikel/artikel1.php" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

            <!-- ARTIKEL 2 -->
            <div class="card">

                <img src="gambar_blog/servis_cvtt.webp">

                <div class="card-body">

                    <span class="tag">Servis</span>
                    <span class="tanggal">13 Juli 2026</span>

                    <h3>Tips Merawat CVT Motor Matic</h3>

                    <p>
                        CVT yang bersih membuat tarikan motor lebih halus,
                        irit BBM, dan nyaman digunakan.
                    </p>

                    <a href="artikel/artikel2.php" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

            <!-- ARTIKEL 3 -->
            <div class="card">

                <img src="gambar_blog/kampas_remm.webp">

                <div class="card-body">

                    <span class="tag">Tips</span>
                    <span class="tanggal">12 Juli 2026</span>

                    <h3>Tanda Kampas Rem Harus Diganti</h3>

                    <p>
                        Jangan abaikan suara berdecit pada rem.
                        Bisa jadi kampas rem sudah habis.
                    </p>

                    <a href="artikel/artikel3.php" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

            <!-- ARTIKEL 4 -->
            <div class="card">

                <img src="gambar_blog/ganti_akii.webp">

                <div class="card-body">

                    <span class="tag">Edukasi</span>
                    <span class="tanggal">11 Juli 2026</span>

                    <h3>Cara Merawat Aki Motor Agar Awet</h3>

                    <p>
                        Perawatan aki yang benar membuat starter tetap ringan
                        dan umur aki lebih panjang.
                    </p>

                    <a href="artikel/artikel4.php" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

            <!-- ARTIKEL 5 -->
            <div class="card">

                <img src="gambar_blog/rantaii.webp">

                <div class="card-body">

                    <span class="tag">Servis</span>
                    <span class="tanggal">10 Juli 2026</span>

                    <h3>Tips Merawat Rantai Motor</h3>

                    <p>
                        Bersihkan dan lumasi rantai secara berkala agar
                        tidak cepat aus.
                    </p>

                    <a href="artikel/artikel5.php" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

            <!-- ARTIKEL 6 -->
            <div class="card">

                <img src="gambar_blog/tambal_bann.webp">

                <div class="card-body">

                    <span class="tag">Tips</span>
                    <span class="tanggal">9 Juli 2026</span>

                    <h3>Kapan Ban Motor Harus Diganti?</h3>

                    <p>
                        Kenali tanda ban motor yang sudah tidak layak
                        digunakan agar perjalanan tetap aman.
                    </p>

                    <a href="artikel/artikel6.php" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

            <!-- ARTIKEL 7 -->
            <div class="card">

                <img src="gambar_blog/busii.webp">

                <div class="card-body">

                    <span class="tag">Edukasi</span>
                    <span class="tanggal">8 Juli 2026</span>

                    <h3>Cara Mengetahui Busi Motor Rusak</h3>

                    <p>
                        Busi yang bermasalah membuat mesin sulit hidup
                        dan konsumsi BBM meningkat.
                    </p>

                    <a href="artikel/artikel7.php" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

            <!-- ARTIKEL 8 -->
            <div class="card">

                <img src="gambar_blog/injeksii.webp">

                <div class="card-body">

                    <span class="tag">Servis</span>
                    <span class="tanggal">7 Juli 2026</span>

                    <h3>Pentingnya Servis Injeksi Berkala</h3>

                    <p>
                        Membersihkan injector secara rutin membuat
                        pembakaran lebih sempurna.
                    </p>

                    <a href="artikel/artikel8.php" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

            <!-- ARTIKEL 9 -->
            <div class="card">

                <img src="gambar_blog/cuci_motorr.webp">

                <div class="card-body">

                    <span class="tag">Tips</span>
                    <span class="tanggal">6 Juli 2026</span>

                    <h3>Manfaat Cuci Motor Secara Rutin</h3>

                    <p>
                        Motor bersih bukan hanya enak dipandang,
                        tetapi juga mencegah karat.
                    </p>

                    <a href="artikel/artikel9.php" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

            <!-- ARTIKEL 10 -->
            <div class="card">

                <img src="gambar_blog/promo_serviss.webp">

                <div class="card-body">

                    <span class="tag">Promo</span>
                    <span class="tanggal">5 Juli 2026</span>

                    <h3>Promo Servis Bulan Ini</h3>

                    <p>
                        Nikmati diskon servis hingga 20% dan gratis
                        pengecekan mesin di Bengkel KENGGEMOTI.
                    </p>

                    <a href="artikel/artikel10.php" class="btn">
                        Baca Selengkapnya
                    </a>

                </div>

            </div>

        </div>

        <!-- SIDEBAR -->
        <div class="sidebar">

            <div class="box">

                <h2>📰 Artikel Terbaru</h2>

                <ul>

                    <li><a href="artikel/artikel1.php">Kapan Waktu yang Tepat Ganti Oli?</a></li>

                    <li><a href="artikel/artikel2.php">Tips Merawat CVT Motor Matic</a></li>

                    <li><a href="artikel/artikel3.php">Tanda Kampas Rem Harus Diganti</a></li>

                    <li><a href="artikel/artikel4.php">Cara Merawat Aki Motor</a></li>

                    <li><a href="artikel/artikel5.php">Tips Merawat Rantai Motor</a></li>

                </ul>

            </div>

            <div class="box">

                <h2>📂 Kategori</h2>

                <ul>

                    <li>🛠 Tips Perawatan</li>

                    <li>⚙ Servis Motor</li>

                    <li>🏍 Modifikasi</li>

                    <li>🎁 Promo Bengkel</li>

                    <li>📚 Edukasi Otomotif</li>

                </ul>

            </div>

            <div class="box wa">

                <h2>📞 Hubungi Kami</h2>

                <p>

                    Ada pertanyaan mengenai servis motor?

                    Hubungi mekanik kami melalui WhatsApp.

                </p>

                <a href="https://wa.me/6282234813822" target="_blank">

                    Chat WhatsApp

                </a>

            </div>

        </div>

    </div>

    <footer>

        <h2>🚗 KENGGEMOTI Racing Team</h2>

        <br>

        <p>

            Blog otomotif yang memberikan informasi, tips,

            edukasi, promo, dan berita terbaru mengenai

            perawatan sepeda motor.

        </p>

        <br>

        © 2026 KENGGEMOTI Racing Team | All Rights Reserved

    </footer>

</body>

</html>