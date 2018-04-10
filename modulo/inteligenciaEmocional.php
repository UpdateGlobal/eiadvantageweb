<div class="container-fluid container">
	<br><br>
	<div class="row">
		<div class="col-md-12">
			<?php 
				$consultaInteligencia = "SELECT * FROM inteligencia";
				$ejecutarInteligencia = mysqli_query($enlaces,$consultaInteligencia) or die('Consulta fallida: ' . mysqli_error($enlaces));
				$filaInt = mysqli_fetch_array($ejecutarInteligencia);
				  $cod_inteligencia  = $filaInt['cod_inteligencia'];
				  $xTitulon          = htmlspecialchars_decode($filaInt['titulo']);
				  $xDescripcionn     = $filaInt['descripcion'];
			?>
			<div class="row" align="center">
				<h1><?php echo $xTitulon; ?></h1>
			</div>
			<?php echo $xDescripcionn; ?>
			<?php 
				$consultaInteligenciaL = "SELECT * FROM inteligencia_lista WHERE estado='1' ORDER BY orden";
				$ejecutarInteligenciaL = mysqli_query($enlaces,$consultaInteligenciaL) or die('Consulta fallida: ' . mysqli_error($enlaces));
				while($filaIntL = mysqli_fetch_array($ejecutarInteligenciaL)){
					$descripcionl      = $filaIntL['descripcion'];
					$link              = $filaIntL['link'];
			?>
			<div class="icon-center-top">
				<?php echo $descripcionl; ?>
				<button type="button" class="btn">
					<a href="/<?php echo $link; ?>">Ver M&aacute;s</a>
				</button>
			</div>
			<?php
                }
                mysqli_free_result($ejecutarInteligenciaL);
            ?>
		</div>
	</div>
</div>







