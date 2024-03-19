<?php
include ('conexion.php');

function insertar($db, $data){
    $nombre = strtoupper($data["nombre"]);
    $apellidos = strtoupper($data["apellidos"]);
    $contrasena = password_hash($data["contrasena"], PASSWORD_DEFAULT);
    $correo = strtoupper($data["correo"]);
    $telefono = $data["telefono"];
    $id_perfil = $data["id_perfil"];
    $cargo = strtoupper($data["cargo"]);
    $estado = $data["estado"];
    $sql = "INSERT INTO usuario (nombre, apellidos, contrasena, correo, telefono, id_perfil, cargo,  estado) VALUES ('$nombre','$apellidos', '$contrasena', '$correo', '$telefono', '$id_perfil','$cargo', '$estado')";
    return $db->query($sql);


};
function editar(){

};
function eliminar(){

};
function obtenerUsuarioCorreo($db, $correo){
    $sql = "SELECT * FROM usuario WHERE correo = '$correo'";
    $result = $db->query($sql);
    $usuario = [];
    if($result) {
       while($row = $result->fetch_assoc()) {
        $usuario[] = $row; 
       }
       return $usuario;
    } else {
        echo json_encode(["estado"=>"El usuario no existe."]);
    }
};
