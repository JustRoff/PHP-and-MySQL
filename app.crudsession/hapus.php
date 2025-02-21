<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location:login.php?Logindulu");
    exit;
}

$id_barang = $_GET['id_barang'];

$sql = "Delete from barang where id_barang='$id_barang' ";
$query = mysqli_query($koneksi,$sql);

if ($query) {
    header("location:index.php?hapus=S");
    exit;
} else {
    header("location:index.php?hapus=G");
    exit;
}
?>