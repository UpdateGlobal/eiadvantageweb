<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script src="assets/js/visitante-alert.js"></script>
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>
    <?php $menu="inicio"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Inicio</strong>
            <small></small>
          </h1>
        </div>
        <?php $page="contenidos-inicio"; include("module/menu-inicio.php"); ?>
      </header><!--/.header -->
      <div class="main-content">

        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Contenidos de Inicio</strong></h4>
              <div class="card-body">
                <div class="row">
                  <?php
                    $consultarConini = "SELECT * FROM contenidos_inicio WHERE cod_contenido='1'";
                    $resultadoConini = mysqli_query($enlaces,$consultarConini) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaConini = mysqli_fetch_array($resultadoConini)){
                      $xCodigo      = $filaConini['cod_contenido'];
                      $xContenido2  = $filaConini['contenido_2'];
                      $xContenido3  = $filaConini['contenido_3'];
                      $xContenido4  = $filaConini['contenido_4'];
                      $xEstado      = $filaConini['estado'];
                  ?>
                  <div <?php if($xContenido4!=""){?> class="col-8 col-lg-8" <?php }else{ ?> class="col-12 col-lg-12" <?php } ?> >
                    <h5><?php echo $xContenido2; ?></h5>
                    <p><?php 
                      $strCut = substr($xContenido3,0,800);
                      $xContenido3 = substr($strCut,0,strrpos($strCut, ' ')).'...';
                      echo strip_tags($xContenido3);
                    ?></p>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                  </div>
                  <?php if($xContenido4!=""){?>
                  <div class="col-4 col-lg-4">
                    <img class="d-block b-1 border-light hover-shadow-2 p-1" src="assets/img/contenidos/<?php echo $xContenido4; ?>" />
                  </div>
                  <?php } ?>
                  <?php
                    }
                    mysqli_free_result($resultadoConini);
                  ?>
                </div>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="contenidos-inicio-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Contenido</a>
              </div>
              <div class="card-body">
                <div class="row">
                  <?php
                    $consultarConini = "SELECT * FROM contenidos_inicio WHERE cod_contenido='3'";
                    $resultadoConini = mysqli_query($enlaces,$consultarConini) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaConini = mysqli_fetch_array($resultadoConini)){
                      $xCodigo      = $filaConini['cod_contenido'];
                      $xContenido1  = $filaConini['contenido_1'];
                      $xContenido2  = $filaConini['contenido_2'];
                      $xEstado      = $filaConini['estado'];
                  ?>
                  <?php if($xContenido1!=""){?>
                  <div class="col-4 col-lg-4">
                    <img class="d-block b-1 border-light hover-shadow-2 p-1" src="assets/img/contenidos/<?php echo $xContenido1; ?>" />
                  </div>
                  <?php } ?>
                  <div <?php if($xContenido1!=""){?> class="col-8 col-lg-8" <?php }else{ ?> class="col-12 col-lg-12" <?php } ?> >
                    <p><?php 
                        $strCut = substr($xContenido2,0,800);
                        $xContenido2 = substr($strCut,0,strrpos($strCut, ' ')).'...';
                        echo strip_tags($xContenido2);
                      ?></p>
                    <hr>
                    <p><strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong></p>
                  </div>
                </div>
                <?php
                  }
                  mysqli_free_result($resultadoConini);
                ?>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="contenidos-inicio-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Contenido</a>
              </div>
            </div>    
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Valores</strong></h4>
              <div class="card-body">
                <div class="row">
                  <?php
                    $consultarConini = "SELECT * FROM contenidos_inicio WHERE cod_contenido='0'";
                    $resultadoConini = mysqli_query($enlaces,$consultarConini) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaConini = mysqli_fetch_array($resultadoConini)){
                      $xCodigo      = $filaConini['cod_contenido'];
                      $xContenido1  = $filaConini['contenido_1'];
                      $xContenido2  = $filaConini['contenido_2'];
                      $xContenido3  = $filaConini['contenido_3'];
                      $xContenido4  = $filaConini['contenido_4'];
                      $xEstado      = $filaConini['estado'];
                  ?>
                  <div class="col-12 col-lg-3">
                    <div class="alert alert-black" role="alert">
                      <p><?php 
                        $strCut = substr($xContenido1,0,50);
                        $xContenido1 = substr($strCut,0,strrpos($strCut, ' ')).'...';
                        echo strip_tags($xContenido1);
                      ?></p>
                    </div>
                  </div>
                  <div class="col-12 col-lg-3">
                    <div class="alert alert-info" role="alert">
                      <p><?php 
                        $strCut = substr($xContenido2,0,50);
                        $xContenido2 = substr($strCut,0,strrpos($strCut, ' ')).'...';
                        echo strip_tags($xContenido2);
                      ?></p>
                    </div>
                  </div>
                  <div class="col-12 col-lg-3">
                    <div class="alert alert-red" role="alert">
                      <p><?php 
                        $strCut = substr($xContenido3,0,50);
                        $xContenido3 = substr($strCut,0,strrpos($strCut, ' ')).'...';
                        echo strip_tags($xContenido3);
                      ?></p>
                    </div>
                  </div>
                  <div class="col-12 col-lg-3">
                    <div class="alert alert-danger" role="alert">
                      <p><?php 
                        $strCut = substr($xContenido4,0,50);
                        $xContenido4 = substr($strCut,0,strrpos($strCut, ' ')).'...';
                        echo strip_tags($xContenido4);
                      ?></p>
                    </div>  
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-12">
                    <strong>Estado: <?php if($xEstado=="1"){echo "[Activo]";}else{ echo "[Inactivo]"; } ?> </strong>
                  </div>
                </div>
                <?php
                  }
                  mysqli_free_result($resultadoConini);
                ?>
              </div>
              <div class="publisher bt-1 border-light">
                <a href="contenidos-inicio-edit.php?cod_contenido=<?php echo $xCodigo; ?>" class="btn btn-bold btn-primary"><i class="fa fa-refresh"></i> Editar Contenido</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>