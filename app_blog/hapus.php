<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location:login.php?Logindulu");
    exit;
}

$id = $_GET['id'];

$sql = "Delete from blog where id='$id' ";
$query = mysqli_query($koneksi,$sql);

if ($query) {
    header("location:table.php?hapus=S");
    exit;
} else {
    header("location:table.php?hapus=G");
    exit;
}
?>