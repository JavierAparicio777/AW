<!DOCTYPE html>
<html>
<head>
    <title>Registro - UserManager</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpMtvA4EP-crnVDl_gZTN3Gvvtp-n6lknKA&s">
    <meta charset="UTF-8">
</head>
<body>
    <div class="form-container">
        <h1>Crear Cuenta</h1>
        <form action="procesar_registro.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="edad" placeholder="Edad" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            
            <button class="boton" type="submit">Registrarse</button>
        </form>
        <p style="text-align:center"><a href="login.php">Ir al Login</a></p>
    </div>
</body>
</html>
