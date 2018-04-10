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
            	$xSlugCas	= $filaCas['slug'];
                $xTituloc   = $filaCas['titulo'];
                $xImagen    = $filaCas['imagen'];
                $xResumen   = $filaCas['resumen'];
                $xFecha     = $filaCas['fecha'];
                $xEstado    = $filaCas['estado'];
        ?>
		<div class="col-sm-4">
			<div class="thumbnail">
				<img src="/cms/assets/img/casos/<?php echo $xImagen; ?>" class="img-responsive" />
				<div class="content">
					<h4><?php 
						$xTitulo_sub = strip_tags($xTituloc);
                    	$strCut = substr($xTitulo_sub,0,60);
                    	$xTitulo_sub = substr($strCut,0,strrpos($strCut, ' ')).'...';
                    	echo $xTitulo_sub;
                    ?></h4>
					<p><?php 
						$xResumen_sub = strip_tags($xResumen);
                    	$strCut = substr($xResumen_sub,0,400);
                    	$xResumen_sub = substr($strCut,0,strrpos($strCut, ' ')).'...';
                    	echo $xResumen_sub;
                    ?></p>
					<p><a href="/casos/<?php echo $xSlugCas; ?>" class="btn btn-default btn-sm">Leer M&aacute;s</a></p>
				</div>
			</div>
		</div>
		<?php 
			}
			mysqli_free_result($resultadoCasos);
		?>
	</div>
</div>