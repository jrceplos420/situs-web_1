<!DOCTYPE html>
<html>
<head>
    <title>Bengkel Motor</title>

    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background: #f5f5f5;
        }

        .hero{
            background: #212529;
            color: white;
            padding: 50px;
            border-radius: 20px;
        }

        .card-custom{
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

    </style>
</head>
<body>

<div class="container mt-5">

    <!-- Header -->
    <div class="hero text-center">
        <h1>Bengkel Jaya Motor</h1>
        <p>Servis Motor Cepat dan Terpercaya</p>
    </div>

    <!-- Layanan -->
    <div class="row mt-4">

        <div class="col-md-4">
            <div class="card p-3 card-custom">
                <h3>Ganti Oli</h3>
                <p>Oli berkualitas untuk motor anda.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3 card-custom">
                <h3>Servis Mesin</h3>
                <p>Perbaikan mesin profesional.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3 card-custom">
                <h3>Tambal Ban</h3>
                <p>Layanan cepat dan hemat.</p>
            </div>
        </div>

    </div>

    <!-- Form -->
    <div class="card mt-5 p-4 card-custom">

        <h2>Form Servis Pelanggan</h2>

        <form method="POST">

            <div class="mb-3">
                <label>Nama Pelanggan</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Kendaraan</label>
                <input type="text" name="kendaraan" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Keluhan</label>
                <textarea name="keluhan" class="form-control"></textarea>
            </div>

            <button type="submit" name="simpan" class="btn btn-dark">
                Simpan
            </button>

        </form>

    </div>

    <!-- Tabel Data -->
    <div class="card mt-5 p-4 card-custom">

        <h2>Data Pelanggan</h2>

        <table class="table table-bordered">

            <tr class="table-dark">
                <th>No</th>
                <th>Nama</th>
                <th>Kendaraan</th>
                <th>Keluhan</th>
            </tr>

            <?php
            $no = 1;

            while($d = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['nama']; ?></td>
                <td><?= $d['kendaraan']; ?></td>
                <td><?= $d['keluhan']; ?></td>
            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>