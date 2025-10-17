<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $email = $conexion->real_escape_string($_POST["email"]);
    $mensaje = $conexion->real_escape_string($_POST["mensaje"]);

    // Validación simple
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        echo "<script>alert('Por favor, completa todos los campos.'); window.history.back();</script>";
        exit;
    }

    // Insertar en la base de datos
    $sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Mensaje enviado correctamente. ¡Gracias por contactarnos!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error al guardar el mensaje: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
}
?>
