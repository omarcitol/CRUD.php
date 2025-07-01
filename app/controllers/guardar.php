<?php
require_once "../models/personas.php";

$arrayName = array(
    'cedula' => $_POST['cedula'] ?? '',
    'nombre' => $_POST['nombre'] ?? '',
    'apellido' => $_POST['apellido'] ?? '',
    'email' => $_POST['email'] ?? '',
    'fecha_nacimiento' => !empty($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : null,
    'profesion' => $_POST['profesion'] ?? '',
);

echo json_encode(Persona::guardarDato($arrayName));
