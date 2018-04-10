	<div class="contain-wrapp padding-bot30">
		<div class="container">
			<div class="row">
				<?php include("modulo/blogsidebar.php"); ?>
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<?php
						$consultarNoticias = "SELECT * FROM noticias WHERE estado='1'";
						$resultadoNoticias = mysqli_query($enlaces, $consultarNoticias);
						$total_registros = mysqli_num_rows($resultadoNoticias);
						if($total_registros==0){
					?>
					<h2>No hay entradas en nuestro blog, pronto tendremos novedades.</h2>
                    <div style="height: 40px;"></div>
					<?php 
						}else{
							$registros_por_paginas = 3;
							$total_paginas = ceil($total_registros/$registros_por_paginas);
							$pagina = intval($_GET['p']);
							if($pagina<1 or $pagina>$total_paginas){
								$pagina=1;
							}
						$posicion = ($pagina-1)*$registros_por_paginas;
						$limite = "LIMIT $posicion, $registros_por_paginas";

						$consultarNoticias = "SELECT * FROM noticias WHERE estado='1' ORDER BY fecha,cod_noticia ASC $limite";
						$resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
						while($filaNot = mysqli_fetch_array($resultadoNoticias)){
							$xCodigo		= $filaNot['cod_noticia'];
							$xTitulo		= $filaNot['titulo'];
							$xImagen		= $filaNot['imagen'];
							$xDescripcion	= $filaNot['noticia'];
							$xFecha			= $filaNot['fecha'];
							$xSlugn 		= $filaNot['slug'];
					?>
					<!-- Start post 1 -->
					<article class="post">
						<div class="media-wrapper">
							<a href="/blog/<?php echo $xSlugn; ?>"><img src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" class="img-responsive" alt=""></a>
						</div>
						<h4><a href="/blog/<?php echo $xSlugn; ?>"><?php echo $xTitulo; ?></a></h4>
						<p class="text-justify"><?php 
							$xDescripcion_sub = strip_tags($xDescripcion);
	                      	$strCut = substr($xDescripcion_sub,0,480);
	                      	$xDescripcion_sub = substr($strCut,0,strrpos($strCut, ' ')).'...';
	                      	echo $xDescripcion_sub;
	                    ?></p>
						<p><a href="/blog/<?php echo $xSlugn; ?>" class="btn btn-primary">Leer Mas</a></p>
					</article>
					<!-- End post 1 -->
					<?php 
						}
						mysqli_free_result($resultadoNoticias);
					?>
					<?php
						$paginas_mostrar = 10;
						if ($total_paginas>1){
							echo "<div class='col-lg-9 col-md-9 col-sm-8 col-xs-12'>
									<nav>
										<ul class='pagination'>";
								if($pagina>1){
									echo "<li><a href='?p=".($pagina-1)."' aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
								}
								for($i=$pagina; $i<=$total_paginas && $i<=($pagina+$paginas_mostrar); $i++){
									if($i==$pagina){
										echo "<li class='active'><a><strong>$i</strong></a></li>";
									}else{
										echo "<li><a href='?p=$i'>$i</a></li>";
									}
								}
								if(($pagina+$paginas_mostrar)<$total_paginas){
									echo "<li>...</li>";
								}
								if($pagina<$total_paginas){
									echo "	<li><a href='?p=".($pagina+1)."' aria-label='Next'><span aria-hidden='true'>»</span></a></li>";
								}
								echo "	</ul>
									</nav>
								</div>";
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>