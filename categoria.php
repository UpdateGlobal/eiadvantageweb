<?php include("cms/module/conexion.php"); ?>
<?php $slug = $_REQUEST['slug']; ?>
<?php
	$consultarCategorias = "SELECT * FROM noticias_categorias WHERE slug='$slug'";
	$resultadoCategorias = mysqli_query($enlaces, $consultarCategorias);
	$filaCat = mysqli_fetch_array($resultadoCategorias);
		$cod_categoria	= $filaCat['cod_categoria'];
?>
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
		include ('modulo/preload.php');
		include ('modulo/topbar.php');
		include ('modulo/menu.php');
	?>
	<div class="innerheader-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Blog E.I. Advantage Genos International</h2>
					<ol class="breadcrumb">
						<li><a href="/index.php"><i class="fa fa-home"></i> Inicio</a></li>
						<li><a href="/blog.php"><i class="fa fa-clone"></i> Blog</a></li>
						<li><a href=""><i class="fa fa-clone"></i> Categor&iacute;a</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br>
	<?php
		include ('modulo/categorias.php');
		include ('modulo/footer.php');
	?>
	<?php include('modulo/scripts.php'); ?>
</body>
</html>