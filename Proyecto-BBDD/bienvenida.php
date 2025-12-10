<?php
session_start();
if (!isset($_SESSION['usuario'])) {
header("Location: login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bienvenida</title>
<link rel="stylesheet" href="estilos2.css">
<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpMtvA4EP-crnVDl_gZTN3Gvvtp-n6lknKA&s">
</head>
<body>
<h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> 🎉</h1>
<p>Has iniciado sesión correctamente.</p>
<p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>