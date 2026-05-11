<?php
//Function tanpa parameter
function hallo() {
    echo "Halo, selamat datang!";
}

hallo(); // memanggil function

 echo "<br>";
//Function dengan paramete
function tampilNama($nama) {
    echo "Halo, nama saya $nama";
}

tampilNama("Sulaiman");

echo "<br>";

//Function dengan return
function tambah(int $a, int $b)
 {
    return $a + $b;
}
echo tambah (10, 20);


echo "<br>";
//Function dengan logika (contoh ganjil/genap)
function cekAngka($angka) {
    if ($angka % 2 == 0) {
        return "Genap";
    } else {
        return "Ganjil";
    }
}

echo cekAngka(7);

?>

<form method="POST">
    <input type ="number" name="a">
    <input type ="number" name="a">
    <input type ="submit" value="kirim">
</form>

<?php

if (isset($POST['a'])&&($POST['b'])) {
    $angka1 = $_POST['a'];
    $angka1 = $_POST['b'];
    echo tambah ($angka1, $angka2);
    echo"<br>"
    echo kali ($angka1, $angka2);
}

?>