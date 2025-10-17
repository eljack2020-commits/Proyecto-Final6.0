<?php
$host = "localhost";
$usuario = "root"; // Usuario por defecto de XAMPP
$clave = "";       // Si no tienes contraseña en XAMPP
$base_datos = "tecnoweb_db";

// Crear la conexión
$conexion = new mysqli($host, $usuario, $clave, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
