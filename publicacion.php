<?php include("cms/module/conexion.php"); ?>
<?php $slug = $_REQUEST['slug']; ?>
<?php 
  $consultaNoticias = "SELECT * FROM noticias WHERE slug='$slug'";
  $ejecutarNoticias = mysqli_query($enlaces,$consultaNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaNot = mysqli_fetch_array($ejecutarNoticias);
    $slug           = $filaNot['slug'];
    $cod_noticia    = $filaNot['cod_noticia'];
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
	<?php include('modulo/post.php'); ?>
	<?php
		include('modulo/footer.php');
	?>
	<?php include('modulo/scripts.php'); ?>
</body>
</html>