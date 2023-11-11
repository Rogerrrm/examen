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
<body class="body-register">
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/logo.jpg"/>
                </div>
                <form action="index.php" method="post">
                <input type="hidden" name="r" value="doregister">
                <a class="iniciarsession">REGISTRARSE</a><br><br>
                  <div class="form-group">
                    <label for="inputUsuario">Usuario</label>
                    <input name="user" type="text" class="form-control" id="inputUsuario" placeholder="Tu usuario" required>
                  </div>

                  <div class="form-group">
                    <label for="inputSurname">Apellido</label>
                    <input name="surname" type="text" class="form-control" id="inputSurname" placeholder="Tu apellido">
                  </div>

                  <div class="form-group">
                    <label for="inputClave">Contraseña</label>
                    <input name="pass" type="password" class="form-control" id="inputClave" placeholder="Tu contraseña" required>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Tu email" required>
                  </div>

                  <div class="form-group">
                    <label for="inputPhone">Telefono</label>
                    <input name="phone" type="tel" class="form-control" id="inputPhone" placeholder="Tu telefono">
                  </div>

                  <div class="form-group">
                    <label for="inputTarjeta">Tarjeta de Credito</label>
                    <input name="card_number" type="text" class="form-control" id="inputTarjeta" placeholder="Tu tarjeta de credito" required>
                  </div>
                    
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Registrarse</button>
                </form>
                
                <div class="col-12 forgot">
                    <a href="index.php?r=registergestor" class="registro">Registrarse como gestor.</a><br>
                    <a href="index.php?r=login" class="registro">Login.</a><br>
                    <a href="index.php">Volver a la pàgina principal.</a>
                    
                </div>
                
		        </div> 
            </div>
        </div>
    </div>
</body>