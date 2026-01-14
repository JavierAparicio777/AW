<?php
require_once "db.php";

$consulta = $pdo->query("SELECT * FROM usuarios");
$lista = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpMtvA4EP-crnVDl_gZTN3Gvvtp-n6lknKA&s">
    <meta charset="UTF-8">
</head>
<body>
    <div class="form-container" style="max-width: 800px;">
        <h1>Gestión de Usuarios</h1>
        <a href="dashboard.php">Volver al Panel</a>
        
        <table border="1" style="width:100%; margin-top:20px; border-collapse: collapse;">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th> </tr>
            
            <?php foreach ($lista as $usuario) { ?>
            <tr>
                <td><?php echo $usuario['nombre']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
                <td><?php echo $usuario['rol']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $usuario['id']; ?>">Editar</a> | 
                    <a href="editar.php?borrar_id=<?php echo $usuario['id']; ?>" onclick="return confirm('¿Seguro?')">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
