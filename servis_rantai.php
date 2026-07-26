<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servis Rantai</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f7fb;
        }

        .navbar{
            background:linear-gradient(135deg,#0077b6,#00b4d8);
            color:white;
            padding:18px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .navbar a{
            color:white;
            text-decoration:none;
            background:red;
            padding:10px 20px;
            border-radius:8px;
        }

        .container{
            width:90%;
            margin:40px auto;
            display:flex;
            gap:40px;
            align-items:center;
            background:white;
            padding:30px;
            border-radius:20px;
            box-shadow:0 5px 20px rgba(0,0,0,.15);
        }

        img{
            width:420px;
            border-radius:15px;
        }

        h1{
            color:#0077b6;
            margin-bottom:20px;
        }

        p{
            line-height:30px;
            color:#555;
            margin-bottom:15px;
        }

        ul{
            margin-left:20px;
            line-height:30px;
            color:#444;
        }

        .harga{
            margin-top:20px;
            font-size:28px;
            color:red;
            font-weight:bold;
        }

        .btn{
            display:inline-block;
            margin-top:25px;
            padding:13px 30px;
            background:#28a745;
            color:white;
            text-decoration:none;
            border-radius:10px;
        }

        .btn:hover{
            background:#1d7c35;
        }

    </style>

</head>

<body>

<div class="navbar">

    <h2>⛓ Servis Rantai</h2>

    <a href="layanan.php">⬅ Kembali</a>

</div>

<div class="container">

    <img src="rantai.jpg">

    <div>

        <h1>Servis Rantai Motor</h1>

        <p>
            Servis rantai bertujuan menjaga putaran roda tetap halus,
            mengurangi suara berisik, dan memperpanjang umur rantai
            maupun gear motor.
        </p>

        <h3>Layanan yang dikerjakan :</h3>

        <ul>

            <li>✔ Membersihkan rantai</li>

            <li>✔ Melumasi rantai</li>

            <li>✔ Menyetel kekencangan rantai</li>

            <li>✔ Pemeriksaan gear depan dan belakang</li>

            <li>✔ Pemeriksaan kondisi rantai</li>

        </ul>

        <div class="harga">
            Mulai Rp35.000
        </div>

        <a href="booking.php" class="btn">
            📅 Booking Sekarang
        </a>

    </div>

</div>

</body>
</html>