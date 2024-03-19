<?php
session_start();
include ('../models/conexion.php');
include('../models/usuarioModel.php');
$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case 'POST':
        $usuario = obtenerUsuarioCorreo($mysqli, $_POST["correo"]);
        $login =  validarLogin($_POST["contrasena"], $usuario["0"]["contrasena"]);

        if ($login) {
            unset($usuario["contrasena"]);
            $_SESSION = $usuario["0"];
            header("Location: ../views/dashboard.php");
        } else {
            echo "Contraseña incorrecta.";
        }



        break;
    
    default:
        # code...
        break;
}

function validarLogin($contrasenaFront, $contrasenaUsuario) {
    if(password_verify($contrasenaFront, $contrasenaUsuario)) {
        return true;
    } else {
        return false;
    }
}