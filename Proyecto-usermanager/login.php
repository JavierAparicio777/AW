<!DOCTYPE html>
<html>
<head>
    <title>Login - UserManager</title>
    <link rel="stylesheet" href="styles.css">
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