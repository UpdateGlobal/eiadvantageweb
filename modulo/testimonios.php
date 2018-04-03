	<!-- Start parallax -->
	<div class="contain-wrapp" style="padding-top: 0px !important;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="single-line-heading">
						<h5>Testimonios</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 owl-column-wrapp">
					<div class="fullwidth-column owl-carousel owl-theme">
						<?php
	                        $consultarTestimonio = "SELECT * FROM testimonios WHERE estado=1 ORDER BY orden";
	                        $resultadoTestimonio = mysqli_query($enlaces,$consultarTestimonio) or die('Consulta fallida: ' . mysqli_error($enlaces));
	                        while($filaTes = mysqli_fetch_array($resultadoTestimonio)){
	                          $xCodigo    	= $filaTes['cod_testimonio'];
	                          $xAutor    	= $filaTes['autor'];
	                          $xDescripcion = $filaTes['testimonio'];
	                          $xCargo     	= $filaTes['cargo'];  
	                          $xLink		= $filaTes['link'];
	                          $xLink_text	= $filaTes['link_text'];    
	                    ?>
						<div class="item">
							<div class="testimoni-wrapp">
								<div class="testimoni">
									<blockquote>
										<p class="lead texttesti">
											<?php echo $xDescripcion; ?>
										</p>
									</blockquote>
								</div>
								<div class="testimoni-author">
									<h6 style="font-family: 'WorkSans-SemiBold';">
										<?php echo $xAutor; ?>
									</h6>
									<p><?php echo $xCargo; ?> -
										<a href="<?php echo $xLink; ?>"><?php echo $xLink_text; ?></a>
									</p>
								</div>
							</div>
						</div>
						<?php
						}
						mysqli_free_result($resultadoTestimonio);	 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End contain wrapp -->