<?php
require_once 'connection_database.php';

try {
    $sql = 'SELECT * FROM `data_materi`';
    $q = $database_connection->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}