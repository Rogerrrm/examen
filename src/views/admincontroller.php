<!DOCTYPE html>
<html>
<head>
    <title>Tus Datos</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="img/logo.jpg">
</head>
<body>
    <div class="container mt-5">
        <h1 class="display-4">ADMIN CONTROLLER</h1>
        <div class="row">
            <div class="col-md-12">
            <h1 class="display-4">Usuarios</h1>
            <?php foreach ($apfs as $ap) : ?>
                <div class="card mb-3">
                    <div class="card-body">
                    <form action="index.php" method="post">
                    <form method="post" action="index.php?r=updatedadesuser">
                            <div class="form-group">
                                <label for="user">Nombre de usuario</label>
                                <input type="hidden" class="form-control" name="id_user" value="<?php echo $ap['id_user']?>" readonly>
                                <input type="text" class="form-control" name="user" value="<?php echo $ap['user']; ?>">                                
                            </div>
                            <div class="form-group">
                                <label for="surname">Apellido</label>
                                <input type="text" class="form-control" name="surname" value="<?php echo $ap['surname']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="pass">Contraseña</label>
                                <input type="password" class="form-control" name="pass" value="<?php echo $ap['pass']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="text" class="form-control" name="email" value="<?php echo $ap['email']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="phone">Número de teléfono</label>
                                <input type="text" class="form-control" name="phone" value="<?php echo $ap['phone']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="card_number">Número de tarjeta</label>
                                <input type="text" class="form-control" name="card_number" value="<?php echo $ap['card_number']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="rol_user">Rol de usuario</label>
                                <input type="text" class="form-control" name="rol_user" value="<?php echo $ap['rol_user']; ?>" readonly>
                            </div> 
                            <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
                        </form>
                        <?php echo '<a href="index.php?r=deleteuser&id=' . $ap["id_user"] . '"  class="btn btn-success btn-block">Eliminar Usuario</a>'; ?>
                    </div>
                </div>
            <?php endforeach; ?>

               
                <h1 class="display-4">Reservas</h1>
                <?php foreach ($reserve as $res) : ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <p class="card-text">ID Reserva: <?php echo $res['id_reserve']; ?></p>
                            <p class="card-text">ID Usuario: <?php echo $res['id_user']; ?></p>
                            <p class="card-text">ID Apartamento: <?php echo $res['id_apartment']; ?></p>
                            <p class="card-text">Fecha de entrada: <?php echo $res['entry_date']; ?></p>
                            <p class="card-text">Fecha de salida: <?php echo $res['departure_date']; ?></p>
                            <p class="card-text">Estado Reserva: <?php echo $res['reserve_status']; ?></p>
                            <p class="card-text">Estado Temporada: <?php echo $res['season_status']; ?></p>
                            <p class="card-text">Estado Apartamento: <?php echo $res['apartment_status']; ?></p>
                            <p class="card-text">Precio: <?php echo $res['price']; ?></p>
                            <p class="card-text">Numero de asistentes: <?php echo $res['num_rooms']; ?></p>
                            <?php echo '<a href="index.php?r=deletereserve&id=' . $res["id_reserve"] . '"  class="btn btn-success btn-block">Cancelar Reserva</a>'; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
    
    
    <h1 class="display-4">Apartamentos</h1>
    <?php foreach ($apart as $apa) : ?>
    <div class="card mb-3">
        <div class="card-body">
                <form action="index.php" method="post">
                <form method="post" action="index.php?r=updatedadesadmin">
                <div class="form-group">
                    <label for="id_apartment">ID Apartamento</label>
                    <input type="text" class="form-control" name="id_apartment" value="<?php echo $apa['id_apartment']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="apartment_name">Nombre del apartamento</label>
                    <input type="text" class="form-control" name="apartment_name" value="<?php echo $apa['apartment_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="high_season_price">Precio temporada alta</label>
                    <input type="text" class="form-control" name="high_season_price" value="<?php echo $apa['high_season_price']; ?>">
                </div>
                <div class="form-group">
                    <label for="low_season_price">Precio temporada baja</label>
                    <input type="text" class="form-control" name="low_season_price" value="<?php echo $apa['low_season_price']; ?>">
                </div>
                <div class="form-group">
                    <label for="num_roms">Numero de habitaciones</label>
                    <input type="text" class="form-control" name="num_roms" value="<?php echo $apa['num_roms']; ?>">
                </div>
                <div class="form-group">
                    <label for="postal_address">Codigo Postal</label>
                    <input type="text" class="form-control" name="postal_address" value="<?php echo $apa['postal_address']; ?>">
                </div>
                <div class="form-group">
                    <label for="square_meter">Metros cuadrados</label>
                    <input type="text" class="form-control" name="square_meter" value="<?php echo $apa['square_meter']; ?>">
                </div>
                <label for="latitude">Coordenadas:</label>
                <div class="form-group">
                    <label for="latitude">Latitud</label>
                    <input type="text" class="form-control" name="latitude" value="<?php echo $apa['latitude']; ?>">
                </div>
                <div class="form-group">
                    <label for="longitude">Longitud</label>
                    <input type="text" class="form-control" name="longitude" value="<?php echo $apa['longitude']; ?>">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" value="<?php echo $apa['descripcion']; ?>">
                </div>
                <div class="form-group">
                    <label for="id_user">ID Usuario</label>
                    <input type="text" class="form-control" name="id_user" value="<?php echo $apa['id_user']; ?>">
                </div>
                <div class="form-group">
                    <label for="id_services">ID Servicios</label>
                    <input type="text" class="form-control" name="id_services" value="<?php echo $apa['id_services']; ?>">
                </div>
                <div class="form-group">
                    <label for="direction">Dirección</label>
                    <input type="text" class="form-control" name="direction" value="<?php echo $apa['direction']; ?>">
                </div>
                <div class="form-group">
                    <label for="img_url">Imagen apartamento</label>
                    <input type="text" class="form-control" name="img_url" value="<?php echo $apa['img_url']; ?>">
                </div>

                <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
            </form>
            <?php echo '<a href="index.php?r=delete&id=' . $apa["id_apartment"] . '" class="btn btn-success btn-block">Eliminar Apartamento</a>'; ?>
        </div>
    </div>
<?php endforeach; ?>

            </div>
        </div>
        <a href="index.php" class="btn btn-success">Volver a la página principal</a>
    </div>
    <!-- Agrega el enlace a los scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min"></script>

</body>
</html>
