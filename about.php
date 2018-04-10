<?php include("cms/module/conexion.php"); ?>
<?php $slug = $_REQUEST['slug']; ?>
<?php 
  $consultaNosotros = "SELECT * FROM nosotros WHERE slug='$slug'";
  $ejecutarNosotros = mysqli_query($enlaces,$consultaNosotros) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaNos = mysqli_fetch_array($ejecutarNosotros);
  	$cod_nosotros   = $filaNos['cod_nosotros'];
?>
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
		include ('modulo/preload.php');
		include ('modulo/topbar.php');
		include ('modulo/menu.php');
	?>
	<?php 
   		$consultaNosotros = "SELECT * FROM nosotros WHERE cod_nosotros='$cod_nosotros'";
   		$ejecutarNosotros = mysqli_query($enlaces,$consultaNosotros) or die('Consulta fallida: ' . mysqli_error($enlaces));
   		$filaNos = mysqli_fetch_array($ejecutarNosotros);
	    	$xTitulonos      = $filaNos['titulo'];
	    	$xDescripcionos  = $filaNos['descripcion'];
	    	$xContacto    	 = $filaNos['contacto'];
	?>
	<div class="innerheader-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Nosotros</h2>
					<ol class="breadcrumb">
						<li><a href="/index.php"><i class="fa fa-home"></i> Inicio</a></li>
						<li><a href="/about.php"><i class="fa fa-clone"></i> Nosotros</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br>
	<?php include('modulo/aboutSeccion.php'); ?>
	<?php 
		if($xContacto==1){
			include('modulo/contactobtn.php');
		}
	?>
	<?php include('modulo/footer.php'); ?>
	<?php include('modulo/scripts.php'); ?>
</body>
</html>