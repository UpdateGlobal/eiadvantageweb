<!-- Start contain wrapp -->
<div class="contain-wrapp padding-bot30" style="padding-top: 40px !important; padding-bottom: 40px; background: linear-gradient(to right, #226280 , #15bba4a6);">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="single-line-heading">
               <h5 style="color: #fff;">Clientes Globales</h5>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 owl-column-wrapp">
            <div class="clients fullwidth-column2 owl-carousel owl-theme nav-sm">
               <?php 
                  $consultarCarrusel = "SELECT * FROM carrusel WHERE estado=1 ORDER BY orden";
                  $resultadoCarrusel = mysqli_query($enlaces,$consultarCarrusel) or die('Consulta fallida: ' . mysqli_error($enlaces));
                  while($filaCar = mysqli_fetch_array($resultadoCarrusel)){
                    $xImagen    = $filaCar['imagen'];
               ?>
               <!-- Start item 1 -->
               <div class="item">
               		<div class="clients-logo">
                    	<a href="#">
                    		<img src="cms/assets/img/carrusel/<?php echo $xImagen; ?>" alt="" />
                    	</a>
                	</div>
               </div>
               <!-- End item 1 -->
               <?php
                  }
                  mysqli_free_result($resultadoCarrusel);
               ?>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- End contain wrapp -->