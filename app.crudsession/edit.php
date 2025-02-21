<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location:login.php?Logindulu");
    exit;
}

$id_barang = $_GET['id_barang'];

$sql = "Select * from barang where id_barang='$id_barang' ";
$query = mysqli_query($koneksi,$sql);

while($barang=mysqli_fetch_assoc($query)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="proses_tambah.php" method="get">
        <input type="hidden" name="id_barang" value="<?=$barang['id_barang']?>">

        <label for="">Nama</label>
        <input type="text" name="nama" id="" value="<?=$barang['nama']?>"> <br>

        <label for="">stok</label>
        <input type="number" name="stok" id="" value="<?=$barang['stok']?>"> <br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>

<?php } ?>