				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<aside>
						<div class="widget">
							<h5 class="widget-head">Publicaciones Recientes</h5>
							<ul class="photostream">
								<?php
			                        $consultarNoticias = "SELECT * FROM noticias WHERE estado='1' ORDER BY fecha ASC";
			                        $resultadoNoticias = mysqli_query($enlaces, $consultarNoticias);
			                        while($filaNot = mysqli_fetch_array($resultadoNoticias)){
			                         	$xCodigo 		= $filaNot['cod_noticia'];
			                        	$xImagen		= $filaNot['imagen'];
			                    ?>
								<li><a href="post.php?cod_noticia=<?php echo $xCodigo; ?>"><img src="cms/assets/img/noticias/<?php echo $xImagen; ?>" class="img-responsive" /></a></li>
								<?php 
									}
									mysqli_free_result($resultadoNoticias);
								?>
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
							<h5 class="widget-head">Art&iacute;culos Populares</h5>
							<div class="recent-widget">
								<?php
			                        $consultarNoticias = "SELECT * FROM noticias WHERE estado='1' ORDER BY fecha ASC LIMIT 2";
			                        $resultadoNoticias = mysqli_query($enlaces, $consultarNoticias);
			                        while($filaNot = mysqli_fetch_array($resultadoNoticias)){
			                         	$xCodigo 		= $filaNot['cod_noticia'];
			                         	$xTitulor		= $filaNot['titulo'];
			                        	$xImagen		= $filaNot['imagen'];
			                    ?>
								<div class="post">
									<a href="post.php?cod_noticia=<?php echo $xCodigo; ?>" class="post-thumbnail"><img src="cms/assets/img/noticias/<?php echo $xImagen; ?>" class="img-thumb" style="width: 60px;"></a>
									<h6><a href="post.php?cod_noticia=<?php echo $xCodigo; ?>"><?php echo $xTitulor; ?></a></h6>
								</div>
								<?php } ?>
							</div>
						</div>
					</aside>
				</div>