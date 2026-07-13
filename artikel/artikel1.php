<?php

$conn = mysqli_connect("localhost", "root", "", "bengkell_db");

if (isset($_POST['kirim'])) {

    $artikel = "artikel1";
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];

    mysqli_query(
        $conn,
        "INSERT INTO komentar(artikel,nama,komentar)
    VALUES('$artikel','$nama','$komentar')"
    );
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Kapan Waktu yang Tepat Ganti Oli Motor?</title>

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
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
        }

        .kembali {
            background: red;
            padding: 10px 18px;
            border-radius: 10px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            width: 80%;
            margin: 40px auto;
        }

        .artikel {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .1);
        }

        .artikel img {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }

        .isi {
            padding: 35px;
        }

        .tag {
            display: inline-block;
            background: #ffc107;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .judul {
            font-size: 40px;
            color: #0077b6;
            margin: 20px 0;
        }

        .info {
            color: gray;
            margin-bottom: 30px;
        }

        .isi p {
            font-size: 18px;
            line-height: 34px;
            color: #555;
            margin-bottom: 20px;
            text-align: justify;
        }

        .box {
            background: #eaf7ff;
            padding: 20px;
            border-left: 6px solid #0077b6;
            border-radius: 10px;
            margin: 30px 0;
        }

        .box h3 {
            color: #0077b6;
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: #0077b6;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            margin-top: 30px;
        }

        .btn:hover {
            background: #005b8d;
        }

        footer {
            margin-top: 50px;
            background: #0077b6;
            color: white;
            padding: 25px;
            text-align: center;
        }
    </style>

</head>

<body>

    <div class="navbar">

        <div class="logo">
            🚗 KENGGEMOTI Racing Team
        </div>

        <a href="../blog.php" class="kembali">
            ⬅ Kembali ke Blog
        </a>

    </div>

    <div class="container">

        <div class="artikel">

            <img src="../gambar_blog/ganti_olii.webp">

            <div class="isi">

                <span class="tag">
                    Tips Servis
                </span>

                <h1 class="judul">
                    Kapan Waktu yang Tepat Ganti Oli Motor?
                </h1>

                <div class="info">

                    Ditulis oleh Admin Bengkel

                    •

                    14 Juli 2026

                </div>

                <p>

                    Oli mesin merupakan komponen penting yang berfungsi melumasi seluruh bagian mesin agar gesekan antar komponen tidak menyebabkan keausan.

                </p>

                <p>

                    Penggantian oli secara rutin membuat performa motor tetap optimal, mesin lebih halus, konsumsi bahan bakar lebih irit serta memperpanjang usia mesin.

                </p>

                <p>

                    Idealnya oli diganti setiap 2.000–3.000 kilometer atau setiap 2 bulan tergantung jenis oli dan intensitas penggunaan kendaraan.

                </p>

                <div class="box">

                    <h3>Tips Bengkel</h3>

                    Selalu gunakan oli yang sesuai rekomendasi pabrikan agar mesin tetap awet.

                </div>

                <p>

                    Selain mengganti oli, jangan lupa mengganti filter oli apabila sudah waktunya agar sirkulasi pelumas tetap bersih.

                </p>

                <a href="../blog.php" class="btn">

                    ⬅ Kembali ke Blog

                </a>

                <hr style="margin:40px 0;">

                <h2>Komentar Pengunjung</h2>

                <form method="POST">

                    <input
                        type="text"
                        name="nama"
                        placeholder="Nama Anda"
                        required
                        style="
width:100%;
padding:15px;
margin-top:15px;
border-radius:10px;
border:1px solid #ccc;
">

                    <textarea

                        name="komentar"

                        placeholder="Tulis komentar..."

                        required

                        style="
width:100%;
height:150px;
padding:15px;
margin-top:15px;
border-radius:10px;
border:1px solid #ccc;
"></textarea>

                    <button

                        type="submit"

                        name="kirim"

                        class="btn"

                        style="border:none;cursor:pointer;">

                        Kirim Komentar

                    </button>

                </form>

                <br><br>

                <h2>Komentar Terbaru</h2>

                <?php

                $data = mysqli_query(
    $conn,
    "SELECT * FROM komentar
    WHERE artikel='artikel1'
    ORDER BY id DESC"
);

if(!$data){
    die(mysqli_error($conn));
}

                while ($d = mysqli_fetch_array($data)) {

                ?>

                    <div

                        style="
background:#f8f8f8;
padding:20px;
margin-top:15px;
border-radius:15px;
">

                        <h3>

                            👤 <?php echo $d['nama']; ?>

                        </h3>

                        <small>

                            <?php echo $d['tanggal']; ?>

                        </small>

                        <p style="margin-top:10px;">

                            <?php echo $d['komentar']; ?>

                        </p>

                    </div>

                <?php } ?>

            </div>

        </div>

    </div>

    <footer>

        © 2026 KENGGEMOTI Racing Team

    </footer>

</body>

</html>