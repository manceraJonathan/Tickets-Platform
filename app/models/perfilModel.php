<?php
include ('conexion.php');

// Función para obtener datos de la base de datos
function obtener() {
    global $mysqli; // Hacer referencia a la variable $mysqli definida en conexion.php
    $query = "SELECT * FROM perfil";
    $result = $mysqli->query($query);
    return $result;
}
function obtenerPrioridad() {
    global $mysqli; // Hacer referencia a la variable $mysqli definida en conexion.php
    $query = "SELECT * FROM prioridad";
    $result = $mysqli->query($query);
    return $result;
}

function obtenerRequerimiento() {
    global $mysqli; // Hacer referencia a la variable $mysqli definida en conexion.php
    $queryR = "SELECT * FROM tipo_gestion";
    $result = $mysqli->query($queryR);
    return $result;
}
function obtenerApp() {
    global $mysqli; // Hacer referencia a la variable $mysqli definida en conexion.php
    $queryA = "SELECT * FROM aplicativo";
    $result = $mysqli->query($queryA);
    return $result;
}

