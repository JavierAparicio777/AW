<?php
session_start();
include "conexion.php";
$usuario = $_POST['usuario'];
$password = $_POST['password'];
// Consulta segura
$stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
$stmt->bind_result($id, $hash);
$stmt->fetch();
if (password_verify($password, $hash)) {
$_SESSION['usuario'] = $usuario;
header("Location: bienvenida.php");
exit;
} else {
echo "<h1>Contraseña incorrecta ❌</h1>";
echo "<p><a href='login.php'>Volver a intentar</a></p>";
echo '<link rel="stylesheet" href="estilos.css">';
}
} else {
echo "<h1>Usuario no encontrado ❌</h1>";
echo "<p><a href='registro.php'>Registrarse</a></p>";
echo '<link rel="stylesheet" href="estilos.css">';
}
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos2.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpMtvA4EP-crnVDl_gZTN3Gvvtp-n6lknKA&s">
</head>
</html>