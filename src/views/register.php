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
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <form action="index.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="r" value="doregister">
                <a class="iniciarsession">Registrarse</a><br><br>
                  <div class="form-group">
                    <label for="inputUsuario">Nom</label>
                    <input name="Nom" type="text" class="form-control" id="inputUsuario" placeholder="Tu usuario" required>
                  </div>
                  <div class="form-group">
                    <label for="inputClave">Cognoms</label>
                    <input name="Cognoms" type="text" class="form-control" id="inputClave" placeholder="Tu apellido" required>
                  </div>
                  <div class="form-group">
                    <label for="inputUsuario">Data de naixement:</label>
                    <input name="Datanaixement" type="text" class="form-control" id="inputData" placeholder="Tu fecha de nacimiento" required>
                  </div>
                  <div class="form-group">
                    <label for="inputUsuario">Adreca(Carrer, número, ciutat i codi postal)</label>
                    <input name="adreca" type="text" class="form-control" id="inputAdreca" placeholder="Tu direccion" required>
                  </div>
                  <div class="form-group">
                    <label for="resguardo">Resguard del pagament (PDF o imatge)</label>
                    <input name="resguardo" type="file" accept=".pdf, .jpg, .jpeg, .png" class="form-control-file" id="inputDocumento" required>
                  </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</button>
                </form>
                
                <div class="col-12 forgot">
                    <a href="index.php?r=dades" class="registro">Registrarse.</a><br>
                    <a href="index.php">Volver a la pàgina principal.</a>
                    
                </div>
                
		        </div>
            </div>
        </div>
    </div>
</body>