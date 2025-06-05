<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar == '') {
  header("Location: ../includes/login.php");
  die();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Veterinaria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #e9f5f9;
            margin: 0;
            padding: 0;
        }

        header {
            background: #0d6efd;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            padding: 30px;
        }

        .btn {
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            margin-right: 10px;
            color: white;
            background-color: #198754;
            cursor: pointer;
        }

        .btn-warning {
            background-color: #ffc107;
            color: black;
        }

        table {
            width: 100%;
            margin-top: 20px;
            background-color: white;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #0d6efd;
            color: white;
        }

        h1, h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido a la Clínica Veterinaria</h1>
        <h2>Hola, <?php echo $_SESSION['nombre']; ?>!</h2>
    </header>

    <div class="container">
        <div style="margin-bottom: 20px;">
            <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Cerrar Sesión <i class="fa fa-power-off"></i></a>
            <a class="btn btn-warning" href="https://www.google.com/maps/search/veterinario/" target="_blank">Buscar Veterinarias <i class="fa fa-map-marker-alt"></i></a>
            <a class="btn" href="registrar_mascota.php"><i class="fa fa-plus"></i> Registrar Mascota</a>
        </div>

        <h2>Usuarios Registrados</h2>

        <table id="table_id">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Fecha</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conexion = mysqli_connect("localhost", "root", "", "r_user");               
                $SQL = "SELECT user.id, user.nombre, user.correo, user.password, user.telefono, user.fecha, permisos.rol FROM user LEFT JOIN permisos ON user.rol = permisos.id";
                $dato = mysqli_query($conexion, $SQL);

                if ($dato->num_rows > 0) {
                    while ($fila = mysqli_fetch_array($dato)) {
                        echo "<tr>
                            <td>{$fila['nombre']}</td>
                            <td>{$fila['correo']}</td>
                            <td>{$fila['telefono']}</td>
                            <td>{$fila['fecha']}</td>
                            <td>{$fila['rol']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr class='text-center'><td colspan='5'>No existen registros</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });
    </script>
</body>
</html>
