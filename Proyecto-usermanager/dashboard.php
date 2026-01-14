<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpMtvA4EP-crnVDl_gZTN3Gvvtp-n6lknKA&s">
    <meta charset="UTF-8">
</head>
<body>
    <div class="form-container">
        <h1>Hola, <?php echo $_SESSION['nombre']; ?></h1>
        <p>Has entrado como: <strong><?php echo $_SESSION['rol']; ?></strong></p>
        
        <br>
        
        <?php if ($_SESSION['rol'] == 'admin'): ?>
            <a href="listado.php" class="boton">GESTIÓN DE USUARIOS</a>
        <?php else: ?>
            <p>Bienvenido a tu panel de usuario.</p>
        <?php endif; ?>
        
        <br><br>
        <a href="logout.php">Cerrar Sesión</a>
    </div>
</body>
</html>
