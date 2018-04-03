<div class="container-fluid container">
	<div class="row">
    	<?php
            $consultarTrabajo = "SELECT * FROM trabajo";
            $resultadoTrabajo = mysqli_query($enlaces, $consultarTrabajo);
            $filaTra = mysqli_fetch_array($resultadoTrabajo);
                $xCodigo      	= $filaTra['cod_trabajo'];
                $xTituloT     	= $filaTra['titulo'];
                $xDescripcionT 	= $filaTra['descripcion'];
                $xContacto    	= $filaTra['contacto'];
        ?>
		<div class="col-sm-12">
			<div align="center">
				<br><br>
				<h1><?php echo $xTituloT; ?></h1>
				<?php echo $xDescripcionT; ?>
			</div>
			<?php
                $consultarTrabajoL = "SELECT * FROM trabajo_lista ORDER BY orden ASC";
                $resultadoTrabajoL = mysqli_query($enlaces, $consultarTrabajoL);
                while($filaTral = mysqli_fetch_array($resultadoTrabajoL)){
                	$xCodigo    	= $filaTral['cod_trabajo_lista'];
                    $xTitulol   	= $filaTral['titulo'];
                    $xDescripcionl  = $filaTral['descripcion'];
                    $xOrden     	= $filaTral['orden'];
            ?>
			<div class="divider"></div>
			<h3><?php echo $xTitulol; ?></h3>
			<?php echo $xDescripcionl; ?>
			<?php
				}
				mysqli_free_result($resultadoTrabajoL);
			?>
			<div style="padding-top: 30px;"></div>
		</div>
	</div>
</div>