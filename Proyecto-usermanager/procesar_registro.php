<?php
require_once "db.php";
if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, edad, password, rol) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nombre, $email, $edad, $hash, $rol]);

    header("Location: login.php");
}
?>