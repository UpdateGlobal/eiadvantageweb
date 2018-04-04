<div class="container fluiz container">
	<div class="row"><br><br>
		<div align="center">
			<h1>Titulo <span>del </span>Post</h1>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3">
			<aside>
				<div class="widget">
					<h5 class="widget-head">Recientes</h5>
					<ul class="photostream">
						<li><a href="#"><img src="http://via.placeholder.com/60x60" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="http://via.placeholder.com/60x60" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="http://via.placeholder.com/60x60" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="http://via.placeholder.com/60x60" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="http://via.placeholder.com/60x60" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="http://via.placeholder.com/60x60" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="http://via.placeholder.com/60x60" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="http://via.placeholder.com/60x60" class="img-responsive" alt=""></a></li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widget-head">Categor&iacute;as</h5>
					<ul class="cat">
						<?php
			                $consultarCategorias = "SELECT * FROM noticias_categorias WHERE estado='1' ORDER BY orden";
			                $resultadoCategorias = mysqli_query($enlaces,$consultarCategorias) or die('Consulta fallida: ' . mysqli_error($enlaces));
			                while($filaCat = mysqli_fetch_array($resultadoCategorias)){
			                	$xCodigoCat = $filaCat['cod_categoria'];
			                	$xCategoria = $filaCat['categoria'];
			            ?>
						<li><a href="blog-categorias.php?cod_categoria=<?php echo $xCodigoCat; ?>"><?php echo $xCategoria; ?></a></li>
						<?php
							}
							mysqli_free_result($resultadoCategorias);
						?>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widget-head">Mas leidos</h5>
					<div class="recent-widget">
						<div class="post">
							<a href="#" class="post-thumbnail"><img src="http://via.placeholder.com/60x60" class="img-thumb" alt=""></a>
							<h6><a href="#">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h6>
						</div>
						<div class="post">
							<a href="#" class="post-thumbnail"><img src="http://via.placeholder.com/60x60" class="img-thumb" alt=""></a>
							<h6><a href="#">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h6>
						</div>		
					</div>
				</div>		
			</aside>
		</div>
		<div class="col-sm-9">
			
			<h5>Publicado por: CEO - Roberto Yep</h5>
			<h5> 15 Enero 2018 / 4:00 pm</h5>
			<img src="http://via.placeholder.com/850x280" class="img-responsive" style="width: auto;">
			<br><h5>Sub Titulo</h5>
			<p class="lead text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<!-- Go to www.addthis.com/dashboard to customize your tools -->
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a392b411b1ea275"></script>
			<!-- Vaya a www.addthis.com/dashboard para personalizar sus herramientas --> 
			<div class = "addthis_inline_share_toolbox"></div>
		</div>
		<br>
	</div>
</div>