<!DOCTYPE html>
<html>
<head>
    <title>Mis reservas</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/dades.css">
    <link rel="icon" type="image/png" href="img/logo.jpg">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" type="image/png" href="img/logo.jpg">

</head>
<body class="body-reserva">
        <?php
            if (isset($_GET['error'])) {
                $error_message = $_GET['error'];
                echo '<div class="alert alert-danger">' . htmlspecialchars($error_message) . '</div>';
            }
        ?>
    <div class="container-1 mt-5">
        <h1 class="display-4">Mis reservas</h1>
        <div class="row">
            <?php foreach ($data as $row) : ?>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">RESERVA: <?php echo $row['apartment_name']; ?></h5><br>
                            <?php
                        // Compara la fecha de salida con la fecha actual
                        $currentDate = date('Y-m-d');
                        if ($row['departure_date'] >= $currentDate) {
                            echo '<p class="card-text text-success">Reserva Vigente</p>';
                        } else {
                            echo '<p class="card-text text-danger">Reserva Vencida</p>';
                        }
                        ?>
                            <p class="card-text">Estado de la reserva: <?php echo $row['reserve_status']; ?></p>
                            <p class="card-text">Temporada: <?php echo $row['season_status']; ?></p>
                            <p class="card-text">Numero de asistentes: <?php echo $row['num_rooms']; ?></p>
                            <p class="card-text">Fecha de entrada: <?php echo $row['entry_date']; ?></p>
                            <p class="card-text">Fecha de salida: <?php echo $row['departure_date']; ?></p>

                            <br><h5  class="card-title">Informacion del apartamento:</h5><br>
                            <p class="card-text">Dirección: <?php echo $row['direction']; ?></p>
                            <p class="card-text">Dirección Postal: <?php echo $row['postal_address']; ?></p>
                            <p class="card-text">Servicios: <?php echo $row['name_services']?></p>
                            <?php echo '<a href="index.php?r=deletereserve&id=' . $row["id_reserve"] . '"  class="btn btn-success btn-block"">Cancelar reserva</a>'; ?>
                            <!--Agregar un botón para descargar el PDF de la reserva -->

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <!-- <a href="index.php?r=formreserve" class="btn btn-success">Reservar.</a> -->
        </div>
        <button type="submit" class="btn btn-success" onclick="generatePDF()">Generar PDF</button>
        <a href="index.php" class="btn btn-success">Volver a la pàgina principal.</a>
    </div>

<script>
    window.jsPDF = window.jspdf.jsPDF;

    function generatePDF() {
    var doc = new jsPDF();

    // Tamaño de fuente para la cabecera
    doc.setFontSize(25);
    doc.text('DATOS RESERVA', 100, 40, { align: 'center' });

    var margenSuperiorElementos = 50;

    // Recorrer todas las reservas y agregar información al PDF
    <?php foreach ($data as $index => $row) : ?>
        doc.setFontSize(16);

        var y = margenSuperiorElementos + 10 * <?php echo $index; ?>;
        doc.text('RESERVA <?php echo $index + 1; ?>:', 10, y);

        y += 20;
        doc.text('Fecha de entrada: <?php echo $row['entry_date']; ?>', 20, y);

        y += 10;
        doc.text('Fecha de salida: <?php echo $row['departure_date']; ?>', 20, y);

        y += 10;
        doc.text('Numero de asistentes: <?php echo $row['num_rooms']; ?>', 20, y);

        y += 10;
        doc.text('Estado de la reserva: <?php echo $row['reserve_status']; ?>', 20, y);

        y += 10;
        doc.text('Estado de la temporada: <?php echo $row['season_status']; ?>', 20, y);

        y += 10;
        doc.text('Precio temporada alta: <?php echo $row['high_season_price']; ?>', 20, y);

        y += 10;
        doc.text('Precio temporada baja: <?php echo $row['low_season_price']; ?>', 20, y);

        y += 20;
        doc.text('DATOS APARTAMENTO:', 10, y);

        y += 20;
        doc.text('Dirección: <?php echo $row['direction']; ?>', 20, y);

        y += 10;
        doc.text('Codigo Postal: <?php echo $row['postal_address']; ?>', 20, y);

        y += 10;
        doc.text('Servicios: <?php echo $row['name_services']; ?>', 20, y);

        // Agregar un salto de página para la siguiente reserva
        if (<?php echo $index; ?> < <?php echo count($data) - 1; ?>) {
            doc.addPage();
        }
        
    <?php endforeach; ?>
    doc.save('Reserva_apartamento.pdf');
}
</script>
</body>
</html>