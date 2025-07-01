<?php
require_once '../models/personas.php'; // Ajusta la ruta según tu estructura
echo json_encode(['success' => Persona::eliminarDato($_POST['id'])]);
