<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "latihan_auth";
$charset = "utf8mb4";

$sdn = "mysql:host=$host;dbname=$database;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($sdn, $username, $password, $options);
    //echo "Koneksi ke database berhasil!";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}



?>