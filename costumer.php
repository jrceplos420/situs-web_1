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
</head>
<body>

<h2>Selamat Datang Customer</h2>

<a href="index.php?logout=true">Logout</a>

<hr>

<h3>Layanan Bengkel</h3>

<ul>
    <li>Servis Motor</li>
    <li>Ganti Oli</li>
    <li>Servis CVT</li>
    <li>Tambal Ban</li>
</ul>

</body>
</html>