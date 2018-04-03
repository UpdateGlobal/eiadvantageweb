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
				<h1><span><?php echo $xTitulo; ?></span></h1>
			</div>
			<?php echo $xDescripcionp; ?>
			<div class="divider"></div>

			<h3>Programa de Capacitación de Un Día de Inteligencia Emocional Aplicada</h3>
			<p class="lead text-justify">Nuestro programa específicamente diseñado de un día es ideal para ayudar a los participantes a explorar y poner en práctica métodos de aplicación de herramientas de inteligencia emocional en el trabajo. Estos métodos y herramientas de comportamiento también pueden usarse, por supuesto, fuera del trabajo, en las relaciones personales de los participantes.</p>
			<p class="lead text-justify">Utilizando las herramientas y técnicas que se exploran y practican en este programa, los participantes pueden lograr mejoras en estas áreas:</p>
			<ul style="padding-left: 70px;" class="lead">
				<li>Incrementar la toma de consciencia de sus propias emociones</li>
				<li>La aptitud de reconocer y empatizar con las emociones de los demás y cómo influir en ellos positivamente</li>
				<li>La capacidad de manejar conversaciones controversiales o difíciles</li>
				<li>Incrementar la resiliencia</li>
				<li>La aptitud de ayudar a los demás en situaciones difíciles o adversas</li>
			</ul>
			<p class="lead text-justify">El programa de un día es una manera ideal de presentar a sus colaboradores los beneficios y usos de la consciencia emocional de sí mismos y puede ser el punto de partida perfecto para desarrollos subsiguientes a lo largo y ancho de su organización.</p>

		</div>
	</div>
	<br><br>
</div>