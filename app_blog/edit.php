<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location:login.php?Logindulu");
    exit;
}

$id= $_GET['id'];

$sql = "Select * from blog where id='$id' ";
$query = mysqli_query($koneksi,$sql);

while($blog=mysqli_fetch_assoc($query)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Form Edit</h1>

<form action="proses_edit.php" method="get">
    <input type="hidden" name="id" value="<?=$blog['id']?>">

    <label for="">Judul</label>
    <input type="text" name="judul" id="" value="<?=$blog['judul']?>"><br>

    <label for="">Teks</label><br>
    <textarea name="teks" id="" cols="30" rows="10"><?=$blog['teks']?></textarea><br><br>

    <label for="">Tanggal</label>
    <input type="date" name="tanggal" id="" value="<?=$blog['tanggal']?>"> <br><br>

    <input type="submit" value="Simpan">
</form>
</body>
</html>

<?php } ?>