<?php
session_start();

// Verificar si l'usuari està identificat
if (!isset($_SESSION['identified']) || $_SESSION['identified'] !== true) {
    // Redirigeix a la pàgina de login si l'usuari no està identificat
    header('Location: index.php?r=login');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<head>
    <meta charset="UTF-8">
    <title>Listado de Inscripciones</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

</head>
<body>
    <h2>Listado de Inscripciones</h2>

    <table id="miTabla">
        <thead>
            <tr>
                <th>Columna 1</th>
                <th>Columna 2</th>
                <th>Columna 3</th>
                <th>Columna 4</th>
                <th>Columna 5</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Establecer la conexión PDO
            $dsn = "mysql:host=localhost;dbname=examen";
            $username = "root";
            $password = "1234";

            try {
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }

            // Realizar la consulta con PDO
            $consulta = "SELECT id, nombre, apellidos, fecha_nacimiento, direccion FROM register";
            $stmt = $pdo->query($consulta);

            while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $fila['id'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['apellidos'] . "</td>";
                echo "<td>" . $fila['fecha_nacimiento'] . "</td>";
                echo "<td>" . $fila['direccion'] . "</td>";
                // Agrega más celdas según las columnas de tu base de datos
                echo "</tr>";
            }

            // Cerrar la conexión
            $pdo = null;
            ?>
        </tbody>
    </table>

    <a href="index.php" class="btn btn-success" >Volver</a>

    <script>
        $(document).ready(function () {
            $('#miTabla').DataTable();
        });
    </script>
</body>
</html>
