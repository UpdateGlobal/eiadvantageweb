<!-- Start top section -->
<div class="top-wrapper sm back2">
   <div class="container">
      <div class="row" style="text-decoration: none;">
        <div class="col-md-4">
        	<?php
              $consultarMet = 'SELECT * FROM metatags';
              $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
              while($filaMet = mysqli_fetch_array($resultadoMet)){
                $xLogo      = $filaMet['logo'];
          ?>
         	<a href="index.php">
            	<img src="/cms/assets/img/meta/<?php echo $xLogo; ?>" class="img-responsive" style="width: 75%; height: 80%;">
          </a>
          <?php
        		}
        		mysqli_free_result($resultadoMet);
          ?>
        </div>
         <div class="col-md-2">
            <ul class="right-link" class="top-social-network">
               <?php
                    $consultarSol = 'SELECT * FROM social WHERE estado=1 ORDER BY orden';
                    $resultadoSol = mysqli_query($enlaces,$consultarSol) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaSol = mysqli_fetch_array($resultadoSol)){
                        $xCodigo    = $filaSol['cod_social'];
                        $xType      = $filaSol['type'];
                        $xLinks     = $filaSol['links'];
               ?>
               <li>
                  <a href="<?php echo $xLinks; ?>">
                  	<i class="fa <?php echo $xType; ?>"></i>
                  </a>
               </li>
               <?php
               		}
               		mysqli_free_result($resultadoSol);
               ?>
            </ul>
         </div>
         <div class="col-md-6">
            <ul class="right-link">
               <li>
                  <a href="/blog.php">Visita Nuestro Blog</a>
               </li>
               <li>
                  <a href="#">Registro Webinar</a>
               </li>
               <li>
                  <a href="/timeline.php">Proximas Certificaciones</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- End top section -->
<style type="text/css">
   .back2{
   background-color: #fff;
   }
</style>