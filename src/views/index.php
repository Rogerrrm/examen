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
    
    <title>examen</title>
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

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae ante interdum, lobortis metus in, molestie urna. Nunc est dolor, congue sed consequat vel, vehicula vel lorem. Nulla placerat dolor at elit mattis, quis efficitur ipsum pulvinar. Duis finibus vel nisl quis malesuada. Mauris ac ipsum posuere, hendrerit ligula ac, porta ligula. Ut in maximus lorem. Ut magna libero, condimentum quis lacus quis, porta aliquam sem.</p>

<p>Quisque rhoncus bibendum metus, nec faucibus tortor porta sed. Nullam imperdiet sagittis dolor eget suscipit. Etiam luctus eros at fermentum dapibus. Donec bibendum ipsum id leo aliquet, at luctus urna gravida. Nullam ac elit at justo vulputate tincidunt. Integer venenatis tellus et dolor volutpat, vehicula convallis ipsum consectetur. Curabitur nulla lectus, mollis ac viverra tincidunt, mattis sit amet leo. Vestibulum gravida augue at imperdiet euismod. Morbi in enim nec magna convallis rutrum. Integer ac massa fringilla, ornare massa tincidunt, elementum urna. Nullam rhoncus sit amet velit semper condimentum. Sed nec orci suscipit, commodo nunc sit amet, blandit nibh. Donec luctus orci velit, vel finibus dui accumsan in. Nulla molestie vehicula mattis.</p>

<p>Nunc pretium felis vel iaculis fermentum. Nullam porta, tellus eu venenatis feugiat, felis dui lobortis velit, non condimentum turpis tortor ac lorem. Etiam lobortis felis sit amet eros suscipit, placerat convallis elit consectetur. Nunc sollicitudin, dui id tincidunt suscipit, felis quam posuere tortor, a vulputate nunc nisi et ipsum. Nunc rhoncus ligula sit amet lacus efficitur, a imperdiet nisl pulvinar. Nam auctor urna sapien, vel ornare ante gravida sit amet. Etiam quis lacus nec nulla feugiat laoreet. Maecenas felis mauris, vehicula ut congue vitae, rhoncus sed neque. Aenean volutpat leo diam, sed porttitor est pharetra in. Integer quis nisl sed mi volutpat maximus ut et nisl. In nisi tellus, porttitor ac tortor nec, euismod eleifend eros. Sed quis enim eu neque molestie volutpat. Vestibulum eget lectus id sapien egestas eleifend. Curabitur egestas venenatis dolor, ut pulvinar lacus porta at. Sed condimentum nisl lorem, sit amet rhoncus elit auctor et. Phasellus maximus diam ut pretium posuere.</p>

<p>Nullam lacinia ex vel nunc fringilla egestas. Cras a ex tempor, rutrum nunc sit amet, interdum eros. Etiam dictum nec lectus sed vulputate. Curabitur facilisis tincidunt ligula non placerat. Integer faucibus massa augue, a imperdiet velit rhoncus quis. Vestibulum nec turpis luctus, rutrum turpis sed, sollicitudin lacus. Nullam blandit lobortis tempus. Proin ultricies augue in diam semper, at laoreet lectus accumsan.</p>

<p>Mauris id libero convallis, luctus ante ut, dignissim turpis. Curabitur quis ultricies turpis, in ullamcorper dui. Vivamus ornare felis mauris. Aenean rhoncus lacus fringilla consectetur euismod. Nulla pulvinar varius placerat. Morbi lorem leo, venenatis vitae dictum non, faucibus a leo. Fusce pharetra nunc id posuere finibus. Duis eleifend non dolor eget consectetur. Nunc in elit sollicitudin, varius tellus eget, facilisis elit. Maecenas vitae volutpat libero. Ut massa dolor, commodo id sagittis nec, ullamcorper quis tellus. Fusce vitae nulla risus. Curabitur sed gravida metus, congue venenatis augue. Curabitur ac est eu justo mollis lacinia. Pellentesque pulvinar tellus et lorem lacinia pellentesque. Phasellus quis felis vel est tincidunt lobortis luctus in elit.</p>

<!-- Modal de Política de Cookies -->
<div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cookieModalLabel">Política de Cookies</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Aquest lloc web utilitza cookies per millorar la teva experiència. Fes clic a "Acceptar" per acceptar totes les cookies.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tanca</button>
        <button type="button" class="btn btn-primary" id="acceptCookies">Acceptar</button>
      </div>
    </div>
  </div>
</div>


<?php include "footer.php"; ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
<script src="src/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Mostrar el modal siempre que se recargue la página
    $('#cookieModal').modal('show');

    // Quan es fa clic a "Acceptar", guarda la informació a les cookies
    $('#acceptCookies').click(function() {
      localStorage.setItem('cookiesAccepted', 'true');
      // Tanca el modal
      $('#cookieModal').modal('hide');
    });
  });
</script>


</body>
</html>
