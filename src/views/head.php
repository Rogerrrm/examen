<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/css/head.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
            <a class="img-index" href="index.php">
                <img class="navbar-brand" id="reload" src="img/logo.jpg" alt="Logotipo">
            </a>
            
            <script>
                var reloadPage = document.getElementById("reload");
                reloadPage.addEventListener("click", function () {
                    location.reload();
                });
            </script>
       <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscador" aria-label="Search">
        <a href="index?r=buscarapartamento" class="btn btn-outline-success" type="submit">Buscar</a>

        
        <?php 
            if (isset($_SESSION['user']['user'])) {
                // El usuario ha iniciado sesión
                echo '<a href="index.php?r=dades" class="btn btn-success">Perfil, ' . $_SESSION['user']['user'] . '</a>';
                echo '<a href="index.php?r=dologout" class="btn btn-success">Cerrar Sesión</a>';
                echo '<a href="index.php?r=reserve" class="btn btn-success">Reservas</a>';
                echo '<a href="index.php?r=buscar" class="btn btn-success">buscarapartamento</a>';
                if (isset($_SESSION['user']['user']) && $_SESSION['user']['rol_user'] == "admin") {
                echo '<a href="index.php?r=admincontroller" class="btn btn-success">ADMIN</a>';
                }
            } else {
                // El usuario no ha iniciado sesión
                echo '<a href="index.php?r=login" class="btn btn-success">Iniciar Sesión</a>';
            }
        ?>

        </form>

</div>
    </nav>
</body>
<script src="../../public/src/js/index.js"></script>
</html>