<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "r_user";

// Conexión
$conn = new mysqli($host, $usuario, $contrasena, $basededatos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$raza = $_POST['raza'];
$edad = $_POST['edad'];
$vacunas = $_POST['vacunas'];
$condiciones = $_POST['condiciones'];

$sql = "INSERT INTO mascotas (nombre, raza, edad, vacunas, condiciones) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiss", $nombre, $raza, $edad, $vacunas, $condiciones);

if ($stmt->execute()) {
    $id_insertado = $stmt->insert_id; // Obtener el ID generado automáticamente
    header("Location: ../views/mascotas_registradas.php?id=" . $id_insertado);
    exit();


} else {
    echo "Error al registrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
