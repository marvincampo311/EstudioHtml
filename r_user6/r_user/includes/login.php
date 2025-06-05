<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <style>
        body {
            background: #f0f2f5;
            font-family: Arial, sans-serif;
        }

        .login-container {
            margin-top: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-box h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-login {
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            width: 100%;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="login-box">
        <h3>Iniciar Sesión</h3>
        <form action="_functions.php" method="POST">
            <div class="form-group">
                <label for="nombre">Usuario</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <input type="hidden" name="accion" value="acceso_user">
            </div>
            <button type="submit" class="btn btn-login mt-3">Ingresar</button>
        </form>
    </div>
</div>

</body>
</html>
