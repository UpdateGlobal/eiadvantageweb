<!-- Start footer -->
<footer>
   <div class="container" >
      <div class="row">
         <div class="col-md-3">
            <div class="widget">
               <h5>Inteligencia Emocional</h5>
               <hr>
               <ul>
                  <li><a class="linkfoot" href="inteligenciaEmocional.php">Que es Inteligencia Emocional</a></li>
                  <?php
                     $consultarInteligenciaLista = "SELECT * FROM inteligencia_lista WHERE estado=1 ORDER BY orden";
                     $resultadoInteligenciaLista = mysqli_query($enlaces, $consultarInteligenciaLista);
                     while($filaIntl = mysqli_fetch_array($resultadoInteligenciaLista)){
                        $xTitulof   = $filaIntl['titulo'];
                        $xLinkf     = $filaIntl['link'];
                  ?>
                  <li><a class="linkfoot" href="<?php echo $xLinkf; ?>"><?php echo $xTitulof; ?></a></li>
                  <?php
                     }
                     mysqli_free_result($resultadoInteligenciaLista);
                  ?>
               </ul>
            </div>
         </div>
         <div class="col-md-3 col-sm-6">
            <div class="widget">
               <h5>Caso de Estudio</h5>
               <hr>
               <ul>
                  <?php
                     $consultarCasos = "SELECT * FROM casos WHERE estado=1 ORDER BY fecha DESC LIMIT 3";
                     $resultadoCasos = mysqli_query($enlaces, $consultarCasos);
                     while($filaCas = mysqli_fetch_array($resultadoCasos)){
                        $xCodigof    = $filaCas['cod_caso'];
                        $xTitulof    = $filaCas['titulo'];
                  ?>
                  <li><a class="linkfoot" href="caso.php?cod_caso=<?php echo $xCodigof; ?>"><?php echo $xTitulof; ?></a></li>
                  <?php
                     }
                     mysqli_free_result($resultadoCasos);
                  ?>
               </ul>
            </div>
         </div>
         <div class="col-md-3 col-sm-6">
            <div class="widget">
               <h5>Programas</h5>
               <hr>
               <ul>
                  <li><a class="linkfoot" href="#">Programas</a></li>
               </ul>
               <hr>
               <h5>Certificacion</h5>
               <ul>
                  <li><a class="linkfoot" href="#">Certificaci&oacute;n</a></li>
               </ul>
               <hr>
               <h5>Evaluaciones</h5>
               <ul>
                  <li><a class="linkfoot" href="#">Evaluaciones</a></li>
                  <li><a class="linkfoot" href="#">Compromiso Empleados</a></li>
               </ul>
               <hr>
            </div>
         </div>
         <div class="col-md-3 col-sm-6">
            <div class="widget">
               <h5>Nosotros</h5>
               <hr>
               <ul>
                  <?php
                    $consultarNosotros = "SELECT * FROM nosotros ORDER BY orden";
                    $resultadoNosotros = mysqli_query($enlaces,$consultarNosotros) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaNos = mysqli_fetch_array($resultadoNosotros)){
                       $xCodigof      = $filaNos['cod_nosotros'];
                       $xTexto_menuf  = $filaNos['texto_menu'];
                  ?>
                  <li><a class="linkfoot" href="about.php?cod_nosotros=<?php echo $xCodigof; ?>"><?php echo $xTexto_menuf; ?></a></li>
                  <?php
                     }
                     mysqli_free_result($resultadoNosotros);
                  ?>
               </ul>
               <h5>Partner</h5>
               <hr>
               <ul>
                  <li><a class="linkfoot" href="#">Partner</a></li>
               </ul>
               <?php
              	   $consultarMet = 'SELECT * FROM metatags';
              	   $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
              	   $filaMet = mysqli_fetch_array($resultadoMet);
                     $xLogo      = $filaMet['logo'];
          	   ?>
               <img src="cms/assets/img/meta/<?php echo $xLogo; ?>" style="width: 100%;">
            </div>
         </div>
      </div>
   </div>
   <div class="subfooter">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <p>2018 &copy; E.I. Advantage | Todos los derechos reservados</p>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- End footer -->