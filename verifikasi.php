<?php
$conn = mysqli_connect("localhost", "root", "", "bengkell_db");

if (!$conn) {
    die("Koneksi gagal");
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    mysqli_query($conn, "
    UPDATE servis
    SET status_pembayaran='Lunas'
    WHERE id='$id'
    ");

    header("Location: index.php");
    exit;
} else {
    echo "ID tidak ditemukan";
}
