<?php
$conn = new mysqli("localhost", "root", "", "r_user");

$id = $_GET['id'];
$sql = "SELECT * FROM mascotas WHERE id=$id";
$resultado = $conn->query($sql);
$mascota = $resultado->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $raza = $_POST['raza'];
    $edad = $_POST['edad'];
    $vacunas = $_POST['vacunas'];
    $condiciones = $_POST['condiciones'];

    $update = "UPDATE mascotas SET nombre='$nombre', raza='$raza', edad='$edad', vacunas='$vacunas', condiciones='$condiciones' WHERE id=$id";
    $conn->query($update);
    header("Location: user.php");   
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Mascota</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light p-4">
<div class="container bg-white p-4 rounded">
    <h3>Editar Información de la Mascota</h3>
    <form method="POST">
        <div class="form-group">
            <label>Nombre:</label>
            <input class="form-control" type="text" name="nombre" value="<?php echo $mascota['nombre']; ?>" required>
        </div>
        <div class="form-group">
            <label>Raza:</label>
            <input class="form-control" type="text" name="raza" value="<?php echo $mascota['raza']; ?>" required>
        </div>
        <div class="form-group">
            <label>Edad:</label>
            <input class="form-control" type="number" name="edad" value="<?php echo $mascota['edad']; ?>" required>
        </div>
        <div class="form-group">
            <label>Vacunas:</label>
            <textarea class="form-control" name="vacunas"><?php echo $mascota['vacunas']; ?></textarea>
        </div>
        <div class="form-group">
            <label>Condiciones Médicas:</label>
            <textarea class="form-control" name="condiciones"><?php echo $mascota['condiciones']; ?></textarea>
        </div>
        <button class="btn btn-primary">Guardar Cambios</button>
        <a href="user.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
