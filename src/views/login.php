<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Validación de Identificación</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="src/js/script.js"></script>
</head>script.js
<body>
    <h2>Formulario de Validación de Identificación</h2>
    <form id="formIdentificacion">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required>

        <button type="button" onclick="validarIdentificacion()">Enviar</button>
    </form>

    <div id="resultado"></div>
</body>
</html>
