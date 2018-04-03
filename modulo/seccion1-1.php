	<!-- form1-->
	<?php
		$consultarConini = "SELECT * FROM contenidos_inicio WHERE cod_contenido='1' AND estado='1'";
	    $resultadoConini = mysqli_query($enlaces,$consultarConini) or die('Consulta fallida: ' . mysqli_error($enlaces));
	    while($filaConini = mysqli_fetch_array($resultadoConini)){
	    	$xCodigo      	= $filaConini['cod_contenido'];
	        $xContenido_2 	= htmlspecialchars($filaConini['contenido_2']);
			$xContenido_3  	= $filaConini['contenido_3'];
			$xContenido_4  	= $filaConini['contenido_4'];
			$xContenido_5  	= htmlspecialchars($filaConini['contenido_5']);
    ?>
	<div class="content-section-a">
		<div class="container fadeDown" align="center">
			<h1><strong><?php echo $xContenido_2; ?></strong></h1>
			<br/><br />
			<div class="row">
				<div class="col-sm-6 animated fadeInLeftBig" align="right">
					<?php echo $xContenido_3; ?>
				</div>
				<div class="col-sm-6 animated fadeInRightBig" align="center">	
					<img src="cms/assets/img/contenidos/<?php echo $xContenido_4; ?>" class="img-responsive" style="width: 65%; margin-top: 100px;">
					<p><?php echo $xContenido_5; ?></p>				
				</div>
			</div>
		</div>
	</div>
	<?php
    	}
        mysqli_free_result($resultadoConini);
    ?>