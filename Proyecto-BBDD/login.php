<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="estilos2.css">
<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpMtvA4EP-crnVDl_gZTN3Gvvtp-n6lknKA&s">
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        flex-direction: column;
    }
    
    form {
        background: #f5f5f5;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
</style>
</head>
<body>
<h1>Iniciar sesión</h1>
<form action="procesar_login.php" method="post">
<label>Usuario:</label>
<input type="text" name="usuario" required><br><br>
<label>Contraseña:</label>
<input type="password" name="password" required><br><br>
<button type="submit">Entrar</button>
</form>
<p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
</body>
</html>