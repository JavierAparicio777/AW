<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

// --- AQUÍ AÑADES EL NUEVO CÓDIGO ---
// 1. Verificar si usuario ya existe
$check_sql = "SELECT usuario FROM usuarios WHERE usuario = ?";
$check_stmt = $conn->prepare($check_sql);
$check_stmt->bind_param("s", $usuario);
$check_stmt->execute();
$check_stmt->store_result();

// 2. Si existe, mostrar error y terminar
if ($check_stmt->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error - Usuario Existente</title>
        <link rel="stylesheet" href="estilos2.css">
    </head>
    <body>
        <h1>Error: el usuario ya existe</h1>
        <p><a href='registro.php'>Volver al registro</a></p>
    </body>
    </html>
    <?php
    $check_stmt->close();
    $conn->close();
    exit();
}

$check_stmt->close();
// --- FIN DEL NUEVO CÓDIGO ---

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
