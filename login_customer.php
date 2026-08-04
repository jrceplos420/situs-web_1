<?php
session_start();
include "koneksi.php";

if (isset($_SESSION['customer'])) {
    header("Location: customer.php");
    exit;
}

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $cek = mysqli_query($conn, "SELECT * FROM customer
        WHERE username='$username'
        AND password='$password'");

        if (!$cek) {
    die(mysqli_error($conn));
}

    if (mysqli_num_rows($cek) > 0) {

        $data = mysqli_fetch_assoc($cek);

        $_SESSION['customer'] = $data['nama'];
        $_SESSION['username'] = $data['username'];

        header("Location: customer.php");
        exit;
    } else {

        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Customer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {

            background: linear-gradient(135deg, #00b4d8, #0077b6);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .card {

            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .2);

        }
    </style>

</head>

<body>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card">

                    <div class="card-header bg-primary text-white text-center">

                        <h3>🔐 Login Customer</h3>

                    </div>

                    <div class="card-body">

                        <?php if (isset($error)) { ?>

                            <div class="alert alert-danger">

                                <?php echo $error; ?>

                            </div>

                        <?php } ?>

                        <form method="POST">

                            <div class="mb-3">

                                <label>Username</label>

                                <input
                                    type="text"
                                    name="username"
                                    class="form-control"
                                    required>

                            </div>

                            <div class="mb-3">

                                <label>Password</label>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    required>

                            </div>

                            <button
                                type="submit"
                                name="login"
                                class="btn btn-primary w-100">

                                LOGIN

                            </button>

                        </form>

                        <hr>

                        <div class="text-center">

                            Belum punya akun?

                            <a href="register_customer.php">

                                Daftar Disini

                            </a>

                        </div>

                        <br>

                        <div class="text-center">

                            <a href="welcome.php">

                                ← Kembali ke Beranda

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>