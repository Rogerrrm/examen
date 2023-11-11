<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="img/logo.jpg">


    
    <title>Apartaments Figuerencs</title>
</head>
<body>

<?php include "head.php"; ?>



<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/imagen1.jpg" class="d-block" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>RESERVA YA!</h5>
        <p>Web para reservar apartamentos de todo el mundo!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/imagen2.jpg" class="d-block" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>APARTAMENTOS FIGUERENCS</h5>
        <p>Reserva al gusto.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/imagen3.jpg" class="d-block" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>RESERVA YA!</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<main>
<div class="apartments">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($apart as $apartamento): ?>
          
            <div class="col">
                <div class="card h-100">
                    <!-- Imagen con atributos de data-bs-toggle y data-bs-target para abrir el modal -->
                    <img src="<?= $apartamento['img_url']; ?>" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#hotelesModal<?= $apartamento['id_apartment']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $apartamento['apartment_name']; ?></h5>
                        <p class="card-text">Precio: <?= $apartamento['high_season_price']; ?></p>
                        <p class="card-text">Habitaciones: <?= $apartamento['num_roms']; ?></p>
                        <p class="card-text">Dirección: <?= $apartamento['direction']; ?></p>
                    </div>
                </div>
            </div>

            <!-- Modal para cada apartamento -->
            <div class="modal fade" id="hotelesModal<?= $apartamento['id_apartment']; ?>" tabindex="-1" aria-labelledby="hotelModalLabel<?= $apartamento['id_apartment']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="hotelModalLabel<?= $apartamento['id_apartment']; ?>">Información del Apartamento</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenido del modal, puedes personalizarlo según tus necesidades -->
                            <img src="<?= $apartamento['img_url'];?>" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#hotelModal<?= $apartamento['id_apartment']; ?>">
                            <br><p>Detalles del apartamento:</p>
                            <ul>
                                <li>Nombre: <?= $apartamento['apartment_name']; ?></li>
                                <li>Descripción: <?= $apartamento['descripcion']; ?></li>
                                <li>Número de habitaciones: <?= $apartamento['num_roms']; ?></li>
                                <li>Dirección: <?= $apartamento['direction']; ?></li>
                                <li>Codigo Postal: <?= $apartamento['postal_address']; ?></li>
                                <li>Metros Cuadrados: <?= $apartamento['square_meter']; ?></li>
                                <li>Precio en temporada alta: <?= $apartamento['high_season_price']; ?></li>
                                <li>Precio en temporada baja: <?= $apartamento['low_season_price']; ?></li>
                                <div class="modal-footer justify-content-center">
                                <a href="index.php?r=formreserve&id=<?= $apartamento['id_apartment'] ?>&price=<?= $apartamento['high_season_price'] ?>&pricelow=<?= $apartamento["low_season_price"]?>" class="btn btn-success">Reservar</a>
                                <?php if (isset($_SESSION['user']['user']) && $_SESSION['user']['rol_user'] !== "usuario") {
                                    echo '<a href="index.php?r=delete&id=' . $apartamento["id_apartment"] . '" class="btn btn-success">Eliminar</a>';
                                } ?>

                        </div>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<br>

<!-- Google Maps aquí -->
<div class="map">
    <div class="right-content">
        <div id="map"></div>
    </div>
</div>

</main>

<?php include "footer.php"; ?>





<script src="src/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<!-- <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.6.0/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script> -->


<script>

    var mymap = L.map('map').setView([42.2664, 2.9616], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenstreetMap</a> contributors'
    }).addTo(mymap);

    // Itera a través de las coordenadas y agrega marcadores con identificadores únicos
    <?php foreach ($apart as $apartamento): ?>
        var marker<?= $apartamento['id_apartment']; ?> = L.marker([<?= $apartamento['latitude']; ?>, <?= $apartamento['longitude']; ?>]).addTo(mymap);
    <?php endforeach; ?>

    // Asigna eventos de clic a los marcadores
    <?php foreach ($apart as $apartamento): ?>
        marker<?= $apartamento['id_apartment']; ?>.on('click', function () {
            $('#hotelesModal<?= $apartamento['id_apartment']; ?>').modal('show');
        });
    <?php endforeach; ?>
    
    </script>

</body>
</html>
