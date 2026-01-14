<?php
session_start();
require_once "db.php";

if ($_POST) {
    $email = $_POST['email'];
    $password_escrita = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password_escrita, $user['password'])) {
        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['rol'] = $user['rol'];
        header("Location: dashboard.php");
    } else {
        echo "Contraseña incorrecta. <a href='login.php'>Volver</a>";
    }
}
?>
