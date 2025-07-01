<?php

class Connection
{
    public $host = 'localhost';
    public $dbname = 'db_postgres';
    public $port = "5432";
    public $user = 'admin';
    public $password = 'admin';
    public $connect;

    public static function getConnection()
    {
        try {
            $dsn = "pgsql:host=localhost;port=5432;dbname=db_postgres";
            $connection = new PDO($dsn, 'admin', 'admin', [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
            //echo 'connection succesfully';
            return $connection;
        } catch (PDOException $e) {
            // echo "Error de conexión a la base de datos: " . $e->getMessage();
            return null;
        }
    }
}
Connection::getConnection();
