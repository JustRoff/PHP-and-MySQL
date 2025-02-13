<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "<a href='logout.php'>logout</a>";
} else {
    echo "ANDA BELUM LOGIN";
    echo "<br><br>";
    echo "<a href='login.php'>Anda Belum Login</a>";
}

?>

<img src="admin udah datang.jpg" alt="Deskripsi Gambar" weight = 100% lenght = 100%>;