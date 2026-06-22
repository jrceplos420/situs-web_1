<?php
session_start();

if(!isset($_SESSION['login']) || $_SESSION['level'] != 'customer'){
    header("Location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Bengkel</title>

    <style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, sans-serif;
    }

    body{
        background:#f4f6f9;
    }

    .navbar{
        background:linear-gradient(135deg,#0077b6,#00b4d8);
        padding:20px 50px;
        color:white;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }

    .logout{
        background:red;
        color:white;
        padding:10px 15px;
        text-decoration:none;
        border-radius:10px;
    }

    .hero{
        background:white;
        margin:20px;
        padding:40px;
        border-radius:20px;
        text-align:center;
        box-shadow:0 5px 20px rgba(0,0,0,0.1);
    }

    .hero h1{
        color:#0077b6;
        margin-bottom:10px;
    }

    .hero p{
        color:#555;
    }

    .container{
        width:95%;
        margin:auto;
    }

    .cards{
        display:flex;
        flex-wrap:wrap;
        gap:20px;
        margin-top:20px;
    }

    .card{
        flex:1;
        min-width:250px;
        background:white;
        padding:25px;
        border-radius:20px;
        text-align:center;
        box-shadow:0 5px 15px rgba(0,0,0,0.08);
        transition:0.3s;
    }

    .card:hover{
        transform:translateY(-5px);
    }

    .card h2{
    color:#0077b6;
    margin-bottom:10px;
    font-size:28px;
}

    .card p{
        color:#555;
    }

    .btn{
        display:inline-block;
        margin-top:15px;
        padding:10px 20px;
        background:#0077b6;
        color:white;
        text-decoration:none;
        border-radius:10px;
    }

    .footer{
        margin-top:30px;
        padding:20px;
        text-align:center;
        background:#0077b6;
        color:white;
    }

    .galeri{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:15px;
    margin-top:20px;
    margin-bottom:20px;
}

.galeri{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:15px;
    margin-top:20px;
    margin-bottom:20px;
}

.mekanik{
    background:white;
    padding:15px;
    border-radius:15px;
    box-shadow:0 3px 10px rgba(0,0,0,0.1);
    text-align:center;
}

.mekanik h3{
    margin-top:10px;
    color:#0077b6;
}

.mekanik p{
    margin-top:10px;
    color:#555;
    line-height:1.6;
    text-align:justify;
}

    </style>

</head>
<body>

<div class="navbar">

    <h2>🚗 KENGGEMOTI RACING TEAM</h2>

    <a class="logout" href="index.php?logout=true">
        Logout
    </a>

</div>

<<div class="hero">

    <h1>Selamat Datang Customer 👋</h1>

    <p>
        Servis kendaraan lebih mudah, cepat, dan terpercaya.
    </p>

</div>

<div class="container">

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
            <h2>📞 24 Jam</h2>
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
    <img src="servis mesin motor.jpg"
         alt="Servis Motor"
         style="width:100%; height:200px; object-fit:cover; border-radius:10px;">

    <h2>🛠 Servis Mesin Motor</h2>

    <p>Servis lengkap untuk semua jenis motor.</p>

    <a href="servis_motor.php" class="btn">Lihat</a>
</div>
        <div class="card">
    <img src="ganti oli.webp"
         alt="Ganti Oli"
         style="width:100%; height:200px; object-fit:cover; border-radius:10px;">

    <h2>🛢 Ganti Oli</h2>

    <p>Oli berkualitas untuk performa terbaik.</p>

    <a href="ganti_oli.php" class="btn">Lihat</a>
</div>

        <div class="card">
    <img src="servis cvt.jpg"
         alt="Servis CVT"
         style="width:100%; height:200px; object-fit:cover; border-radius:10px;">

    <h2>⚙ Servis CVT</h2>

    <p>Perawatan CVT agar motor tetap nyaman.</p>

    <a href="servis_cvt.php" class="btn">Lihat</a>
</div>

        <div class="card">
    <img src="tambal ban.webp"
         alt="Tambal Ban"
         style="width:100%; height:200px; object-fit:cover; border-radius:10px;">

    <h2>🔧 Tambal Ban</h2>

    <p>Tambal ban biar aman disetiap perjalananmu.</p>

    <a href="tambal_ban.php" class="btn">Lihat</a>
</div>

        <div class="card">
    <img src="boreup.webp"
         alt="Naik CC Motor"
         style="width:100%; height:200px; object-fit:cover; border-radius:10px;">

    <h2>🏍️ Naik CC Motor</h2>

    <p>Kalau motor ingin lebih kencang, jangan lupa naikkan kapasitas CC sesuai kebutuhan.</p>

    <a href="naik_cc.php" class="btn">Lihat</a>
</div>

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

    </div>

</div>

<div class="hero" style="margin-top:30px;">

    <h1>🏍️ Tentang Kami</h1>

    <div class="galeri">

    <div class="galeri">

    <div class="mekanik">
        <img src="1.jpg" alt="Mekanik 1">

        <h3>🔧 Sulaiman</h3>

        <p>
            Mekanik Senior yang memiliki pengalaman lebih dari 10 tahun
            dalam perbaikan mesin motor. Bertugas melakukan diagnosis
            kerusakan dan memastikan setiap kendaraan kembali dalam
            kondisi prima.
        </p>
    </div>

    <div class="mekanik">
        <img src="1.jpg" alt="Mekanik 2">

        <h3>⚙ Budi Setiawan</h3>

        <p>
            Spesialis Servis CVT dan sistem transmisi otomatis.
            Bertanggung jawab dalam perawatan CVT agar kendaraan
            tetap nyaman, halus, dan bertenaga saat digunakan.
        </p>
    </div>

    <div class="mekanik">
        <img src="1.jpg" alt="Mekanik 3">

        <h3>🛢 Rizky Pratama</h3>

        <p>
            Ahli dalam perawatan berkala dan penggantian oli.
            Memastikan penggunaan oli sesuai spesifikasi sehingga
            performa mesin tetap maksimal dan awet.
        </p>
    </div>

    <div class="mekanik">
        <img src="1.jpg" alt="Mekanik 4">

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

        KENGGEMOTI Racing Team adalah bengkel motor yang menyediakan berbagai
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

</body>
</html>

