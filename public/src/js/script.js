function validarIdentificacion() {
    var usuario = document.getElementById("usuario").value;
    var clave = document.getElementById("clave").value;

    // Validación básica del formulario
    if (usuario === "" || clave === "") {
        alert("Por favor, complete todos los campos.");
        return;
    }

    // Objeto de datos a enviar al servidor
    var datos = {
        usuario: usuario,
        clave: clave
    };

    // Enviar datos al servidor usando AJAX
    $.ajax({
        type: "POST",
        url: "validar_identificacion.php", // Nombre del archivo PHP de backend
        data: datos,
        success: function (response) {
            // Manejar la respuesta del servidor
            $("#resultado").html(response);
        },
        error: function () {
            alert("Error en la solicitud AJAX.");
        }
    });
}
