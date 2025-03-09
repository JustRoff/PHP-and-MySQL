<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("Location:login.php?Logindulu");
    exit;
}

$id= $_GET['id'];

$sql = "Select * from blog where id='5' ";
$query = mysqli_query($koneksi,$sql);

while($blog=mysqli_fetch_assoc($query)) {
?>

<?php
} ?>