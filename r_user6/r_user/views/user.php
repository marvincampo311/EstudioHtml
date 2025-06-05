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
  <title>Usuarios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Estilos y librerías -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

  <style>
    body {
      background-color: #f0f2f5;
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #007bff;
    }

    .btn {
      border-radius: 8px;
    }

    .table-container {
      margin-top: 30px;
      background: #fff;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    table.dataTable thead {
      background-color: #007bff;
      color: white;
    }

    table.dataTable td {
      vertical-align: middle;
    }

    .btn i {
      margin-right: 4px;
    }
  </style>
</head>
<body>

<div class="container table-container">
  <h1>Bienvenido Administrador <?php echo $_SESSION['nombre']; ?></h1>
  <h1>Lista de Usuarios</h1>
  <div class="mb-3 text-center">
    <a class="btn btn-success mr-2" href="../index.php">
      <i class="fa fa-plus"></i> Nuevo Usuario
    </a>
    <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">
      <i class="fa fa-power-off"></i> Log Out
    </a>
  </div>
   <div class="container">

  <table class="table table-striped table-bordered" id="table_id">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Password</th>
        <th>Teléfono</th>
        <th>Fecha</th>
        <th>Rol</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $conexion = mysqli_connect("localhost", "root", "", "r_user");
      $SQL = "SELECT user.id, user.nombre, user.correo, user.password, user.telefono,
              user.fecha, permisos.rol FROM user
              LEFT JOIN permisos ON user.rol = permisos.id";
      $dato = mysqli_query($conexion, $SQL);

      if ($dato->num_rows > 0) {
          while ($fila = mysqli_fetch_array($dato)) {
              echo "<tr>
                      <td>{$fila['nombre']}</td>
                      <td>{$fila['correo']}</td>
                      <td>{$fila['password']}</td>
                      <td>{$fila['telefono']}</td>
                      <td>{$fila['fecha']}</td>
                      <td>{$fila['rol']}</td>
                      <td>
                          <a class='btn btn-warning' href='editar_user.php?id={$fila['id']}'>
                            <i class='fa fa-edit'></i> Editar
                          </a>
                          <a class='btn btn-danger' href='eliminar_user.php?id={$fila['id']}'>
                            <i class='fa fa-trash'></i> Eliminar
                          </a>
                      </td>
                    </tr>";
          }
      } else {
          echo "<tr class='text-center'><td colspan='7'>No existen registros</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#table_id').DataTable({
      language: {
        "search": "Buscar:",
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "No se encontraron resultados",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
        "infoEmpty": "No hay registros disponibles",
        "infoFiltered": "(filtrado de _MAX_ registros totales)",
        "paginate": {
          "first":      "Primero",
          "last":       "Último",
          "next":       "Siguiente",
          "previous":   "Anterior"
        }
      }
    });
  });
</script>

</body>
</html>

 <div class="container">
        <div style="margin-bottom: 20px;">
            
            <a class="btn btn-warning" href="https://www.google.com/maps/search/veterinario/" target="_blank">Buscar Veterinarias <i class="fa fa-map-marker-alt"></i></a>
        </div>

<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "r_user";

$conn = new mysqli($host, $usuario, $contrasena, $basededatos);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM mascotas";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mascotas Registradas</title>

    <!-- Bootstrap y DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }

        .container {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .btn-volver {
            display: block;
            margin: 30px auto;
            padding: 12px 25px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            text-align: center;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-volver:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-primary text-center">Mascotas Registradas</h2>
    <table class="table table-striped table-dark" id="tabla_mascotas">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Edad</th>
                <th>Vacunas</th>
                <th>Condiciones Médicas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while($fila = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['raza']; ?></td>
                    <td><?php echo $fila['edad']; ?> años</td>
                    <td><?php echo $fila['vacunas']; ?></td>
                    <td><?php echo $fila['condiciones']; ?></td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="editar_mascota.php?id=<?php echo $fila['id']; ?>">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="eliminar_mascota.php?id=<?php echo $fila['id']; ?>" onclick="return confirm('¿Estás seguro de eliminar esta mascota?');">
                            <i class="fa fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</div>

<!-- Scripts para DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function () {
    $('#tabla_mascotas').DataTable({
        language: {
            "search": "Buscar:",
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
});
</script>

</body>
</html>



