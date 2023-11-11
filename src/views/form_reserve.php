<?php
$id_apartment = $request->get(INPUT_GET, 'id'); // Obtiene el valor del parámetro 'id' de la URL
$high_season_price = $_GET['price'];
$low_season_price = $_GET['pricelow'];

?>
<!DOCTYPE html>
<html lang="en">
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

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="icon" type="image/png" href="img/logo.jpg">
</head>
<body class="body-reserve">
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/logo.jpg"/>
                </div>
                <form action="index.php" method="post">
                <input type="hidden" name="r" value="doreserve">

                    <a class="iniciarsession">Reservar apartamento</a><br><br>         
                    <input type="hidden" class="form-control" name="id_user" value="<?php echo $_SESSION['user']['id_user']; ?>" readonly>
                    <input type="hidden" class="form-control" name="id_apartment" value="<?php echo $id_apartment ?>" readonly>
                    <input type="hidden" class="form-control" name="high_season_price" value="<?php echo $high_season_price ?>" readonly>
                    <input type="hidden" class="form-control" name="low_season_price" value="<?php echo $low_season_price ?>" readonly>
                    
                    <label>Nombre de usuario:</label>
                    <input class="form-control" name="user" value="<?php echo $_SESSION['user']['user']; ?>" readonly>
                    
                    <label>Fecha de entrada:</label>
                    <input name="entry_date" type="text" class="form-control datepicker" id="inputUsuario" placeholder="YYYY-MM-DD" required>

                    <label>Fecha de salida:</label>
                    <input name="departure_date" type="text" class="form-control datepicker" id="inputSurname" placeholder="YYYY-XX-DD" required>

                    <label>Numero de asistentes</label>
                    <input name="num_rooms" type="number" class="form-control" id="inputClave" placeholder="Número de asistentes" required>
                    
                    <p >Precio del apartamento: <span id="precioApartamento"></span></p>
                    
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Reservar</button>
                </form>
                
                <div class="col-12 forgot">
                    <a href="index.php" class="btn btn-primary">Volver a la pàgina principal.</a>                    
                </div>
		        </div> 
            </div>
        </div>
    </div>
    <script>
  $(document).ready(function() {
    $('.datepicker').datepicker({
      dateFormat: 'yy-mm-dd',
      minDate: 0,
      numberOfMonths: 2,
      showButtonPanel: true
    });

    // Obtén los valores de high_season_price y low_season_price desde PHP
    var high_season_price = <?php echo $high_season_price; ?>;
    var low_season_price = <?php echo $low_season_price; ?>;

    // Escucha cambios en el campo de fecha de entrada
    $('#inputUsuario').on('input', function() {
      calcularPrecio();
    });

    function calcularPrecio() {
        var entryDate = document.getElementById("inputUsuario").value;
        var dateParts = entryDate.split('-');
        var day = parseInt(dateParts[2], 10);
        var month = parseInt(dateParts[1], 10);
        var precioApartamento = document.getElementById("precioApartamento");

        if (month >= 1 && month <= 6) {
            precioApartamento.textContent = high_season_price;
        } else {
            precioApartamento.textContent = low_season_price;
        }
    }
  });
</script>

</body>
</html>