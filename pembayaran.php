<<<<<<< HEAD
<?php

$conn = mysqli_connect("localhost","root","","bengkell_db");

$id = $_GET['id'];

$data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM servis WHERE id='$id'"));

if(isset($_POST['bayar'])){

    $metode = $_POST['metode'];

    $gambar = $_FILES['bukti']['name'];

    $tmp = $_FILES['bukti']['tmp_name'];

    move_uploaded_file($tmp,"bukti/".$gambar);

    mysqli_query($conn,"
    UPDATE servis SET

    metode_pembayaran='$metode',

    bukti_pembayaran='$gambar',

    status_pembayaran='Menunggu Verifikasi'

    WHERE id='$id'
    ");

    echo "<script>
    alert('Pembayaran berhasil dikirim');
    location='customer.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Pembayaran Servis</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
background:#eef3fa;
}

.navbar{

background:linear-gradient(90deg,#0052cc,#1e88e5);

padding:18px 40px;

display:flex;

justify-content:space-between;

color:white;

align-items:center;

}

.navbar a{

color:white;

text-decoration:none;

font-weight:bold;

}

.container{

width:1200px;

margin:35px auto;

}

.judul{

text-align:center;

margin-bottom:30px;

}

.judul h1{

font-size:45px;

color:#23344d;

}

.judul p{

margin-top:10px;

font-size:20px;

color:#666;

}

.flex{

display:flex;

gap:25px;

}

.left{

flex:2;

background:white;

padding:30px;

border-radius:18px;

box-shadow:0 10px 20px rgba(0,0,0,.1);

}

.right{

flex:1;

background:white;

padding:25px;

border-radius:18px;

box-shadow:0 10px 20px rgba(0,0,0,.1);

}

.section{

font-size:28px;

margin-bottom:25px;

color:#1565c0;

font-weight:bold;

}

.detail{

display:flex;

justify-content:space-between;

padding:18px 0;

border-bottom:1px solid #eee;

font-size:18px;

}

.detail b{

color:#1565c0;

}

select,input[type=file]{

width:100%;

padding:14px;

margin-top:18px;

border-radius:10px;

border:1px solid #ccc;

font-size:15px;

}

.info{

background:#edf5ff;

padding:18px;

border-radius:12px;

margin-top:20px;

line-height:30px;

}

button{

width:100%;

margin-top:25px;

padding:16px;

background:#1565c0;

color:white;

border:none;

font-size:18px;

border-radius:10px;

cursor:pointer;

}

button:hover{

background:#0d47a1;

}

.qr{

text-align:center;

}

.qr img{

width:260px;

margin-top:20px;

border:1px solid #ddd;

padding:10px;

border-radius:10px;

}

.total{

background:#eef6ff;

margin-top:30px;

padding:20px;

border-radius:10px;

text-align:center;

}

.total h2{

color:#1565c0;

font-size:36px;

margin-top:10px;

}

.peringatan{

margin-top:20px;

background:#fff5e6;

padding:18px;

border-radius:10px;

color:#8a5b00;

}

</style>

</head>

<body>

<div class="navbar">

<h2><i class="fa-solid fa-gears"></i> BENGKEL MODERN</h2>

<a href="customer.php">

<i class="fa-solid fa-house"></i>

Kembali

</a>

</div>

<div class="container">

<div class="judul">

<h1>Pembayaran Servis</h1>

<p>

Silahkan lakukan pembayaran sesuai total biaya servis

</p>

</div>

<form method="POST" enctype="multipart/form-data">

<div class="flex">

<div class="left">

<div class="section">

<i class="fa-solid fa-clipboard-list"></i>

Detail Servis

</div>

<div class="detail">

<span>Nama Pelanggan</span>

<b><?= $data['nama_pelanggan']; ?></b>

</div>

<div class="detail">

<span>Kendaraan</span>

<b><?= $data['kendaraan']; ?></b>

</div>

<div class="detail">

<span>Total Biaya</span>

<b>

Rp <?= number_format($data['biaya']); ?>

</b>

</div>

<br>

<h3>Metode Pembayaran</h3>

<select name="metode" id="metode">

<option value="QRIS">QRIS</option>

<option value="Transfer BCA">Transfer BCA</option>

<option value="Transfer BRI">Transfer BRI</option>

<option value="Transfer BNI">Transfer BNI</option>

<option value="Transfer Mandiri">Transfer Mandiri</option>

</select>

<div class="info" id="info">

<b>Cara Pembayaran</b>

<ol style="margin-left:20px;margin-top:10px;">

<li>Scan QR Code.</li>

<li>Bayar sesuai nominal.</li>

<li>Upload bukti pembayaran.</li>

<li>Klik Kirim Pembayaran.</li>

</ol>

</div>

<h3 style="margin-top:25px;">

Upload Bukti Pembayaran

</h3>

<input type="file" name="bukti" required>

<button name="bayar">

<i class="fa-solid fa-paper-plane"></i>

Kirim Pembayaran

</button>

</div>

<div class="right">

<div class="section">

<i class="fa-solid fa-qrcode"></i>

Pembayaran

</div>

<div class="qr" id="gambar">

<img src="gambar/qris.png">

</div>

<div class="total">

<p>Total Pembayaran</p>

<h2>

Rp <?= number_format($data['biaya']); ?>

</h2>

</div>

<div class="peringatan">

<b>Perhatian</b>

<p style="margin-top:10px">

Pastikan nominal pembayaran sesuai.

</p>

</div>

</div>

</div>

</form>

</div>

<script>

let metode=document.getElementById("metode");

let gambar=document.getElementById("gambar");

let info=document.getElementById("info");

metode.onchange=function(){

if(this.value=="QRIS"){

gambar.innerHTML='<img src="gambar/qris.png">';

info.innerHTML=`
<b>Cara Pembayaran QRIS</b>
<ol style="margin-left:20px;margin-top:10px;">
<li>Scan QR Code.</li>
<li>Bayar sesuai nominal.</li>
<li>Upload bukti pembayaran.</li>
</ol>`;

}else{

gambar.innerHTML=`
<h3>No Rekening</h3>
<h2>1234567890</h2>
<p>a.n Bengkel Modern</p>
`;

info.innerHTML=`
<b>Transfer Bank</b>
<ol style="margin-left:20px;margin-top:10px;">
<li>Transfer sesuai nominal.</li>
<li>Simpan bukti transfer.</li>
<li>Upload bukti pembayaran.</li>
</ol>`;
}

}

</script>

</body>

=======
<?php

$conn = mysqli_connect("localhost","root","","bengkell_db");

$id = $_GET['id'];

$data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM servis WHERE id='$id'"));

if(isset($_POST['bayar'])){

    $metode = $_POST['metode'];

    $gambar = $_FILES['bukti']['name'];

    $tmp = $_FILES['bukti']['tmp_name'];

    move_uploaded_file($tmp,"bukti/".$gambar);

    mysqli_query($conn,"
    UPDATE servis SET

    metode_pembayaran='$metode',

    bukti_pembayaran='$gambar',

    status_pembayaran='Menunggu Verifikasi'

    WHERE id='$id'
    ");

    echo "<script>
    alert('Pembayaran berhasil dikirim');
    location='customer.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Pembayaran Servis</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
background:#eef3fa;
}

.navbar{

background:linear-gradient(90deg,#0052cc,#1e88e5);

padding:18px 40px;

display:flex;

justify-content:space-between;

color:white;

align-items:center;

}

.navbar a{

color:white;

text-decoration:none;

font-weight:bold;

}

.container{

width:1200px;

margin:35px auto;

}

.judul{

text-align:center;

margin-bottom:30px;

}

.judul h1{

font-size:45px;

color:#23344d;

}

.judul p{

margin-top:10px;

font-size:20px;

color:#666;

}

.flex{

display:flex;

gap:25px;

}

.left{

flex:2;

background:white;

padding:30px;

border-radius:18px;

box-shadow:0 10px 20px rgba(0,0,0,.1);

}

.right{

flex:1;

background:white;

padding:25px;

border-radius:18px;

box-shadow:0 10px 20px rgba(0,0,0,.1);

}

.section{

font-size:28px;

margin-bottom:25px;

color:#1565c0;

font-weight:bold;

}

.detail{

display:flex;

justify-content:space-between;

padding:18px 0;

border-bottom:1px solid #eee;

font-size:18px;

}

.detail b{

color:#1565c0;

}

select,input[type=file]{

width:100%;

padding:14px;

margin-top:18px;

border-radius:10px;

border:1px solid #ccc;

font-size:15px;

}

.info{

background:#edf5ff;

padding:18px;

border-radius:12px;

margin-top:20px;

line-height:30px;

}

button{

width:100%;

margin-top:25px;

padding:16px;

background:#1565c0;

color:white;

border:none;

font-size:18px;

border-radius:10px;

cursor:pointer;

}

button:hover{

background:#0d47a1;

}

.qr{

text-align:center;

}

.qr img{

width:260px;

margin-top:20px;

border:1px solid #ddd;

padding:10px;

border-radius:10px;

}

.total{

background:#eef6ff;

margin-top:30px;

padding:20px;

border-radius:10px;

text-align:center;

}

.total h2{

color:#1565c0;

font-size:36px;

margin-top:10px;

}

.peringatan{

margin-top:20px;

background:#fff5e6;

padding:18px;

border-radius:10px;

color:#8a5b00;

}

</style>

</head>

<body>

<div class="navbar">

<h2><i class="fa-solid fa-gears"></i> BENGKEL MODERN</h2>

<a href="customer.php">

<i class="fa-solid fa-house"></i>

Kembali

</a>

</div>

<div class="container">

<div class="judul">

<h1>Pembayaran Servis</h1>

<p>

Silahkan lakukan pembayaran sesuai total biaya servis

</p>

</div>

<form method="POST" enctype="multipart/form-data">

<div class="flex">

<div class="left">

<div class="section">

<i class="fa-solid fa-clipboard-list"></i>

Detail Servis

</div>

<div class="detail">

<span>Nama Pelanggan</span>

<b><?= $data['nama_pelanggan']; ?></b>

</div>

<div class="detail">

<span>Kendaraan</span>

<b><?= $data['kendaraan']; ?></b>

</div>

<div class="detail">

<span>Total Biaya</span>

<b>

Rp <?= number_format($data['biaya']); ?>

</b>

</div>

<br>

<h3>Metode Pembayaran</h3>

<select name="metode" id="metode">

<option value="QRIS">QRIS</option>

<option value="Transfer BCA">Transfer BCA</option>

<option value="Transfer BRI">Transfer BRI</option>

<option value="Transfer BNI">Transfer BNI</option>

<option value="Transfer Mandiri">Transfer Mandiri</option>

</select>

<div class="info" id="info">

<b>Cara Pembayaran</b>

<ol style="margin-left:20px;margin-top:10px;">

<li>Scan QR Code.</li>

<li>Bayar sesuai nominal.</li>

<li>Upload bukti pembayaran.</li>

<li>Klik Kirim Pembayaran.</li>

</ol>

</div>

<h3 style="margin-top:25px;">

Upload Bukti Pembayaran

</h3>

<input type="file" name="bukti" required>

<button name="bayar">

<i class="fa-solid fa-paper-plane"></i>

Kirim Pembayaran

</button>

</div>

<div class="right">

<div class="section">

<i class="fa-solid fa-qrcode"></i>

Pembayaran

</div>

<div class="qr" id="gambar">

<img src="gambar/qris.png">

</div>

<div class="total">

<p>Total Pembayaran</p>

<h2>

Rp <?= number_format($data['biaya']); ?>

</h2>

</div>

<div class="peringatan">

<b>Perhatian</b>

<p style="margin-top:10px">

Pastikan nominal pembayaran sesuai.

</p>

</div>

</div>

</div>

</form>

</div>

<script>

let metode=document.getElementById("metode");

let gambar=document.getElementById("gambar");

let info=document.getElementById("info");

metode.onchange=function(){

if(this.value=="QRIS"){

gambar.innerHTML='<img src="gambar/qris.png">';

info.innerHTML=`
<b>Cara Pembayaran QRIS</b>
<ol style="margin-left:20px;margin-top:10px;">
<li>Scan QR Code.</li>
<li>Bayar sesuai nominal.</li>
<li>Upload bukti pembayaran.</li>
</ol>`;

}else{

gambar.innerHTML=`
<h3>No Rekening</h3>
<h2>1234567890</h2>
<p>a.n Bengkel Modern</p>
`;

info.innerHTML=`
<b>Transfer Bank</b>
<ol style="margin-left:20px;margin-top:10px;">
<li>Transfer sesuai nominal.</li>
<li>Simpan bukti transfer.</li>
<li>Upload bukti pembayaran.</li>
</ol>`;
}

}

</script>

</body>

>>>>>>> 3e1746caa02995debb51a7aa7986408d3c88ac4f
</html>