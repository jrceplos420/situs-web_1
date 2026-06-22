<?php
$conn = mysqli_connect("localhost","root","","bengkell_db");

if(isset($_POST['booking'])){

    $nama       = $_POST['nama'];
    $telepon    = $_POST['telepon'];
    $kendaraan  = $_POST['kendaraan'];
    $layanan    = $_POST['layanan'];
    $tanggal    = $_POST['tanggal'];
    $jam        = $_POST['jam'];

    mysqli_query($conn,"
INSERT INTO servis
(nama_pelanggan, kendaraan, keluhan, biaya)
VALUES
(
'$nama',
'$kendaraan',
'Booking : $layanan | Tanggal : $tanggal | Jam : $jam',
'0'
)
");

$pesan = "Booking Servis Berhasil!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Servis</title>

    <style>

        body{
            font-family: Arial;
            background:#f4f4f4;
            margin:0;
        }

        .container{
            width:600px;
            margin:30px auto;
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        h2{
            text-align:center;
            color:#0077b6;
        }

        input, select{
            width:100%;
            padding:12px;
            margin-top:10px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:8px;
        }

        .btn{
            width:100%;
            padding:12px;
            background:#0077b6;
            color:white;
            border:none;
            border-radius:8px;
            cursor:pointer;
        }

        .btn:hover{
            background:#023e8a;
        }

        .success{
            background:#d4edda;
            color:green;
            padding:15px;
            margin-bottom:15px;
            border-radius:8px;
        }

    </style>

</head>
<body>

<div class="container">

    <h2>📅 Booking Servis Bengkel</h2>

    <?php if(isset($pesan)){ ?>
        <div class="success">
            <?php echo $pesan; ?>
        </div>
    <?php } ?>

    <form method="POST">

        <input type="text"
        name="nama"
        placeholder="Nama Lengkap"
        required>

        <input type="text"
        name="telepon"
        placeholder="Nomor Telepon"
        required>

        <input type="text"
        name="kendaraan"
        placeholder="Jenis Kendaraan"
        required>

        <select name="layanan" required>
            <option value="">-- Pilih Layanan --</option>
            <option>Servis Motor</option>
            <option>Ganti Oli</option>
            <option>Servis CVT</option>
            <option>Tambal Ban</option>
            <option>Naik CC Motor</option>
        </select>

        <input type="date"
        name="tanggal"
        required>

        <input type="time"
        name="jam"
        required>

        <button type="submit"
        name="booking"
        class="btn">
            Booking Sekarang
        </button>

    </form>

    <br>

    <a href="customer.php" class="btn"
    style="text-decoration:none; display:block; text-align:center;">
        ⬅ Kembali
    </a>

</div>

</body>
</html>