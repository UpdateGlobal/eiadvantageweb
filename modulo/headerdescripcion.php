	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
        $consultarMet = 'SELECT * FROM metatags';
        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
        while($filaMet = mysqli_fetch_array($resultadoMet)){
        	$xTitulo    = $filaMet['titulo'];
            $xSlogan    = $filaMet['slogan'];
            $xDes       = $filaMet['description'];
            $xKey       = $filaMet['keywords'];
            $xUrl       = $filaMet['url'];
            $xFace1     = $filaMet['face1'];
            $xFace2     = $filaMet['face2'];
            $xIco       = $filaMet['ico'];
    ?>
	<title><?php echo $xTitulo; ?> | <?php echo $xSlogan; ?></title>
	<meta name="description" content="<?php echo $xDes; ?>">
	<meta name="keywords" content="<?php echo $xKey; ?>">
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