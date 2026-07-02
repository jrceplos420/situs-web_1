<?php

$conn=mysqli_connect("localhost","root","","bengkell_db");

$id=$_GET['id'];

mysqli_query($conn,"
UPDATE servis

SET

status_pembayaran='Lunas'

WHERE id='$id'
");

header("Location:index.php");

?>