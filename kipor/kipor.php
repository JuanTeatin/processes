<?php
	include '../php/controlador.php';
	$controlador = new controlador();
	$pagina = new paginas();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kipor | Plantas Electricas</title>
	<?php $controlador->head('interno'); ?>
</head>
<body>
	<?php
		$controlador->menu('interno');
		$pagina->kipor();
		$controlador->footer2('interno');
		$controlador->scripts('interno');
	?>
</body>
</html>