<?php 
print_r($_POST);
$con = mysqli_connect("localhost","root","","firstmeet");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];

mysqli_query($con, "INSERT INTO dtam (nim, nama, notelp, alamat) VALUES ('$nim', '$nama', '$notelp', '$alamat') ")
?>