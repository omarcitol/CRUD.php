<?php

require_once '../models/personas.php'; // Ajusta la ruta según tu estructura
echo json_encode(Persona::actualizarDato($_POST['id']));
