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
</head>
<body>
    <h1>Table Blog</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Teks</th>
            <th>tanggal</th>
            <th>Aksi</th>
        </tr>

 <?php       while($blog=mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?=$blog['id']?></td>
        <td><?=$blog['judul']?></td>
        <td><?=$blog['teks']?></td>
        <td><?=$blog['tanggal']?></td>
        <td>
            <a href="hapus.php?id=<?=$blog['id']?>">Hapus</a> |
            <a href="edit.php?id=<?=$blog['id']?>">Edit</a> 
        </td>
    </tr>
    <?php } ?>
    </table> <br>

    <a href="tambah.php"><button>Tambah</button></a>
    <a href="logout.php"><button>logout</button></a>
</body>
</html>

