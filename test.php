<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $dsn = "pgsql:host=localhost;port=5432;dbname=db_postgres";
    $connection = new PDO($dsn, 'postgres', 'postgres', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo 'connection succesfully';
} catch (PDOException $e) {
    echo "Error de conexión a la base de datos: " . $e->getMessage();
}