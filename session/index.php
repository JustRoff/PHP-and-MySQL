<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "Selamat Datang " . $_SESSION['username'];
    echo "<br><br>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "Anda Belum Login";
    echo "<br><br>";
    echo "<a href='login.php'>Login</a>";
}
?>
