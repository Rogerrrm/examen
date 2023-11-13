<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acceso</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <h2>Acceso a la Página de Consulta</h2>
    <form id="formAcceso" action="index.php" method="post">
        <input type="hidden" name="r" value="validar">
        <label for="codigoAcceso">Código de Acceso:</label>
        <input type="password" id="codigoAcceso" name="codigoAcceso" required>
        <button type="button" id="btnAcceder">Acceder</button>
        <a href="index.php" class="btn btn-success" >Volver</a>
    </form>

    <script>
        $(document).ready(function () {
            $("#btnAcceder").on("click", function () {
                var codigoAcceso = $("#codigoAcceso").val();

                $.ajax({
                    url: "ctrlvalidar.php",
                    type: "POST",
                    data: { codigoAcceso: codigoAcceso },
                    success: function (response) {
                        if (response === "true") {
                            window.location.href = "index.php?r=listado";
                        } else {
                            alert("Código de acceso incorrecto. Inténtalo de nuevo.");
                        }
                    },
                    error: function () {
                        alert("Error en la validación del código de acceso.");
                    }
                });
            });

            // Evitar el envío del formulario por defecto
            $("#formAcceso").on("submit", function (event) {
                event.preventDefault();
            });
        });
    </script>
</body>
</html>

