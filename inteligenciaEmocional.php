<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="es">
<head>
	<?php include ('modulo/headerdescripcion.php');?>
</head>
<body>
	<?php
		include('modulo/preload.php');
		include('modulo/topbar.php');
		include('modulo/menu.php');
	?>
	<div class="innerheader-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Inteligencia Emocional</h2>
					<ol class="breadcrumb">
						<li><a href="/index.php"><i class="fa fa-home"></i> Inicio</a></li>
						<li><a href="/inteligenciaEmocional.php"><i class="fa fa-clone"></i> Inteligencia Emocional</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br>
	<?php include ('modulo/inteligenciaEmocional.php'); ?>
	<?php 
		$consultaInteligencia = "SELECT * FROM inteligencia";
		$ejecutarInteligencia = mysqli_query($enlaces,$consultaInteligencia) or die('Consulta fallida: ' . mysqli_error($enlaces));
		$filaInt = mysqli_fetch_array($ejecutarInteligencia);
		$xContacto = $filaInt['contacto'];
		if($xContacto==1){
			include ('modulo/contactobtn.php');
		}
	?>
	<?php include ('modulo/footer.php'); ?>
	<?php include ('modulo/scripts.php'); ?>
</body>
</html>