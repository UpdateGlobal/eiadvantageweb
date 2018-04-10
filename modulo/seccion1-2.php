	<!-- form2-->
	<?php
	    $consultaCon = "SELECT * FROM contenidos_inicio WHERE cod_contenido='3' AND estado='1'";
	    $ejecutarCon = mysqli_query($enlaces,$consultaCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
	    $filaCon = mysqli_fetch_array($ejecutarCon);
	    	$contenido_1      = $filaCon['contenido_1'];
	    	$contenido_2      = $filaCon['contenido_2'];
	    	$contenido_3      = $filaCon['contenido_3'];
	?>
	<div class="content-section-b back">
		<div class="container">
	   		<div class="row">
	        	<div class="col-sm-6 animated fadeInLeftBig">
	            	<img src="/cms/assets/img/contenidos/<?php echo $contenido_1; ?>" class="img-responsive" style="width: 485px; height: 320px;">
	            	<style type="text/css">
	               		.imgdown{ margin-left: 10px; }
	            	</style>
	         	</div>
	         	<div class="col-sm-6 animated fadeInRightBig" data-animation-delay="200">
	            	<br><br><br>
					<?php echo $contenido_2; ?>
	            	<p><a class="btn btn-embossed btn-primary botonposition" id="buttom-mue" role="button">Mas +</a></p>
		            <!-- Form oc2-->
		            <form id="form-mue" action="">
		               <div class="lead3">
		               		<?php echo $contenido_3; ?>
		               </div>
		            </form>
	        	</div>
	     	</div>
		</div>
	</div>
</div>
<!-- Start contain wrapp -->
<div class="contain-wrapp padding-bot30">
	<br><br><br><br><br><br>
	<?php
	    $consultarConini = "SELECT * FROM contenidos_inicio WHERE cod_contenido='0' AND estado='1'";
	    $resultadoConini = mysqli_query($enlaces,$consultarConini) or die('Consulta fallida: ' . mysqli_error($enlaces));
	    while($filaConini = mysqli_fetch_array($resultadoConini)){
	    	$xCodigo      = $filaConini['cod_contenido'];
	        $xContenido1  = $filaConini['contenido_1'];
	        $xContenido2  = $filaConini['contenido_2'];
	        $xContenido3  = $filaConini['contenido_3'];
	        $xContenido4  = $filaConini['contenido_4'];
	        $xEstado      = $filaConini['estado'];
	?>
	<div class="container">
	   <div class="row margin-mintop80 marginbot60">
	      <div class="row">
	         <div class="col-md-12 text-center">
	            <div class="single-line-heading">
	               <h5>Nuestras Fortalezas</h5>
	            </div>
	         </div>
	      </div>
	      <div class="col-md-12">
	         <ul class="process-puzzle">
	            <li>
	            	<div class="puzzle-content default-bg">
	                	<span class="numeric">01</span>
	                	<div class="puzzle-body">
	                		<p>Desarrolla la Inteligencia Emocional del Líder para incrementar el Compromiso de su Gente</p>
	                	</div>
	            	</div>
	            </li>
	            <li>
	            	<div class="puzzle-content primary-bg">
	                	<span class="numeric">02</span>
	                	<div class="puzzle-body">
	                		<p>Crea un ambiente positivo para la Gestión del Cambio, tanto de corto como de largo plazo</p>
	                	</div>
	            	</div>
	            </li>
	            <li>
	            	<div class="puzzle-content jaffa-bg">
	               		<span class="numeric">03</span>
	                	<div class="puzzle-body">
	                  		<p>Mejora sustancialmente el Trabajo en Equipo</p>
	                	</div>
	            	</div>
	            </li>
	            <li>
	            	<div class="puzzle-content picton-bg">
	                	<span class="numeric">04</span>
	                	<div class="puzzle-body">
	                		<p>Incrementa los Resultados de Ventas</p>
	                	</div>
	            	</div>
	            </li>
	    	</ul>
	    </div>
	</div>
</div>
<?php
   	}
   	mysqli_free_result($resultadoConini);
?>
<br><br>