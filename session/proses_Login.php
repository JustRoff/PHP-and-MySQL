<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == '123456') {
    $_SESSION['username'] = "Administrator";
    header("Location:index.php?login=sukses");
    exit;
} elseif ($username == 'member' && $password =='123' ) {
    $_SESSION ['username'] = "MEMBER KONTOL";
    header("Location:index1.php?Login=sukses");
    exit; 
}
    else {
    header("Location:login.php?login=gagal");
    exit;
}
?>