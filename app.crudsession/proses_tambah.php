<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location:login.php?Logindulu");
    exit;
}

$nama = $_GET['nama'];
$stok = $_GET['stok'];

$sql = "insert into barang(nama,stok) values ('$nama','$stok')";
$query = mysqli_query($koneksi,$sql);

if ($query) {
    header("location:index.php?Tambah=S");
    exit;
} else {
    header("location:index.php?Tambah=G");
    exit;
}
?>