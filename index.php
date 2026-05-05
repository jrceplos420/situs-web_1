<?php
//materi variabel dan tipe data
$nama = "sulaiman";
$umur = 20;
$tinggi = 164.8;
$hobi = ["membaca", "main game"];

echo "nama saya $nama, umur saya $umur, tinggi saya $tinggi, hobi saya $hobi[0],  $hobi[1] ";


echo "<br><br>==================================================<br><br>";
//operator dan kondisi (if else)

$nilai1 = 10;
$nilai2 = 20;
$hasil = $nilai1 + $nilai2;

echo "hasil dari $nilai1 + $nilai2 = $hasil" ;

echo "<br><br>==================================================<br><br>";
//operator dan kondisi (if else)

$nilai1 = 10;
$nilai2 = 20;
$hasil = $nilai1 - $nilai2;

echo "hasil dari $nilai1 - $nilai2 = $hasil" ;

echo "<br><br>==================================================<br><br>";
//operator dan kondisi (if else)

$nilai1 = 10;
$nilai2 = 20;
$hasil = $nilai1 * $nilai2;

echo "hasil dari $nilai1 * $nilai2 = $hasil" ;

echo "<br><br>==================================================<br><br>";
//operator dan kondisi (if else)

$nilai1 = 10;
$nilai2 = 20;
$hasil = $nilai1 / $nilai2;

echo "hasil dari $nilai1 / $nilai2 = $hasil" ;

echo "<br><br>==================================================<br><br>";

//pengkondisian

$nilai = 70;
if($nilai >=90){
    echo "nilai anda A";
}
else if($nilai >=80){
    echo "nilai anda B";
}
else if($nilai >=70){
    echo "nilai anda C";
}
else{
    echo "nilai anda D";
}

echo "<br><br>==================================================<br><br>";

$nilai = 2;

if($nilai =2){
    echo "NILAI ANDA GENAP";
}
else if($nilai >17){
    echo "NILAI ANDA GANJIL";
}

?>