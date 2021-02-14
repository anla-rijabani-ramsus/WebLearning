
<?php
session_start();
require_once "connection_database.php";

$judul = $_POST["judul"];
$descripsi = $_POST["desc"];
$image = $_POST["image"];

    $q = $database_connection->prepare("INSERT INTO `data_materi` (`id`,`judul`,`deskripsi`,`image`,)
     VALUES (NULL, ?,?,?);");
    $result = $q->execute( [$judul,$descripsi,$image]);

   header("Location: ../HalamanUtama.php");