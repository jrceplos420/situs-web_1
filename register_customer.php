<?php
include "koneksi.php";

if (isset($_POST['daftar'])) {

    $nama      = $_POST['nama'];
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $telepon   = $_POST['telepon'];
    $alamat    = $_POST['alamat'];

    // Cek username sudah dipakai atau belum
    $cek = mysqli_query($conn, "SELECT * FROM customer WHERE username='$username'");

    if (mysqli_num_rows($cek) > 0) {

        echo "<script>
        alert('Username sudah digunakan!');
        </script>";
    } else {

        mysqli_query($conn, "INSERT INTO customer
        (nama,username,password,telepon,alamat)
        VALUES
        ('$nama','$username','$password','$telepon','$alamat')");

        echo "<script>
        alert('Pendaftaran berhasil');
        window.location='login_customer.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>Daftar Customer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card shadow">

                    <div class="card-header bg-success text-white text-center">

                        <h3>Daftar Customer</h3>

                    </div>

                    <div class="card-body">

                        <form method="POST">

                            <label>Nama Lengkap</label>

                            <input
                                type="text"
                                name="nama"
                                class="form-control"
                                required>

                            <br>

                            <label>Username</label>

                            <input
                                type="text"
                                name="username"
                                class="form-control"
                                required>

                            <br>

                            <label>Password</label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>

                            <br>

                            <label>No HP</label>

                            <input
                                type="text"
                                name="telepon"
                                class="form-control">

                            <br>

                            <label>Alamat</label>

                            <textarea
                                name="alamat"
                                class="form-control"></textarea>

                            <br>

                            <button
                                class="btn btn-success w-100"
                                name="daftar">

                                DAFTAR

                            </button>

                        </form>

                        <hr>

                        <p class="text-center">

                            Sudah punya akun?

                            <a href="login_customer.php">

                                Login

                            </a>

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>