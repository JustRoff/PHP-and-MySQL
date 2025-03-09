<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "Select * from users where username='$username' and password = md5('$password') ";
$query = mysqli_query($koneksi,$sql);

if (mysqli_num_rows($query) == 1) {
    $_SESSION['username'] = $username;
    header("Location:table.php?Login=S");
    exit;
} else {
    header("Location:login.php?Login=G");
    exit;
}
?>