<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location:login.php?Logindulu");
    exit;
}

$sql = "SELECT * from blog";
$query =mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 35px;
        }

        h3 {
            color: blue;
        }

        span {
            color: gray;
        }
    </style>
</head>
<body>
<h1>Blog Saya</h1>
<hr>

 <?php       while($blog=mysqli_fetch_assoc($query)) { ?>
        <h3><?=$blog['judul']?></h3>
        <span><?=$blog['tanggal']?></span>
        <p><?=$blog['teks']?></p>
    <?php } ?>
    <a href="DrakevsKdot.php">Read More</a>
</html>

