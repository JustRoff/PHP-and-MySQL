<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location:login.php?Logindulu");
    exit;
}

$sql = "SELECT * from barang";
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
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

 <?php       while($barang=mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?=$barang['id_barang']?></td>
        <td><?=$barang['nama']?></td>
        <td><?=$barang['stok']?></td>
        <td>
            <a href="hapus.php?id_barang=<?=$barang['id_barang']?>">Hapus</a> |
            <a href="edit.php?id_barang=<?=$barang['id_barang']?>">Edit</a> 
        </td>
    </tr>
    <?php } ?>
    </table>

    <a href="tambah.php"><button>Tambah</button></a>
    <a href="logout.php"><button>logout</button></a>
</body>
</html>

