<div class="container-fluid container" align="center">
	<div class="row">
		<br><br>
		<h1>Casos <span>de </span>Estudio</h1>
		<br><br>
		<?php
            $consultarCasos = "SELECT * FROM casos ORDER BY fecha DESC";
            $resultadoCasos = mysqli_query($enlaces, $consultarCasos);
            while($filaCas = mysqli_fetch_array($resultadoCasos)){
            	$xCodigo    = $filaCas['cod_caso'];
                $xTitulo    = $filaCas['titulo'];
                $xImagen    = $filaCas['imagen'];
                $xResumen   = $filaCas['resumen'];
                $xFecha     = $filaCas['fecha'];
                $xEstado    = $filaCas['estado'];
        ?>
		<div class="col-sm-4">
			<div class="thumbnail">
				<img src="cms/assets/img/casos/<?php echo $xImagen; ?>" class="img-responsive" style="width: 360px; height: 240px;" />
				<div class="content">
					<h4><?php 
						$xTitulo_sub = strip_tags($xTitulo);
                      $strCut = substr($xTitulo,0,100);
                      $xTitulo = substr($strCut,0,strrpos($strCut, ' ')).'...';
                      echo strip_tags($xTitulo);
                    ?></h4>
					<p><?php 
                      $strCut = substr($xResumen,0,400);
                      $xResumen = substr($strCut,0,strrpos($strCut, ' ')).'...';
                      echo strip_tags($xResumen);
                    ?></p>
					<p><a href="caso.php?cod_caso='<?php echo $Codigo; ?>'" class="btn btn-default btn-sm">Leer M&aacute;s</a></p>
				</div>
			</div>
		</div>
		<?php 
			}
			mysqli_free_result($resultadoCasos);
		?>
	</div>
</div>