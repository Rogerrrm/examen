<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acceso</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <h2>Acceso a la Página de Consulta</h2>
    <form id="formAcceso" action="index.php" method="post">
        <input type="hidden" name="r" value="validar">
        <label for="codigoAcceso">Código de Acceso:</label>
        <input type="password" id="codigoAcceso" name="codigoAcceso" required>
        <button type="button" id="btnAcceder">Acceder</button>
        <a href="index.php">Volver</button>
    </form>

    <script>
        $(document).ready(function () {
            $("#btnAcceder").on("click", function () {
                var codigoAcceso = $("#codigoAcceso").val();

                $.ajax({
                    url: "src/controllers/ctrlvalidar.php",
                    type: "POST",
                    data: { codigoAcceso: codigoAcceso },
                    success: function (response) {
                        if (response === "true") {
                            window.location.href = "listado.php";
                        } else {
                            alert("Código de acceso incorrecto. Inténtalo de nuevo.");
                        }
                    },
                    error: function () {
                        alert("Error en la validación del código de acceso.");
                    }
                });
            });
        });
    </script>
</body>
</html>
