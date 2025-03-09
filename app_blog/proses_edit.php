<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location:login.php?Logindulu");
    exit;
}
$id = $_GET['id'];
$judul = $_GET['judul'];
$teks = $_GET['teks'];
$tanggal = $_GET['tanggal'];

$sql = "Update blog set judul='$judul',teks='$teks',tanggal='$tanggal' where id='$id' ";
$query = mysqli_query($koneksi,$sql);

if ($query) {
    header("location:table.php?Edit=S");
    exit;
} else {
    header("location:table.php?edit=G");
    exit;
}
?>