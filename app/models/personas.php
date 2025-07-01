<?php
require_once __DIR__ . '/../config/connections.php';

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
            return ['error' => $th->getMessage()];
        }
    }

    public static function obtenerDatoId($id)
    {
        try {
            $sql = "SELECT * FROM persona WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $th) {
            return ['error' => $th->getMessage()];
        }
    }

    public static function guardarDato($data)
    {
        try {
            $sql = "INSERT INTO persona (cedula, nombre, apellido, email, fecha_nacimiento, profesion)
                    VALUES (:cedula, :nombre, :apellido, :email, :fecha_nacimiento, :profesion)";
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
            return ['error' => $th->getMessage()];
        }
    }

    public static function actualizarDato($data)
    {
        try {
            $sql = "UPDATE persona SET cedula = :cedula, nombre = :nombre, apellido = :apellido, email = :email, fecha_nacimiento = :fecha_nacimiento, profesion = :profesion WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':cedula', $data['cedula']);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':apellido', $data['apellido']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':fecha_nacimiento', $data['fecha_nacimiento']);
            $stmt->bindParam(':profesion', $data['profesion']);
            $stmt->bindParam(':id', $data['id']);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            return ['error' => $th->getMessage()];
        }
    }

    public static function eliminarDato($id)
    {
        try {
            $sql = "DELETE FROM persona WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            return ['error' => $th->getMessage()];
        }
    }
}
