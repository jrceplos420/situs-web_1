<?php
$conn = mysqli_connect("localhost", "root", "", "bengkel_db");

if (!$conn) {
    die("Koneksi gagal");
}

/* TAMBAH DATA */
if (isset($_POST['tambah'])) {

    $nama = $_POST['nama'];
    $kendaraan = $_POST['kendaraan'];
    $keluhan = $_POST['keluhan'];
    $biaya = $_POST['biaya'];

    mysqli_query($conn, "INSERT INTO servis 
    VALUES('', '$nama', '$kendaraan', '$keluhan', '$biaya')");

    header("Location: index.php");
}

/* HAPUS DATA */
if (isset($_GET['hapus'])) {

    $id = $_GET['hapus'];

    mysqli_query($conn, "DELETE FROM servis WHERE id='$id'");

    header("Location: index.php");
}

/* EDIT DATA */
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

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Bengkel</title>

    <style>

        body{
            font-family: Arial;
            background: #eaf6ff;
            padding: 20px;
        }

        h1{
            text-align: center;
            color: #0077b6;
        }

        .container{
            width: 90%;
            margin: auto;
        }

        form{
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        input, textarea{
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }

        button{
            padding: 10px;
            margin-top: 10px;
            background: #0077b6;
            color: white;
            border: none;
            width: 100%;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td{
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th{
            background: #00b4d8;
            color: white;
        }

        a{
            text-decoration: none;
            padding: 8px 12px;
            color: white;
            border-radius: 5px;
        }

        .edit{
            background: orange;
        }

        .hapus{
            background: red;
        }

    </style>

</head>
<body>

<div class="container">

<h1>CRUD Data Servis Bengkel</h1>

<?php

/* AMBIL DATA EDIT */
if(isset($_GET['edit'])){

    $id = $_GET['edit'];

    $edit = mysqli_query($conn, "SELECT * FROM servis WHERE id='$id'");

    $e = mysqli_fetch_array($edit);

?>

<form method="POST">

    <input type="hidden" name="id" value="<?php echo $e['id']; ?>">

    <input type="text" name="nama"
    value="<?php echo $e['nama_pelanggan']; ?>"
    placeholder="Nama Pelanggan" required>

    <input type="text" name="kendaraan"
    value="<?php echo $e['kendaraan']; ?>"
    placeholder="Kendaraan" required>

    <textarea name="keluhan" placeholder="Keluhan" required><?php echo $e['keluhan']; ?></textarea>

    <input type="number" name="biaya"
    value="<?php echo $e['biaya']; ?>"
    placeholder="Biaya" required>

    <button type="submit" name="update">
        Update Data
    </button>

</form>

<?php } else { ?>

<form method="POST">

    <input type="text" name="nama"
    placeholder="Nama Pelanggan" required>

    <input type="text" name="kendaraan"
    placeholder="Kendaraan" required>

    <textarea name="keluhan"
    placeholder="Keluhan" required></textarea>

    <input type="number" name="biaya"
    placeholder="Biaya" required>

    <button type="submit" name="tambah">
        Tambah Data
    </button>

</form>

<?php } ?>

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

    <td>Rp <?php echo number_format($d['biaya']); ?></td>

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

</body>
</html>