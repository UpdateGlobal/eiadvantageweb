<div class="container container-fluid " style="padding-left: 30px;">
	<br><br>
	<div class="row">
		<div class="col-md 12">
			<?php
                $consultarProgramas = "SELECT * FROM programas";
                $resultadoProgramas = mysqli_query($enlaces, $consultarProgramas);
                $filaCer = mysqli_fetch_array($resultadoProgramas);
                    $xTitulop      = $filaCer['titulo'];
                    $xDescripcionp = $filaCer['descripcion'];
            ?>
			<div align="center">
				<h1><span><?php echo $xTitulop; ?></span></h1>
			</div>
			<?php echo $xDescripcionp; ?>
			<div class="divider"></div>
			<?php
                $consultarProgramasL = "SELECT * FROM programas_lista ORDER BY orden ASC";
                $resultadoProgramasL = mysqli_query($enlaces, $consultarProgramasL);
                while($filaProl = mysqli_fetch_array($resultadoProgramasL)){
                    $xTitulol   	= $filaProl['titulo'];
                    $xDescripcionl  = $filaProl['descripcion'];
            ?>
			<h3><?php echo $xTitulol; ?></h3>
			<?php echo $xDescripcionl; ?>
			<?php 
				}
				mysqli_free_result($resultadoProgramasL); 
			?>
		</div>
	</div>
	<br><br>
</div>