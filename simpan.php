<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Credentials:true");
header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE,OPTIONS");
header("Access-Control-Max-Age:604800");
header("Access-Control-Request-Headers: x-requested-with");
header("Access-Control-Allow-Headers: x-requested-with, x-requested-by");
include("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$tlp = $_POST['tlp'];

$simpan = mysqli_query($koneksi, "INSERT INTO anggota values ('$id','$nama', '$kelamin', '$alamat', '$email', '$tlp')") 
or die(mysqli_error()); 