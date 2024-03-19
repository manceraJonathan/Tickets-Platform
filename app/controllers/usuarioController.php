<?php
session_start();
include ('../models/conexion.php');
include('../models/usuarioModel.php');
$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case 'GET':
        # code...
        break;
    case 'POST':
        $data = [
            "nombre" => $_POST["nombre"],
            "apellidos" => $_POST["apellidos"],
            "correo" => $_POST["correo"],
            "contrasena" => $_POST["contrasena"],
            "telefono" => $_POST["telefono"],
            "id_perfil" => $_POST["perfil"],
            "cargo" => $_POST["cargo"],
            "estado" => $_POST["estado"]
        ];
       if(insertar($mysqli, $data)){
            echo json_encode(["estado" => 1]);
       } else {
        echo json_encode(["estado" => 0]);
       }
        break;
    
    default:
        # code...
        break;
}
