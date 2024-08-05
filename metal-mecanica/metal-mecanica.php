<?php
	include '../php/controlador.php';
	$controlador = new controlador();
	$pagina = new paginas();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Metalmecanica | Racks y gabinetes Metalmecanica | WDC MAYORISTA</title>
	<?php $controlador->head('interno'); ?>
</head>
<body>
	<?php
		$controlador->menu('interno');
		$pagina->metal_mecanica();
		$controlador->footer2('interno');
		$controlador->scripts('interno');
	?>
</body>
</html>