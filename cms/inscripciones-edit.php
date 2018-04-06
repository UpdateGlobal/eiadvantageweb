<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_inscripcion = $_REQUEST['cod_inscripcion'];

$consultaIns="SELECT * FROM inscripcion WHERE cod_inscripcion='$cod_inscripcion'";
$resultadoIns=mysqli_query($enlaces,$consultaIns);
$filaIns = mysqli_fetch_array($resultadoIns);
$cod_inscripcion     = $filaIns['cod_inscripcion'];
$xDireccion          = $filaIns['direccion'];
$xTelefono           = $filaIns['telefono'];
$xEmail              = $filaIns['correo'];
$xFecha              = $filaIns['fecha_ingreso'];
?>
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
    <?php $menu="contacto"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Certificaciones</strong>
            <small>Listado de mensajes recibidos por el formulario de inscripciones</small>
          </h1>
        </div>
        <?php $page="inscripciones"; include("module/menu-certificaciones.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Mensaje enviado el: <?php echo $xFecha; ?></strong></h4>
              <form name="fcms" method="post" action="">
                <div class="card-body">
                  <table class="table" width="100%" border="0">
                    <tr>
                      <td><strong>De:</strong></td>
                      <td><?php echo $xEmail; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Fecha:</strong></td>
                      <td><?php echo $xFecha; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Direcci&oacute;n:</strong></td>
                      <td><?php echo $xDireccion; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Tel&eacute;fono:</strong></td>
                      <td><?php echo $xTelefono; ?></td>
                    </tr>
                  </table>
                </div>
                <footer class="card-footer">
                  <a href="inscripciones.php" class="btn btn-secondary"><i class="fa fa-reply"></i> Volver a Inscripciones</a>
                  <a href="<?php if($xVisitante=="0"){ ?>inscripciones-delete.php?cod_inscripcion=<?php echo $xCodigo; ?><?php }else{ ?>javascript:visitante();<?php } ?>" class="btn btn-bold btn-danger"><i class="fa fa-trash"></i> Borrar Mensaje</a>
                </footer>
              </div>
            </form>  
            </div>
          </div>
        </div>
      </div>
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>