<form method ="post">
    masukan angka : <input type = "namber" name="angka"><br>
    <input type="submit" value="kirim">
</from>

<?php
if (isset($_post['angka'])){
    $data = $_post['angka'];
    for($i = 1; $i <= $data; $i++){
        echo "angka $i <r>";
    }
}
?>

//looping while dan do while

echo "<br> ini perulangan while"

<?php
if (isset($_POST['angka'])){
    $data = $_POST['angka'];
    $i = 1;
    while ($i <= $data) {
        echo "angka $i <br>";
        $i++;
    }
}

 echo "<br>";

    // DO WHILE 
    $j = 1;
    do {
        echo "Do While: angka $j <br>";
        $j++;
    } while ($j <= $data);

    echo "<h3>Contoh Perulangan Do-While:</h3>";
$i = 1;
do {
    echo "Nilai do-while: $i <br>";
    $i++;
} while ($i <= 5);


?>