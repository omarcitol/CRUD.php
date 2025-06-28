<?php
require_once "./app/config/connections.php";

class Persona extends Connection
{

    public static function mostrarDatos()
    {
        try {
            $sql = "SELECT * FROM persona";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function obtenerDatoId($id)
    {
        try {
            $sql = "SELECT * FROM persona WHERE id * :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public static function guardarDato($data)
    {

        try {
            $sql = "INSERT * FROM persona (:cedula, :nombre, :apellido, :email, :fecha_nacimiento, :profesion)";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':cedula', $data['cedula']);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':apellido', $data['apellido']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':fecha_nacimiento', $data['fecha_nacimiento']);
            $stmt->bindParam(':profesion', $data['profesion']);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public static function actualizarDato($data)
    {

        try {
            $sql = "UPDATE * FROM persona SET cedula = :cedula, nombre = :nombre, apellido = :apellido, email = :email, fecha_nacimiento = :fecha_nacimiento, profesion = :profesion WHERE id = id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':cedula', $data['cedula']);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':apellido', $data['apellido']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':fecha_nacimiento', $data['fecha_nacimiento']);
            $stmt->bindParam(':profesion', $data['profesion']);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public static function EliminarDato($id)
    {
        try {
            $sql = "DELETE * FROM persona WHERE id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam('id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
}
