<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$conn = mysqli_connect("localhost", "root", "", "bengkell_db");

if (!$conn) {
    die("Koneksi gagal");
}

/* ================= LOGIN ================= */

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $level    = $_POST['level'];

    if (
        $username == "admin" &&
        $password == "111" &&
        $level == "admin"
    ) {

        $_SESSION['login'] = true;
        $_SESSION['level'] = "admin";

        header("Location: index.php");
        exit;
    }  else {

        $error = "Username atau Password salah!";
    }
}

/* ================= LOGOUT ================= */

if (isset($_GET['logout'])) {

    session_destroy();

    header("Location: index.php");
    exit;
}

/* ================= CEK LOGIN ================= */

if (!isset($_SESSION['login'])) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Login Bengkel</title>

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Arial;
            }

            body {
                height: 100vh;
                background: linear-gradient(135deg, #00b4d8, #0077b6);
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .login-box {
                width: 380px;
                background: white;
                padding: 40px;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            }

            .login-box h2 {
                text-align: center;
                color: #0077b6;
                margin-bottom: 25px;
            }

            input {
                width: 100%;
                padding: 14px;
                margin-top: 15px;
                border: 1px solid #ccc;
                border-radius: 10px;
                font-size: 15px;
            }

            button {
                width: 100%;
                padding: 14px;
                margin-top: 20px;
                border: none;
                border-radius: 10px;
                background: #0077b6;
                color: white;
                font-size: 16px;
                cursor: pointer;
                transition: 0.3s;
            }

            button:hover {
                background: #023e8a;
            }

            .error {
                background: #ffdddd;
                color: red;
                padding: 10px;
                margin-top: 15px;
                border-radius: 8px;
                text-align: center;
            }
        </style>

    </head>

    <body>

        <div class="login-box">

            <h2>🔧 Login Bengkel</h2>

            <?php if (isset($error)) { ?>
                <div class="error">
                    <?php echo $error; ?>
                </div>
            <?php } ?>

            <form method="POST">

                <input type="text"
                    name="username"
                    placeholder="Masukkan Username"
                    required>

                <input type="password"
                    name="password"
                    placeholder="Masukkan Password"
                    required>

                <select name="level" required
                    style="
        width:100%;
        padding:14px;
        margin-top:15px;
        border:1px solid #ccc;
        border-radius:10px;
        font-size:15px;
        ">
                    <option value="">-- Pilih Login --</option>
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                </select>

                <button type="submit" name="login">
                    LOGIN
                </button>

            </form>

        </div>

    </body>

    </html>

<?php
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD Bengkel Modern</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f1f5f9;
        }

        /* ================= NAVBAR ================= */

        .navbar {
            background: linear-gradient(135deg, #0077b6, #00b4d8);
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
        }

        .navbar h2 {
            font-size: 32px;
        }

        .logout {
            background: red;
            color: white;
            padding: 10px 18px;
            border-radius: 10px;
            text-decoration: none;
            transition: .3s;
        }

        .logout:hover {
            background: #b60000;
        }

        /* ================= MENU ================= */

        .menu-admin {
            display: flex;
            align-items: center;
            gap: 30px;
            background: none;
            box-shadow: none;
            padding: 0;
        }

        .menu-admin a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: .3s;
        }

        .menu-admin a:hover {
            color: #ffd166;
        }

        /* ================= CONTAINER ================= */

        .container {
            width: 95%;
            margin: 30px auto;
        }

        /* ================= HERO ================= */

        .hero-admin {
            background: linear-gradient(135deg, #0077b6, #00b4d8);
            color: white;
            padding: 35px;
            border-radius: 20px;
            margin-bottom: 25px;
        }

        .hero-admin h1 {
            margin-bottom: 10px;
            font-size: 40px;
        }

        /* ================= CARD ================= */

        .card {
            background: white;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .08);
            margin-bottom: 30px;
        }

        .card h3 {
            color: #0077b6;
            margin-bottom: 20px;
        }

        /* ================= FORM ================= */

        form input,
        form textarea {
            width: 100%;
            padding: 14px;
            margin-top: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
        }

        textarea {
            resize: none;
            height: 120px;
        }

        .btn {
            width: 100%;
            background: #0077b6;
            color: white;
            padding: 14px;
            border: none;
            border-radius: 10px;
            margin-top: 20px;
            cursor: pointer;
            font-size: 16px;
            transition: .3s;
        }

        .btn:hover {
            background: #023e8a;
        }

        /* ================= DASHBOARD ================= */

        .cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .box {
            flex: 1;
            min-width: 220px;
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
            transition: .3s;
        }

        .box:hover {
            transform: translateY(-8px);
        }

        .box h2 {
            font-size: 42px;
            color: #0077b6;
        }

        .box p {
            margin-top: 10px;
            font-size: 18px;
        }

        /* ================= TABLE ================= */

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 15px;
        }

        table th {
            background: #0077b6;
            color: white;
            padding: 15px;
        }

        table td {
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        table tr:hover {
            background: #f3faff;
        }

        /* ================= BUTTON ================= */

        .edit,
        .hapus,
        .selesai,
        .verifikasi {
            color: white;
            padding: 8px 14px;
            border-radius: 8px;
            text-decoration: none;
            transition: .3s;
            display: inline-block;
            margin: 2px;
        }

        .edit {
            background: #ff9800;
        }

        .edit:hover {
            background: #e68900;
        }

        .hapus {
            background: #f44336;
        }

        .hapus:hover {
            background: #c62828;
        }

        .selesai {
            background: #28a745;
        }

        .selesai:hover {
            background: #1f8b39;
        }

        .verifikasi {
            background: #6f42c1;
        }

        .verifikasi:hover {
            background: #5a32a3;
        }

        /* ================= STATUS ================= */

        .booking {
            background: #ff9800;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
        }

        .proses {
            background: #2196f3;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
        }

        .selesai-status {
            background: #28a745;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:768px) {

            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .menu-admin {
                flex-wrap: wrap;
                gap: 15px;
            }

            .cards {
                flex-direction: column;
            }

            table {
                font-size: 13px;
            }
        }

        .proses {
            background: #2196f3;
            color: white;
            padding: 8px 14px;
            border-radius: 8px;
            text-decoration: none;
            margin-left: 5px;
        }

        .proses-status {
            background: #2196f3;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
        }
    </style>

</head>

<body>

    <div class="navbar">

        <!-- Operator Bengkel pindah ke kiri -->
        <h2>🔧 Operator Bengkel</h2>

        <!-- Menu pindah ke tengah -->
        <div class="menu-admin">

            <a href="#dashboard">🏠 Dashboard</a>

            <a href="#form">➕ Tambah Servis</a>

            <a href="#data">📋 Data Servis</a>

            <a href="#laporan">📊 Laporan</a>

        </div>

        <!-- Foto dan Logout tetap di kanan -->
        <div style="display:flex;align-items:center;gap:15px;">

            <img src="1.jpg"
                style="width:45px;height:45px;border-radius:50%;">

            <a class="logout"
                href="index.php?logout=true">
                Logout
            </a>

        </div>

    </div>

    <div class="container" id="dashboard">

        <div class="hero-admin">

            <h1>👋 Selamat Datang Admin</h1>

            <p>
                Kelola data servis, booking pelanggan,
                dan laporan bengkel dengan mudah.
            </p>

        </div>

        <div class="card">
            <?php

            $total_servis = mysqli_num_rows(
                mysqli_query($conn, "SELECT * FROM servis")
            );

            $total_pendapatan = mysqli_fetch_assoc(
                mysqli_query($conn, "SELECT SUM(biaya) AS total FROM servis")
            );

            $total_pelanggan = mysqli_num_rows(
                mysqli_query($conn, "SELECT DISTINCT nama_pelanggan FROM servis")
            );

            $total_kendaraan = mysqli_num_rows(
                mysqli_query($conn, "SELECT DISTINCT kendaraan FROM servis")
            );

            ?>

            <div class="card">

                <h3>📊 Dashboard Bengkel</h3>

                <div style="
        display:flex;
        gap:20px;
        flex-wrap:wrap;
        margin-top:20px;
    ">

                    <!-- Total Servis -->
                    <div style="
            flex:1;
            min-width:220px;
            background:#0077b6;
            color:white;
            padding:25px;
            border-radius:15px;
            text-align:center;
        ">
                        <h1><?php echo $total_servis; ?></h1>
                        <p>Total Servis</p>
                    </div>

                    <!-- Total Pendapatan -->
                    <div style="
            flex:1;
            min-width:220px;
            background:#00b4d8;
            color:white;
            padding:25px;
            border-radius:15px;
            text-align:center;
        ">
                        <h1>
                            Rp <?php echo number_format($total_pendapatan['total']); ?>
                        </h1>
                        <p>Total Pendapatan</p>
                    </div>

                    <!-- Total Pelanggan -->
                    <div style="
            flex:1;
            min-width:220px;
            background:#38b000;
            color:white;
            padding:25px;
            border-radius:15px;
            text-align:center;
        ">
                        <h1><?php echo $total_pelanggan; ?></h1>
                        <p>Total Pelanggan</p>
                    </div>

                    <!-- Total Kendaraan -->
                    <div style="
            flex:1;
            min-width:220px;
            background:#ff8800;
            color:white;
            padding:25px;
            border-radius:15px;
            text-align:center;
        ">
                        <h1><?php echo $total_kendaraan; ?></h1>
                        <p>Jenis Kendaraan</p>
                    </div>

                </div>

            </div>

            <div id="form">

                <h3>📋 Form Data Servis</h3>

            </div>

            <?php

            /* ================= TAMBAH DATA ================= */

            if (isset($_POST['tambah'])) {

                $nama = $_POST['nama'];
                $kendaraan = $_POST['kendaraan'];
                $keluhan = $_POST['keluhan'];
                $biaya = $_POST['biaya'];

                mysqli_query($conn, "
INSERT INTO servis
(nama_pelanggan,kendaraan,keluhan,biaya,status,status_pembayaran)

VALUES
(
'$nama',
'$kendaraan',
'$keluhan',
'$biaya',
'Booking',
'Belum Bayar'
)
");

                echo "<script>
window.location='index.php';
</script>";
                exit;
            }

            /* ================= PROSES SERVIS ================= */

            if (isset($_GET['proses'])) {

                $id = $_GET['proses'];

                mysqli_query($conn, "
    UPDATE servis
    SET status='Proses'
    WHERE id='$id'
    ");

                echo "<script>
    alert('Servis sedang dikerjakan');
    window.location='index.php';
    </script>";
                exit;
            }

            /* ================= SELESAI SERVIS ================= */

            if (isset($_GET['selesai'])) {

                $id = $_GET['selesai'];

                mysqli_query($conn, "
    UPDATE servis
    SET status='Selesai'
    WHERE id='$id'
    ");

                echo "<script>
    alert('Servis berhasil diselesaikan');
    window.location='index.php';
    </script>";
                exit;
            }


            /* ================= HAPUS DATA ================= */

            if (isset($_GET['hapus'])) {

                $id = $_GET['hapus'];

                mysqli_query($conn, "DELETE FROM servis WHERE id='$id'");

                echo "<script>
window.location='index.php';
</script>";
                exit;
            }

            /* ================= UPDATE DATA ================= */

            if (isset($_POST['update'])) {

                $id = $_POST['id'];
                $nama = $_POST['nama'];
                $kendaraan = $_POST['kendaraan'];
                $keluhan = $_POST['keluhan'];
                $biaya = $_POST['biaya'];

                mysqli_query($conn, "UPDATE servis SET
        nama_pelanggan='$nama',
        kendaraan='$kendaraan',
        keluhan='$keluhan',
        biaya='$biaya'
        WHERE id='$id'
    ");

                echo "<script>
window.location='index.php';
</script>";
                exit;
            }

            /* ================= FORM EDIT ================= */

            if (isset($_GET['edit'])) {

                $id = $_GET['edit'];

                $edit = mysqli_query($conn, "SELECT * FROM servis WHERE id='$id'");

                $e = mysqli_fetch_array($edit);

            ?>

                <form method="POST">

                    <input type="hidden" name="id"
                        value="<?php echo $e['id']; ?>">

                    <input type="text" name="nama"
                        value="<?php echo $e['nama_pelanggan']; ?>"
                        placeholder="Nama Pelanggan" required>

                    <input type="text" name="kendaraan"
                        value="<?php echo $e['kendaraan']; ?>"
                        placeholder="Jenis Kendaraan" required>

                    <textarea name="keluhan"
                        placeholder="Keluhan" required><?php echo $e['keluhan']; ?></textarea>

                    <input type="number" name="biaya"
                        value="<?php echo $e['biaya']; ?>"
                        placeholder="Biaya Servis" required>

                    <button class="btn" type="submit" name="update">
                        UPDATE DATA
                    </button>

                </form>

            <?php } else { ?>

                <form method="POST">

                    <input type="text" name="nama"
                        placeholder="Nama Pelanggan" required>

                    <input type="text" name="kendaraan"
                        placeholder="Jenis Kendaraan" required>

                    <textarea name="keluhan"
                        placeholder="Keluhan Kendaraan" required></textarea>

                    <input type="number" name="biaya"
                        placeholder="Biaya Servis" required>

                    <button class="btn" type="submit" name="tambah">
                        TAMBAH DATA
                    </button>

                </form>

            <?php } ?>

        </div>

        <div class="card">

            <div id="data">

                <h3>📑 Data Servis Kendaraan</h3>

            </div>

            <table>

                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Kendaraan</th>
                    <th>Jadwal/Keluhan</th>
                    <th>Biaya</th>
                    <th>Status</th>
                    <th>Pembayaran</th>
                    <th>Aksi</th>
                </tr>

                <?php

                $no = 1;

                $data = mysqli_query($conn, "SELECT * FROM servis");

                while ($d = mysqli_fetch_array($data)) {

                ?>

                    <tr>

                        <td><?php echo $no++; ?></td>

                        <td><?php echo $d['nama_pelanggan']; ?></td>

                        <td><?php echo $d['kendaraan']; ?></td>

                        <td><?php echo $d['keluhan']; ?></td>

                        <td>
                            Rp <?php echo number_format($d['biaya']); ?>
                        </td>

                        <td>

                            <?php

                            if ($d['status'] == "Booking") {
                                echo "<span class='booking'>Booking</span>";
                            } elseif ($d['status'] == "Proses") {
                                echo "<span class='proses-status'>Proses</span>";
                            } elseif ($d['status'] == "Selesai") {
                                echo "<span class='selesai-status'>Selesai</span>";
                            }

                            ?>

                        </td>

                        <td>

                            <?php
                            echo $d['status_pembayaran'];

                            if (
                                $d['status'] == "Selesai" &&
                                $d['status_pembayaran'] == "Belum Bayar"
                            ) {
                            ?>

                                <br><br>

                                <a class="proses"
                                    href="pembayaran.php?id=<?= $d['id']; ?>">
                                    Bayar
                                </a>

                            <?php } ?>

                        </td>

                        <td>

                            <a class="edit"
                                href="index.php?edit=<?php echo $d['id']; ?>">
                                Edit
                            </a>

                            <a class="hapus"
                                href="index.php?hapus=<?php echo $d['id']; ?>">
                                Hapus
                            </a>

                            <?php
                            if ($d['status'] == "Booking") {
                            ?>

                                <a class="proses"
                                    href="index.php?proses=<?= $d['id']; ?>">
                                    Proses
                                </a>

                            <?php } ?>

                            <?php
                            if ($d['status'] == "Proses") {
                            ?>

                                <a class="selesai"
                                    href="index.php?selesai=<?= $d['id']; ?>">
                                    Selesai
                                </a>

                            <?php } ?>

                            <?php
                            if ($d['status_pembayaran'] == "Menunggu Verifikasi") {
                            ?>
                                <a class="verifikasi"
                                    href="verifikasi.php?id=<?php echo $d['id']; ?>">
                                    Verifikasi
                                </a>
                            <?php } ?>

                        </td>

                    <?php } ?>

            </table>

        </div>

    </div>

    <div class="container" id="laporan">

        <h3>📊 Laporan Hari Ini</h3>

        <div class="cards">

            <div class="box">
                <h2><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM servis WHERE status='Booking'")); ?></h2>
                <p>Booking</p>
            </div>

            <div class="box">
                <h2><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM servis WHERE status='Proses'")); ?></h2>
                <p>Proses</p>
            </div>

            <div class="box">
                <h2><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM servis WHERE status='Selesai'")); ?></h2>
                <p>Selesai</p>
            </div>

        </div>

    </div>

</body>

</html>