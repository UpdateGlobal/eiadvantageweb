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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
        $consultarMet = 'SELECT * FROM metatags';
        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaMet = mysqli_fetch_array($resultadoMet);
        	$xTitulo    = $filaMet['titulo'];
            $xKey       = $filaMet['keywords'];
            $xUrl		= $filaMet['url'];
            $xIco       = $filaMet['ico'];
    ?>
	<?php
		$consultarNoticias = "SELECT * FROM noticias WHERE cod_noticia=$cod_noticia";
		$resultadoNoticias = mysqli_query($enlaces, $consultarNoticias);
		$filaNot = mysqli_fetch_array($resultadoNoticias);
			$xTituloP    	= $filaNot['titulo'];
			$xImagen    	= $filaNot['imagen'];
			$xDescripcion 	= $filaNot['noticia'];
	?>
	<title><?php echo $xTitulo; ?> | <?php echo $xTituloP; ?></title>
	<meta name="description" content="<?php 
							$xDescripcion_sub = strip_tags($xDescripcion);
	                      	$strCut = substr($xDescripcion_sub,0,180);
	                      	$xDescripcion_sub = substr($strCut,0,strrpos($strCut, ' ')).'...';
	                      	echo $xDescripcion_sub;
	                    ?>">
	<meta name="keywords" content="<?php echo $xKey; ?>">
	
	<meta name="DC.title" content="<?php echo $xTituloP; ?>" />
	<meta name="DC.description" lang="es" content="<?php echo $xDes; ?>" />
	<meta name="geo.region" content="PE-LIM" />
	
	<meta property="og:title" content="<?php echo $xTituloP; ?>" />
	<meta property="og:type" content="company" />
	<meta property="og:description" content="<?php echo $xNoticias; ?>" />
	<meta property="og:url" content="<?php echo $xUrl; ?>" />
	<meta property="og:image" content="<?php echo $xUrl; ?>/cms/assets/img/noticias/<?php echo $xImagen; ?>" />
	<meta property="og:image" content="<?php echo $xUrl; ?>/cms/assets/img/meta/<?php echo $xFace1; ?>" />
	<meta property="og:image" content="<?php echo $xUrl; ?>/cms/assets/img/meta/<?php echo $xFace2; ?>" />

	
	<link rel="icon" href="/cms/assets/img/meta/<?php echo $xIco; ?>">
	<meta name="robots" content="index,follow">

	<!-- Bootstrap Core CSS -->
	<link href="/css/bootstrap.css" rel="stylesheet">

	<!-- RS5.0 Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="/css/revolution/settings.css">

	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="/css/revolution/layers.css">
	<link rel="stylesheet" type="text/css" href="/css/revolution/navigation.css">

	<link href="/css/style.css" rel="stylesheet">

	<!-- Color -->
	<link id="skin" href="/skins/default.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style type="text/css">
		.lead{
			text-align: justify;
			font-size: 18px;
		}
	</style>
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