<div class="container-fluid container">
	<div class="row">
		<div align="center">
			<br><br>
			<h1><?php echo $xTituloT; ?></h1>
			<br>
		</div>
		<div class="col-sm-12">
			<?php echo $xDescripcionT; ?>
		</div>
		<div class="divider"></div>
		<div class="col-sm-12">
			<h3>Evaluaciones Generales de IE en el Trabajo</h3>
			<br>
			<?php
                $consultarEvaluacionesL = "SELECT * FROM evaluaciones_lista WHERE estado='1' ORDER BY orden ASC";
                $resultadoEvaluacionesL = mysqli_query($enlaces, $consultarEvaluacionesL);
                while($filaEval = mysqli_fetch_array($resultadoEvaluacionesL)){
                	$xCodigo    	= $filaEval['cod_evaluaciones_lista'];
                    $xTitulol   	= $filaEval['titulo'];
                    $xDescripcion   = $filaEval['descripcion'];
                    $xImagen    	= $filaEval['imagen'];
                    $xOrden     	= $filaEval['orden'];
            ?>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" align="right">
				<img src="/cms/assets/img/evaluaciones/<?php echo $xImagen; ?>" class="img-responsive">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h3><?php echo $xTitulol; ?></h3>
				<?php echo $xDescripcion; ?>
			</div>
			<div class="divider"></div>
			<?php
				}
				mysqli_free_result($resultadoEvaluacionesL);
			?>
		</div>
	</div>
</div>