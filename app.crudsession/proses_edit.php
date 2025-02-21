<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location:login.php?Logindulu");
    exit;
}
$id_barang = $_GET['id_barang'];
$nama = $_GET['nama'];
$stok = $_GET['stok'];

$sql = "Update barang set nama='$nama',stok='$stok' where id_barang='$id_barang' ";
$query = mysqli_query($koneksi,$sql);

if ($query) {
    header("location:index.php?Edit=S");
    exit;
} else {
    header("location:index.php?edit=G");
    exit;
}
?>