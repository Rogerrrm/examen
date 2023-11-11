<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Apartamento</title>
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="icon" type="image/png" href="img/logo.jpg">
</head>
<body class="body-addapartamento">
    <div class="container">
    <div class="card-header text-white">
                <h3 class="card-title text-center">Añadir un apartamento</h3>
            </div>
        <div class="card-body">
        <form action="index.php?r=procesarapartamento" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apartment_name">Nombre del Apartamento:</label>
                        <input type="text" class="form-control" id="apartment_name" name="apartment_name" required>
                    </div>
                    <div class="form-group">
                        <label for="direction">Dirección:</label>
                        <input type="text" class="form-control" id="direction" name="direction" placeholder="Ciudad y dirección" required>
                    </div>
                    <div class="form-group">
                        <label for="postal_address">Código Postal:</label>
                        <input type="text" class="form-control" id="postal_address" name="postal_address" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción del Apartamento:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4"></textarea>
                    </div>
                    <label>Servicios:</label>
                    <select name="id_services" class="services" id="id_services">
                        <option value="">Selecciona un servicio</option>
                        <option value="1">Wi-Fi</option>
                        <option value="2">Ascensor</option>
                        <option value="3">Restaurante</option>
                        <option value="4">Parking</option>
                    </select>
                </div>
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="high_season_price">Precio Temporada alta:</label>
                        <input type="number" class="form-control" id="high_season_price" name="high_season_price" required>
                    </div>
                    <div class="form-group">
                        <label for="low_season_price">Precio Temporada baja:</label>
                        <input type="number" class="form-control" id="low_season_price" name="low_season_price" required>
                    </div>
                    <div class="form-group">
                        <label for="num_roms">Número de Habitaciones:</label>
                        <input type="number" class="form-control" id="num_roms" name="num_roms" required>
                    </div>
                    <div class="form-group">
                        <label for="square_meter">Metros Cuadrados:</label>
                        <input type="number" class="form-control" id="square_meter" name="square_meter" required>
                    </div>
                    <div class="form-group">
                        <label for="latitude">latitude:</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" required>
                    </div>
                    <div class="form-group">
                        <label for="longitude">Longitud:</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" required>
                    </div>
                    <div class="form-group">
                        <label for="img_url">URL Imagen Apartamento:</label>
                        <input type="text" class="form-control" id="img_url" name="img_url" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?= $_SESSION['user']['id_user']; ?>">
                    </div>

                </div>
            </div>
            
            <button type="submit" class="btn btn-success">Añadir apartamento.</button>
            <a href="index.php" class="btn btn-success">Volver a la pàgina principal.</a>
            </div>
            </div>
            
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>