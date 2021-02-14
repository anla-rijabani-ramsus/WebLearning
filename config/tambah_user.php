<?php
require_once "connection_database.php";

$nama_lengkap = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["konfirmasiulangpassword"];

if ($password != $confirm_password) {
    echo "<script type='text/javascript'>
    alert('Konfirmasi password tidak sesuai');
    window.location.replace('../Register.php');
    </script>";
} else {
    $q = $database_connection->prepare("INSERT INTO `data_pendaftar` (`id`,`nama`, `email`,
  `password`) VALUES (NULL, ?,?,SHA1(?));");
    $result = $q->execute([$nama_lengkap, $email, $password]);
    if ($result) {
        header("Location: ../BerhasilRegis.php");
        return;
    } else {
        echo "<script type='text/javascript'>
        alert('Email telah di gunakan');
        window.location.replace('../Register.php');
        </script>";
    }
}
