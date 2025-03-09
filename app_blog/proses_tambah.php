<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location:login.php?Logindulu");
    exit;
}

$judul = $_GET['judul'];
$teks = $_GET['teks'];
$tanggal = $_GET['tanggal'];

$sql = "insert into blog(judul,teks,tanggal) values ('$judul','$teks','$tanggal')";
$query = mysqli_query($koneksi,$sql);

if ($query) {
    header("location:table.php?Tambah=S");
    exit;
} else {
    header("location:table.php?Tambah=G");
    exit;
}
?>