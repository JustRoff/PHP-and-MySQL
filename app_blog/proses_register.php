<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "insert into users(username,password) values ('$username',md5('$password') )";
$query = mysqli_query($koneksi,$sql);

if ($query) {
    header("location:login.php?Tambah=S");
    exit;
} else {
    header("location:login.php?Tambah=G");
    exit;
}
?>