<!DOCTYPE html>
<html>

<head>
    <title>Semua Layanan</title>

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
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            background: red;
            padding: 10px 18px;
            border-radius: 8px;
        }

        .judul {
            text-align: center;
            margin: 40px 0;
        }

        .judul h1 {
            color: #0077b6;
            font-size: 40px;
        }

        .cards {

            display: grid;

            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));

            gap: 25px;

            width: 95%;

            margin: auto;

            margin-bottom: 40px;

        }

        .card {

            background: white;

            border-radius: 20px;

            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);

            overflow: hidden;

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

        .card h2 {

            text-align: center;

            margin-top: 15px;

            color: #0077b6;

        }

        .card p {

            padding: 15px;

            text-align: center;

            color: #555;

            flex: 1;

        }

        .btn {

            width: 150px;

            margin: 20px auto;

            padding: 12px;

            background: #0077b6;

            color: white;

            text-decoration: none;

            text-align: center;

            border-radius: 10px;

            display: block;

        }

        .btn:hover {

            background: #005b8f;

        }
    </style>

</head>

<body>

    <div class="navbar">

        <h2>🔧 Semua Layanan Bengkel</h2>

        <a href="customer.php">Kembali</a>

    </div>

    <div class="judul">

        <h1>Semua Layanan Kami</h1>

        <p>Pilih layanan sesuai kebutuhan motor Anda.</p>

    </div>

    <div class="cards">

        <div class="cards">

            <div class="card">
                <img src="servis mesin motor.jpg" style="width:100%;height:200px;object-fit:cover;border-radius:10px;">
                <h2>🛠 Servis Mesin Motor</h2>
                <p>Servis lengkap mesin motor agar performa kembali maksimal.</p>
                <a href="servis_motor.php" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="ganti oli.webp" style="width:100%;height:200px;object-fit:cover;border-radius:10px;">
                <h2>🛢 Ganti Oli</h2>
                <p>Penggantian oli mesin dan gardan menggunakan oli berkualitas.</p>
                <a href="ganti_oli.php" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="servis cvt.jpg" style="width:100%;height:200px;object-fit:cover;border-radius:10px;">
                <h2>⚙ Servis CVT</h2>
                <p>Membersihkan dan merawat CVT agar tarikan motor lebih halus.</p>
                <a href="servis_cvt.php" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="tambal ban.webp" style="width:100%;height:200px;object-fit:cover;border-radius:10px;">
                <h2>🔧 Tambal Ban</h2>
                <p>Tambal ban tubeless maupun ban biasa dengan hasil rapi.</p>
                <a href="tambal_ban.php" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="boreup.webp" style="width:100%;height:200px;object-fit:cover;border-radius:10px;">
                <h2>🏍️ Naik CC Motor</h2>
                <p>Upgrade kapasitas mesin sesuai kebutuhan dan keinginan.</p>
                <a href="naik_cc.php" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="kampas_rem.jpg" style="width:100%;height:200px;object-fit:cover;border-radius:10px;">
                <h2>🛑 Ganti Kampas Rem</h2>
                <p>Meningkatkan keamanan pengereman dengan kampas rem baru.</p>
                <a href="kampas_rem.php" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="ganti_aki.jpg" style="width:100%;height:200px;object-fit:cover;border-radius:10px;">
                <h2>🔋 Ganti Aki</h2>
                <p>Penggantian aki motor agar starter kembali normal.</p>
                <a href="ganti_aki.php" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="rantai.jpg" style="width:100%;height:200px;object-fit:cover;border-radius:10px;">
                <h2>⛓ Servis Rantai</h2>
                <p>Pembersihan, pelumasan, dan penyetelan rantai motor.</p>
                <a href="servis_rantai.php" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="injeksi.jpg" style="width:100%;height:200px;object-fit:cover;border-radius:10px;">
                <h2>💻 Servis Injeksi</h2>
                <p>Pembersihan throttle body dan injector agar irit bahan bakar.</p>
                <a href="servis_injeksi.php" class="btn">Lihat</a>
            </div>

            <div class="card">
                <img src="cuci_motor.webp" style="width:100%;height:200px;object-fit:cover;border-radius:10px;">
                <h2>🧼 Cuci Motor Premium</h2>
                <p>Cuci motor lengkap hingga bagian mesin dan kolong.</p>
                <a href="cuci_motor.php" class="btn">Lihat</a>
            </div>

        </div>