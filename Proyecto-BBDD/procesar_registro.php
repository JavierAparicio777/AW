<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $hash);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos2.css">
</head>
<body>

<?php
if ($stmt->execute()) {
    echo "<h1>Usuario registrado correctamente 🎉</h1>";
    echo "<p><a href='login.php'>Iniciar sesión</a></p>";
    echo '<link rel="stylesheet" href="estilos.css">';
} else {
    echo "<h1>Error: el usuario ya existe</h1>";
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
    echo '<link rel="stylesheet" href="estilos.css">';
}

$stmt->close();
$conn->close();
?>
</body>
</html>
