<?php
include "conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Verificar si el usuario ya existe
$stmt = $conn->prepare("SELECT id FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "<h1>El usuario ya está en uso</h1>";
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
    exit;
}

$stmt->close();

// Registrar usuario nuevo
$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $hash);

if ($stmt->execute()) {
    echo "<h1>Usuario registrado correctamente 🎉</h1>";
    echo "<p><a href='login.php'>Iniciar sesión</a></p>";
} else {
    echo "<h1>Error inesperado ❌</h1>";
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos2.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpMtvA4EP-crnVDl_gZTN3Gvvtp-n6lknKA&s">
</head>
<body>
    <?= $mensaje ?>
</body>
</html>