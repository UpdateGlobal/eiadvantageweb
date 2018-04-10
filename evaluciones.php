<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">
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
					<h2>Evaluaciones</h2>
					<ol class="breadcrumb">
						<li><a href="/index.php"><i class="fa fa-home"></i> Inicio</a></li>
						<li><a href="/evaluciones.php"><i class="fa fa-clone"></i> Evaluaciones</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br>
	<?php
    	$consultarEvaluaciones = "SELECT * FROM evaluaciones";
        $resultadoEvaluaciones = mysqli_query($enlaces, $consultarEvaluaciones);
        $filaEva = mysqli_fetch_array($resultadoEvaluaciones);
        	$xCodigo      	= $filaEva['cod_evaluaciones'];
            $xTituloT     	= $filaEva['titulo'];
            $xDescripcionT	= $filaEva['descripcion'];
            $xContacto    	= $filaEva['contacto'];
    ?>
	<?php include('modulo/evaluciones.php'); ?>
	<?php 
		if($xContacto==1){
			include('modulo/contactobtn.php');
		}
	?>
	<?php include('modulo/footer.php'); ?>
	<?php include('modulo/scripts.php'); ?>
</body>
</html>