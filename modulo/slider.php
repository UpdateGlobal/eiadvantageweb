<style type="text/css">
	@media only screen and (max-width: 500px) {
	    .nonemobil{
	       display: none;
	    }
	}
</style>
<div id="slider_container" class="rev_slider_wrapper nonemobil">
	<div id="rev-slider" class="rev_slider"  data-version="5.0">
		<ul> 
			<?php
                $consultarBanner = "SELECT * FROM banners WHERE estado='1' ORDER BY orden";
                $resultadoBanner = mysqli_query($enlaces,$consultarBanner) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaBan = mysqli_fetch_array($resultadoBanner)){
                    $xTitulo    = $filaBan['titulo'];
                    $xTexto    	= $filaBan['texto'];
                    $xImagen    = $filaBan['imagen'];
                    $xOrden     = $filaBan['orden'];
            ?>
			<li data-transition="slideremoveright">
				<!-- MAIN IMAGE -->
				<img src="cms/assets/img/banner/<?php echo $xImagen; ?>" style="height: 400px;" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
					
				<!-- LAYER NR. 2 -->
				<div class="tp-caption cap-boxed secondary-bg" 
					id="slide-1-layer-2" 
					data-x="right" data-hoffset="['60','60','60','20']" 
					data-y="top" data-voffset="['253','218','158','70']" 
					data-width="['600','530','400','250']"
					data-height="['auto','auto','auto','auto']"
					data-transform_idle="o:1;"
					data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
					data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
					data-textAlign="['right','right','right','right']"
					data-whitespace="normal"
					data-type="text" 
					data-fontsize="['42','32','24','14']"
					data-lineheight="['24','24','18','14']"
					data-paddingtop="[20,20,15,10]"
					data-paddingright="[20,20,20,10]"
					data-paddingbottom="[20,20,15,10]"
					data-paddingleft="[20,20,20,10]"
					data-start="2000" 
					data-splitin="none" 
					data-splitout="none" 
					data-responsive_offset="on" 
					style="z-index: 5; white-space: nowrap;"><?php echo $xTitulo; ?>
				</div>
					
				<!-- LAYER NR. 1 -->
				<div class="tp-caption cap-boxed capUppercase-title" 
					id="slide-1-layer-1" 
					data-x="right" data-hoffset="['60','60','60','20']" 
					data-y="top" data-voffset="['170','145','105','35']" 
					data-width="['auto','auto','auto','auto']"
					data-height="['auto','auto','auto','auto']"
					data-transform_idle="o:1;"
					data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
					data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
					data-textAlign="['left','left','left','left']"
					data-whitespace="nowrap"
					data-type="text" 
					data-fontsize="['14','14','11','9']"
					data-paddingtop="[20,20,15,10]"
					data-paddingright="[20,20,20,10]"
					data-paddingbottom="[20,20,15,10]"
					data-paddingleft="[20,20,20,10]"
					data-start="1000" 
					data-splitin="none" 
					data-splitout="none" 
					data-responsive_offset="on" 
					style="z-index: 5; white-space: normal; margin: 40px 0px 0px;"><?php echo $xTexto; ?>
				</div>
				<!-- data-lineheight="['42','32','24','14']" -->  
			</li>
			<?php 
				}
				mysqli_free_result($resultadoBanner);
			?>
		</ul>
	</div>
</div>
<!-- END OF SLIDER WRAPPER -->