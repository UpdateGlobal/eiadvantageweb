<div class="container" style="padding-left: 20px;">
	<br><br>
	<div class="row">
		<div class="col-lg-12">
			<?php
	        	$consultarCertificaciones = "SELECT * FROM certificaciones_principal";
	        	$resultadoCertificaciones = mysqli_query($enlaces, $consultarCertificaciones);
	        	$filaCer = mysqli_fetch_array($resultadoCertificaciones);
					$xTituloc      	= $filaCer['titulo'];
					$xDescripcionc 	= $filaCer['descripcion'];
					$xContactoc		= $filaCer['contacto'];
	        ?>
			<h1><?php echo $xTituloc ?></h1>
			<br><br>
			<?php echo $xDescripcionc; ?>
		</div>
	</div>
	<div class="divider"></div>
</div>
<?php
	if($xContactoc==1){
		include ('modulo/contactobtn.php'); 
	}
?>
<div class="container" style="padding-left: 20px;">
	<?php
		$consultarCertificacionesL = "SELECT * FROM certificaciones_lista ORDER BY orden ASC";
    	$resultadoCertificacionesL = mysqli_query($enlaces, $consultarCertificacionesL);
    	while($filaCerl = mysqli_fetch_array($resultadoCertificacionesL)){
    		$xTitulol   	= $filaCerl['titulo'];
    		$xDescripcionl  = $filaCerl['descripcion'];
    ?>
	<div class="divider"></div>
	<h3><?php echo $xTitulol; ?></h3>
	<?php echo $xDescripcionl; ?>
	<?php
		}
		mysqli_free_result($resultadoCertificacionesL);
	?>
</div>