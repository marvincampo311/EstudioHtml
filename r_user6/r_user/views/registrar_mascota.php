<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Mascota</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }
        .btn-atras {
            background-color: #007bff;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
            margin-top: 20px;
        }

            .btn-atras a {
                color: white;
                text-decoration: none;
                font-weight: bold;
                display: inline-block;
            }

            .btn-atras:hover {
                background-color: #0056b3;
            }

            .center-button {
                text-align: center;
            }

    </style>
</head>
<body>

<div class="form-container">
    <h3>REGISTRAR MASCOTA</h3>
    <form action="../includes/procesar_mascotas.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre de la Mascota *</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="raza">Raza *</label>
            <input type="text" id="raza" name="raza" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="edad">Edad (años) *</label>
            <input type="number" id="edad" name="edad" class="form-control" required min="0">
        </div>

        <div class="form-group">
            <label for="vacunas">Historial de Vacunas</label>
            <textarea id="vacunas" name="vacunas" class="form-control" placeholder="Ej: Rabia - 2023, Parvovirus - 2024"></textarea>
        </div>

        <div class="form-group">
            <label for="condiciones">Condiciones Médicas</label>
            <textarea id="condiciones" name="condiciones" class="form-control" placeholder="Ej: Alergias, problemas de piel"></textarea>
        </div>

        <button type="submit" class="btn-submit">Registrar Mascota</button>
        <div class="center-button">
             <button class="btn-atras"><a href="lector.php">Atrás</a></button>
        </div>


    </form>
</div>

</body>
</html>

