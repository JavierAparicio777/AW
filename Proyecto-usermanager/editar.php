<?php
require_once "db.php";

if (isset($_GET['borrar_id'])) {
    $id_borrar = $_GET['borrar_id'];
    $pdo->prepare("DELETE FROM usuarios WHERE id = ?")->execute([$id_borrar]);
    header("Location: listado.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_POST) {
    $nom = $_POST['nombre'];
    $em  = $_POST['email'];
    $id_u = $_POST['id'];
    
    $sql = "UPDATE usuarios SET nombre=?, email=? WHERE id=?";
    $pdo->prepare($sql)->execute([$nom, $em, $id_u]);
    
    header("Location: listado.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpMtvA4EP-crnVDl_gZTN3Gvvtp-n6lknKA&s">
    <meta charset="UTF-8">
</head>
<body>
    <div class="form-container">
        <h1>Editar Usuario</h1>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $user['nombre']; ?>">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $user['email']; ?>">
            <button type="submit" class="boton">Guardar Cambios</button>
        </form>
        <br>
        <a href="listado.php">Volver atrás</a>
    </div>
</body>
</html>
