<style type="text/css">
   .back{ background: linear-gradient(to right, #223c71 , #15bba4); }
</style>
<div class="clearfix"></div>
<!-- Start Navigation -->
<nav class="navbar navbar-default navbar-sticky bootsnav back">
   <!-- Start Top Search -->
   <div class="top-search">
      <div class="container">
         <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Type something ann hit enter">
            <span class="input-group-addon close-search">
            	<i class="fa fa-times"></i>
            </span>
         </div>
      </div>
   </div>
   <!-- End Top Search -->
   <div class="container">
      <!-- Start Header Navigation -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
         	<i class="fa fa-bars"></i>
         </button>
      </div>
      <!-- End Header Navigation -->
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-menu">
         <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
            <li>
               <a href="/index.php">Inicio</a>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle">Nosotros</a>
               <ul class="dropdown-menu" style="margin-top: -5px;">
                  <?php
                    $consultarNosotros = "SELECT * FROM nosotros ORDER BY orden";
                    $resultadoNosotros = mysqli_query($enlaces,$consultarNosotros) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaNos = mysqli_fetch_array($resultadoNosotros)){
                       $xSlugnos		 = $filaNos['slug'];
                       $xTexto_menum = $filaNos['texto_menu'];
                  ?>
                  <li>
                     <a href="/nosotros/<?php echo $xSlugnos; ?>"><?php echo $xTexto_menum; ?></a>
                  </li>
                  <?php
                  	}
                     mysqli_free_result($resultadoNosotros);
                  ?>
               </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inteligencia Emocional</a>
               <ul class="dropdown-menu" style="margin-top: -5px;">
               	<li class="dropdown.menu">
                     <a href="/inteligenciaEmocional.php">&iquest;Qu&eacute; es Inteligencia Emocional?</a>
                  </li>
                  <?php
                  	$consultarInteligenciaLista = "SELECT * FROM inteligencia_lista WHERE estado=1 ORDER BY orden";
                  	$resultadoInteligenciaLista = mysqli_query($enlaces, $consultarInteligenciaLista);
                  	while($filaIntl = mysqli_fetch_array($resultadoInteligenciaLista)){
                    	   $xTitulom   = $filaIntl['titulo'];
                    	   $xLinkm		= $filaIntl['link'];
                  ?>
                  <li class="dropdown.menu">
                     <a href="/<?php echo $xLinkm; ?>"><?php echo $xTitulom; ?></a>
                  </li>
                  <?php
                  	}
                  	mysqli_free_result($resultadoInteligenciaLista);
                  ?>
               </ul>
            </li>
            <li>
               <a href="/casoEstudio.php">Estudio de Caso</a>
            </li>
            <li>
               <a href="/programas.php">Programas</a>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Certificaciones</a>
               <ul class="dropdown-menu" style="margin-top: -5px;">
                  <li class="dropdown">
                     <a href="/certificacionDetalles.php">Detalles de Certificado</a>
                  </li>
                  <li>
                     <a href="/inscribeteya.php">Inscribete ya</a>
                  </li>
               </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Evaluaciónes</a>
               <ul class="dropdown-menu" style="margin-top: -5px;">
                  <li class="dropdown">
                     <a href="/evaluciones.php">Evaluaciónes</a>
                  </li>
                  <li>
                     <a href="/compromisoEmpleado.php">Compromiso de los Trabajadores</a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="/partner.php">Partner</a>
            </li>
            <li>
               <a href="/contacto.php">Contacto</a>
            </li>
         </ul>
      </div>
      <!-- /.navbar-collapse -->
   </div>
</nav>
<!-- End Navigation -->