<!DOCTYPE html>
<html>
<head>
    <title>Tus Datos</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- Agrega tu archivo CSS personalizado -->
    <link rel="stylesheet" href="src/css/dades.css">
    <link rel="icon" type="image/png" href="img/logo.jpg">
</head>
<body class="body-dades">
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-header text-white">
                <h3 class="card-title text-center">Modificar Datos Personales</h3>
            </div>
            <div class="card-body">
                <form method="post" action="index.php?r=updatedades">
                    <div class="form-group">
                        <label for="user">Nombre de usuario</label>
                        <input type="text" class="form-control" name="user" value="<?php echo $data[0]['user']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="surname">Apellido</label>
                        <input type="text" class="form-control" name="surname" value="<?php echo $data[0]['surname']; ?>">
                    </div>
                    <div class="form-group">
                    <label for="pass">Contraseña</label>
                        <div class="password-toggle">
                            <input type="password" class="form-control password1" name="pass" value="<?php echo $data[0]['pass']; ?>">
                            <span class="fa fa-fw fa-eye password-icon show-password" id="togglePassword"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $data[0]['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Número de teléfono</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $data[0]['phone']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="card_number">Número de tarjeta</label>
                        <input type="text" class="form-control" name="card_number" value="<?php echo $data[0]['card_number']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="rol_user">Rol de usuario</label>
                        <input type="text" class="form-control" name="rol_user" value="<?php echo $data[0]['rol_user']; ?>" readonly>
                    </div> 
                    <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
                    <a href="index.php" class="btn btn-success btn-block">PÀGINA PRINCIPAL.</a><br>
                    <?php 
                    if ($data[0]['rol_user'] === 'admin') {
                        // Mostrar el botón para el rol "gestor"
                        echo '<a href="index.php?r=addapartamento" class="btn btn-success btn-block">AÑADIR APARTAMENTO</a>';
                        // Mostrar el botón para el rol "usuario"
                        echo '<a href="index.php?r=reserve" class="btn btn-success btn-block">MIS RESERVAS</a>';
                    }
                    ?>
                    <?php 
                    if ($data[0]['rol_user'] === 'gestor') {
                        // Mostrar el botón para el rol "gestor"
                        echo '<a href="index.php?r=addapartamento" class="btn btn-success btn-block">AÑADIR APARTAMENTO</a>';
                    } elseif ($data[0]['rol_user'] === 'usuario') {
                        // Mostrar el botón para el rol "usuario"
                        echo '<a href="index.php?r=reserve" class="btn btn-success btn-block">MIS RESERVAS</a>';
                    }
                    ?>
                </form>
            </div>
        </div>  
    </div>
    <script>
    var passwordField = document.querySelector('.password1');
    var togglePassword = document.getElementById('togglePassword');

    togglePassword.addEventListener('click', function() {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');
        }
    });
</script>
    <!-- Agrega el enlace a los scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <!-- Agrega el enlace al archivo JavaScript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="src/js/index.js"></script>
</body>
</html>
