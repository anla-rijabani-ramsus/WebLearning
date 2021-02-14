<?php
require_once "connection_database.php";

$email = $_POST["email"];
$password = $_POST["password"];



try {
    $result = $database_connection->prepare("SELECT * FROM `data_pendaftar` WHERE `email` = ? ;");
    $result->execute([$email]);

    $count = $result->rowCount();

    if ($count == 1) {
        $data = $result->fetch();
        if (sha1($password) == $data["password"]) {
          
            header("Location: ../HalamanUtama.php");
            return;
        } else {
            echo "<script type='text/javascript'>
        alert('Password yang anda masukan tidak benar');
        window.location.replace('../Login.php');
        </script>";
        }
    } else {
        echo "<script type='text/javascript'>
        alert('Email tidak terdaftar');
        window.location.replace('../Login.php');
        </script>";
    }
} catch (PDOException $e) {
    $message =  $e->getMessage();
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.replace('../Login.php');
    </script>";
}
