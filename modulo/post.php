<div class="container fluiz container">
	<div class="row">
		<br><br>
		<?php include("modulo/blogsidebar.php"); ?>
		<div class="col-sm-9">
			<?php
				$consultarNoticias = "SELECT * FROM noticias WHERE cod_noticia=$cod_noticia";
				$resultadoNoticias = mysqli_query($enlaces, $consultarNoticias);
				while($filaNot = mysqli_fetch_array($resultadoNoticias)){
				    $xTituloP    	= $filaNot['titulo'];
				    $xSubtitulo    	= $filaNot['subtitulo'];
				    $xImagen    	= $filaNot['imagen'];
				    $xNoticias 		= $filaNot['noticia'];
					$xFechaP     	= $filaNot['fecha'];
			?>
			<div align="center">
				<h1><?php echo $xTituloP; ?></h1>
			</div>
			<h5>
				<?php
					$mydate = strtotime($xFechaP);
					$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
					$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
					echo utf8_decode($dias[date('w', $mydate)]." ".date('d', $mydate)." de ".$meses[date('n', $mydate)-1]. " del ".date('Y', $mydate));
				?>
			</h5>
			<img src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" class="img-responsive" />
			<br>
			<h5><?php echo $xSubtitulo; ?></h5>
			<?php echo $xNoticias; ?>
			<!-- Go to www.addthis.com/dashboard to customize your tools -->
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a392b411b1ea275"></script>
			<!-- Vaya a www.addthis.com/dashboard para personalizar sus herramientas --> 
			<div class = "addthis_inline_share_toolbox"></div>
			<a href="/blog.php" class="btn btn-primary">&laquo; Volver</a>
			<br>
			<?php 
				}
				mysqli_free_result($resultadoNoticias);
			?>
			<br>
		</div>
	</div>
</div>