<?php 
$host = "localhost";
$port = "3306";
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "SUKSES TERKONEKSI KE DATABASE MYSQL" . PHP_EOL;

    // menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "GAGAL TERKONEKSI KE DATABASE MYSQL : " . $exception->getMessage() . PHP_EOL;
}