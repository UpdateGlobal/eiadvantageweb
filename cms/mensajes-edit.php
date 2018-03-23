<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_contacto = $_REQUEST['cod_contacto'];

$consultaCon="SELECT * FROM formulario WHERE cod_contacto='$cod_contacto'";
$resultadoCon=mysqli_query($enlaces,$consultaCon);
$filaCon = mysqli_fetch_array($resultadoCon);
$cod_contacto     = $filaCon['cod_contacto'];
$xNombres         = $filaCon['nombres'];
$xApellidos       = $filaCon['apellidos'];
$xCargo           = $filaCon['cargo'];
$xOrganizacion    = $filaCon['organizacion'];
$xDireccion       = $filaCon['direccion'];
$xCiudad          = $filaCon['ciudad'];
$xEstado          = $filaCon['estado'];
$xPais            = $filaCon['pais'];
$xTelefono        = $filaCon['telefono'];
$xEmail           = $filaCon['email'];
$xMensaje         = $filaCon['mensaje'];
$xFecha           = $filaCon['fecha_ingreso'];

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
            <strong>Contacto</strong>
            <small></small>
          </h1>
        </div>
        <?php $page="mensajes"; include("module/menu-contacto.php"); ?>
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
                      <td width="20%" scope="col"><strong>Nombres y Apellidos:</strong></td>
                      <td width="80%" scope="col"><?php echo $xNombres; ?> <?php echo $xApellidos; ?></td>
                    </tr>
                    <tr>
                      <td><strong>De:</strong></td>
                      <td><?php echo $xEmail; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Fecha:</strong></td>
                      <td><?php echo $xFecha; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Cargo:</strong></td>
                      <td><?php echo $xCargo; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Organizaci&oacute;n:</strong></td>
                      <td><?php echo $xOrganizacion; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Direcci&oacute;n:</strong></td>
                      <td><?php echo $xDireccion; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Ciudad:</strong></td>
                      <td><?php echo $xCiudad; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Estado:</strong></td>
                      <td><?php echo $xEstado; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Pa&iacute;s:</strong></td>
                      <td><?php echo $xPais; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Tel&eacute;fono:</strong></td>
                      <td><?php echo $xTelefono; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Mensaje:</strong></td>
                      <td><?php echo $xMensaje; ?></td>
                    </tr>
                  </table>
                </div>
                <footer class="card-footer">
                  <a href="mensajes.php" class="btn btn-secondary"><i class="fa fa-reply"></i> Volver a Mensajes</a>
                  <a href="<?php if($xVisitante=="0"){ ?>mensajes-delete.php?cod_contacto=<?php echo $xCodigo; ?><?php }else{ ?>javascript:visitante();<?php } ?>" class="btn btn-bold btn-danger"><i class="fa fa-trash"></i> Borrar Mensaje</a>
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