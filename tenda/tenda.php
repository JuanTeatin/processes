<?php
    include '../php/controlador.php';
    $controlador = new controlador();
    $pagina = new paginas();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tenda Technology | Dispositivos y Equipos de Red Tenda | WDC MAYORISTA</title>
    <?php $controlador->head('interno'); ?>
</head>
<body>
    <?php
        $controlador->menu('interno');
        $pagina->tenda();
        $controlador->footer2('interno');
        $controlador->scripts('interno');
    ?>
</body>
</html>