<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="es">
<head>
	<?php include ('modulo/headerdescripcion.php'); ?>
</head>
<body>
	<?php
		include('modulo/preload.php');
		include('modulo/topbar.php');
		include('modulo/menu.php');
		include('modulo/slider.php');
		include('modulo/seccion1-1.php');
		include('modulo/seccion1-2.php');
		include('modulo/testimonios.php');
		include('modulo/clientes.php');
		include('modulo/contactobtn.php');
		include('modulo/footer.php');
	?>
	<?php include('modulo/scripts.php'); ?>
</body>
</html>