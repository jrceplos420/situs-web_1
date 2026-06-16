<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "bengkel_db");

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

    } elseif (
        $username == "costumer" &&
        $password == "123" &&
        $level == "customer"
    ) {

        $_SESSION['login'] = true;
        $_SESSION['level'] = "costumer";

        header("Location: costumer.php");
        exit;

    } else {

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

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
        }

        body{
            height: 100vh;
            background: linear-gradient(135deg, #00b4d8, #0077b6);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box{
            width: 380px;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .login-box h2{
            text-align: center;
            color: #0077b6;
            margin-bottom: 25px;
        }

        input{
            width: 100%;
            padding: 14px;
            margin-top: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
        }

        button{
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

        button:hover{
            background: #023e8a;
        }

        .error{
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

    <?php if(isset($error)){ ?>
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

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
        }

        body{
            background: #f1f5f9;
        }

        .navbar{
            background: linear-gradient(135deg, #0077b6, #00b4d8);
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .navbar h2{
            font-size: 28px;
        }

        .logout{
            background: red;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 10px;
            transition: 0.3s;
        }

        .logout:hover{
            background: darkred;
        }

        .container{
            width: 95%;
            margin: 30px auto;
        }

        .card{
            background: white;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .card h3{
            color: #0077b6;
            margin-bottom: 20px;
        }

        form input,
        form textarea{
            width: 100%;
            padding: 14px;
            margin-top: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
        }

        textarea{
            resize: none;
            height: 100px;
        }

        .btn{
            background: #0077b6;
            color: white;
            border: none;
            padding: 14px;
            width: 100%;
            margin-top: 20px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .btn:hover{
            background: #023e8a;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 15px;
        }

        table th{
            background: #0077b6;
            color: white;
            padding: 15px;
        }

        table td{
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        table tr:hover{
            background: #f1faff;
        }

        .edit{
            background: orange;
            color: white;
            padding: 8px 14px;
            border-radius: 8px;
            text-decoration: none;
        }

        .hapus{
            background: red;
            color: white;
            padding: 8px 14px;
            border-radius: 8px;
            text-decoration: none;
        }

        .edit:hover{
            background: darkorange;
        }

        .hapus:hover{
            background: darkred;
        }

        .title{
            margin-bottom: 20px;
            color: #023e8a;
        }

    </style>

</head>
<body>

<div class="navbar">

    <h2>🔧 Operator Bengkel</h2>

    <a class="logout" href="index.php?logout=true">
        Logout
    </a>

</div>

<div class="container">

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

<h3>📋 Form Data Servis</h3>

<?php

/* ================= TAMBAH DATA ================= */

if (isset($_POST['tambah'])) {

    $nama = $_POST['nama'];
    $kendaraan = $_POST['kendaraan'];
    $keluhan = $_POST['keluhan'];
    $biaya = $_POST['biaya'];

    mysqli_query($conn, "INSERT INTO servis
VALUES('', '$nama', '$kendaraan', '$keluhan', '$biaya')");

echo "<script>
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

if(isset($_GET['edit'])){

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

<h3 class="title">📑 Data Servis Kendaraan</h3>

<table>

<tr>
    <th>No</th>
    <th>Nama Pelanggan</th>
    <th>Kendaraan</th>
    <th>Keluhan</th>
    <th>Biaya</th>
    <th>Aksi</th>
</tr>

<?php

$no = 1;

$data = mysqli_query($conn, "SELECT * FROM servis");

while($d = mysqli_fetch_array($data)){

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

        <a class="edit"
        href="index.php?edit=<?php echo $d['id']; ?>">
            Edit
        </a>

        <a class="hapus"
        href="index.php?hapus=<?php echo $d['id']; ?>">
            Hapus
        </a>

    </td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>
</html>