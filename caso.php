<?php include("cms/module/conexion.php"); ?>
<?php $slug = $_REQUEST['slug']; ?>
<?php
    $consultarCasos = "SELECT * FROM casos WHERE slug='$slug'";
    $resultadoCasos = mysqli_query($enlaces, $consultarCasos);
    $filaCas = mysqli_fetch_array($resultadoCasos);
		$cod_caso   = $filaCas['cod_caso'];
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
	<div class="innerheader-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Casos de Estudio</h2>
					<ol class="breadcrumb">
						<li><a href="/index.php"><i class="fa fa-home"></i> Inicio</a></li>
						<li><a href="/casoEstudio.php"><i class="fa fa-clone"></i> Casos de Estudio</a></li>
						<li><a href=""><i class="fa fa-clone"></i> Art&iacute;culo</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br>
	<?php
    	$consultarCasos = "SELECT * FROM casos WHERE cod_caso='$cod_caso' ORDER BY fecha DESC";
        $resultadoCasos = mysqli_query($enlaces, $consultarCasos);
        $filaCas = mysqli_fetch_array($resultadoCasos);
			$xTitulocas    = htmlspecialchars_decode($filaCas['titulo']);
			$xResumen      = $filaCas['resumen'];
			$xDescripcion  = $filaCas['descripcion'];
			$xImagen       = $filaCas['imagen'];
			$xFecha        = $filaCas['fecha'];
    ?>
	<?php
		include ('modulo/nota.php');
		include ('modulo/footer.php');
	?>
	<?php include('modulo/scripts.php'); ?>
</body>
</html>