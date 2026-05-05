<form action=""method="post">
    username : <input type="text" name="username"><br>
    passsword : <input type="password" name="password"><br>
    nama : <input type="text" name="nama"><br>
    email : <input type="text" name="email"><br>
    <input type="submit" value="kirim data" name ="kirim"><br>
</form>

<?php
include 'koneksi.php';
if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama= $_POST['nama'];
    $email= $_POST['email'];

    $query = "INSERT INTO user (username, password, nama, email) values('$username', '$password', '$nama', '$email')";
    if (mysqli_query($koneksi, $query)) {
        echo"data berhasil ditambahkan";
    } else {
        echo" data gagal ditambahkan";
    }
}
?>

<table border = "1" cellpadding="10" cellspacing= "0">
    <tr>
        <th>username</th>
        <th>password</th>
        <th>nama</th>
        <th>email</th>
        <th>aksi</th>
    </tr>

<?php
$query = "SELECT * FROM user";
$result = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td><a href='materi4.php?id=" . $row['id'] . " '>edit</a> | <a href= 'materi4.php?id=" . $row['id'] . "'>hapus</a> </td>";
    echo "<tr>";
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM user WHERE id = $id";
    if (mysqli_query($koneksi, $query)) {
        echo "data berhasil disimpan";
    } else {
        echo "data gagal dihapus";
    }
}

?>
</table>