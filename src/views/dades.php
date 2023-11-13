<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            margin: 10px 0;
            color: #666;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Confirmación de Registro</h2>
        <?php
        // Obtener los datos de la URL
        $codigoRegistro = isset($_GET['codigo']) ? $_GET['codigo'] : '';
        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
        $apellidos = isset($_GET['apellidos']) ? $_GET['apellidos'] : '';
        $resguardoPath = isset($_GET['resguardo']) ? $_GET['resguardo'] : '';

        

        // Mostrar los datos de confirmación
        echo "<p>¡Registro exitoso!</p>";
        echo "<p>Código de registro: $codigoRegistro</p>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellidos: $apellidos</p>";
        echo "<p>Resguardo: $resguardoPath</p>";
        ?>

        <p>¡Gracias por registrarte! Puedes <a href="index.php">volver</a> a la página principal.</p>
    </div>
</body>
</html>
