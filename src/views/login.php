<head>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="icon" type="image/png" href="img/logo.jpg">

</head>
<body class="body-login">
<?php $_SESSION['id_user'] = $user_id;?>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/logo.jpg"/>
                </div>
                <form action="index.php" method="post">
                <input type="hidden" name="r" value="dologin">
                <a class="iniciarsession">INICIAR SESSION</a><br><br>
                  <div class="form-group">
                    <label for="inputUsuario">Usuario</label>
                    <input name="user" type="text" class="form-control" id="inputUsuario" placeholder="Tu usuario" required>

                  </div>
                  <div class="form-group">
                    <label for="inputClave">Contraseña</label>
                    <input name="pass" type="password" class="form-control" id="inputClave" placeholder="Tu contraseña" required>
                  </div>
                    
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</button>
                </form>
                
                <div class="col-12 forgot">
                    <a href="index.php?r=register" class="registro">Registrarse.</a><br>
                    <a href="index.php">Volver a la pàgina principal.</a>
                    
                </div>
                
		        </div>
            </div>
        </div>
    </div>
</body>