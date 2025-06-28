<?php
require_once '../models/personas.php';
header('Content-Type: application/json');
echo json_encode(Persona::mostrarDatos());
