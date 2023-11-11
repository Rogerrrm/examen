<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="img/logo.jpg">
     Agrega jQuery primero 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

     Agrega DataTables después de jQuery 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>


    
    <title>Apartaments Figuerencs</title>
</head>
<body>





<table id="miTabla" class="display">
    <thead>
        <tr>
            <th>Columna 1</th>
            <th>Columna 2</th>
            <th>Columna 1</th>
            <th>Columna 2</th>
            <th>Columna 1</th>
            <th>Columna 2</th>
            <th>Columna 1</th>
            <th>Columna 2</th>
            <th>Columna 1</th>
            <th>Columna 2</th>
            <th>Columna 1</th>
            <th>Columna 2</th>
             Agrega más columnas según sea necesario 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Dato 1</td>
            <td>Dato 2</td>
            <td>Dato 1</td>
            <td>Dato 2</td>
            <td>Dato 1</td>
            <td>Dato 2</td>
            <td>Dato 1</td>
            <td>Dato 2</td>
            <td>Dato 1</td>
            <td>Dato 2</td>
            <td>Dato 1</td>
            <td>Dato 2</td>
            <td>Dato 1</td>
            <td>Dato 2</td>
            <td>Dato 1</td>
            <td>Dato 2</td>
            <td>Dato 1</td>
            <td>Dato 2</td>
            <td>Dato 1</td>
            <td>Dato 2</td>
            
        </tr>
    </tbody>
</table>




<script>
    $(document).ready(function() {
        $('#miTabla').DataTable();
    });
</script>


<script src="src/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.6.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">
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

<table id="miTabla" class="display">
    <thead>
        <tr>
            <th>Columna 1</th>
            <th>Columna 2</th>
            <!-- Agrega más columnas según sea necesario -->
        </tr>
    </thead>
    <tbody>
        <td>Columna 2</td>
        <!-- Agrega datos dinámicamente desde tu base de datos -->
    </tbody>
</table>

<?php include "footer.php"; ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
<script src="src/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
