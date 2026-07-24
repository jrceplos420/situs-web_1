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

        .navbar {

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 18px 50px;

            background: #0077b6;

        }

        .logo {

            color: white;

            font-size: 28px;

            font-weight: bold;

        }

        .navbar ul {

            display: flex;

            list-style: none;

            gap: 25px;

        }

        .navbar ul li a {

            text-decoration: none;

            color: white;

            font-weight: bold;

        }

        .navbar ul li a:hover {

            color: yellow;

        }

        .hero {

            text-align: center;

            padding: 120px 20px;

            background: linear-gradient(to right, #00b4d8, #0077b6);

            color: white;

        }

        .hero h1 {

            font-size: 50px;

            margin-bottom: 20px;

        }

        .hero p {

            font-size: 22px;

            margin-bottom: 30px;

        }

        .btn {

            padding: 15px 35px;

            background: orange;

            color: white;

            border: none;

            border-radius: 8px;

            font-size: 18px;

            cursor: pointer;

        }

        .btn:hover {

            background: red;

        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            margin-right: 10px;
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

            <li><a href="#tentang">Tentang</a></li>

            <li><a href="login_customer.php">Login Customer</a></li>

            <li><a href="index.php">Login Admin</a></li>

        </ul>

    </nav>

    <section class="hero" id="home">

        <h1>Selamat Datang di KENGGEMOTI Racing Team</h1>

        <p>
            Bengkel motor terpercaya untuk servis, modifikasi, dan perawatan kendaraan Anda.
        </p>

        <a href="login_customer.php" class="btn btn-primary">
            Masuk
        </a>

        <a href="register_customer.php" class="btn btn-success">
            Daftar
        </a>

    </section>

</body>

</html>