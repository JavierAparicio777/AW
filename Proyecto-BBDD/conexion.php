<?php
$host = "localhost";
$user = "javi";
$pass = "vegeta777";
$db = "proyecto_login";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
die("Error de conexión: " . $conn->connect_error);
}
?>