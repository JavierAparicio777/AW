<!DOCTYPE html>
<html>
<head>
    <title>Login - UserManager</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpMtvA4EP-crnVDl_gZTN3Gvvtp-n6lknKA&s">
    <meta charset="UTF-8">
</head>
<body>
    <div class="form-container">
        <h1>Iniciar Sesión</h1>
        <form action="procesar_login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button class="boton" type="submit">Entrar</button>
        </form>
        <p style="text-align:center"><a href="registro.php">Registrarse</a></p>
    </div>
</body>
</html>
