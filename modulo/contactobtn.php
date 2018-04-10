<!--contacto-->
<div class="cta-wrapp inverse-bg">
	<div class="container" style="padding-top: 10px;">
		<div class="row">
			<div class="col-md-12" align="center">
				<?php
          $consultarMet = 'SELECT * FROM metatags';
          $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
          while($filaMet = mysqli_fetch_array($resultadoMet)){
            $xLogo      = $filaMet['logo'];
        ?>
        <a href="index.php">
          <img src="/cms/assets/img/meta/<?php echo $xLogo; ?>" class="img-responsive" style="padding: 30px 400px 30px;">
        </a>
        <?php
        	}
        	mysqli_free_result($resultadoMet);
        ?>
				<h1 style="color: black; margin-left: 250px; margin-right: 250px; text-align: center; font-size: 24px;" class="lead">Game changing for business. Life changing for people.</h1>
				<h4 style="color: black; margin-left: 250px; margin-right: 250px; text-align: center; font-size: 14px;" class="lead">“Ayudamos a profesionales y ejecutivos a aplicar habilidades esenciales de inteligencia emocional que mejoran su consciencia de sí mismos, empatía, liderazgo y resiliencia”.</h4>
				<button class="btn btn-primary btn-radius btn-strok" type="submit"><a href="/contacto.php" style="color: #fff;"> Contactanos</a></button>
			</div>
		</div>
	</div>
</div>
<!--contacto-->