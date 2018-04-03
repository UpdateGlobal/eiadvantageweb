<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_partner = $_REQUEST['cod_partner'];

$consultaIns="SELECT * FROM partner WHERE cod_partner='$cod_partner'";
$resultadoIns=mysqli_query($enlaces,$consultaIns);
$filaIns = mysqli_fetch_array($resultadoIns);
$cod_partner         = $filaIns['cod_partner'];
$xNombres            = $filaIns['nombres'];
$xApellidos          = $filaIns['apellidos'];
$xFecha              = $filaIns['fecha_ingreso'];
$xCargo              = $filaIns['cargo'];
$xOrganizacion       = $filaIns['organizacion'];
$xDireccion          = $filaIns['direccion'];
$xCiudad             = $filaIns['ciudad'];
$xEstado             = $filaIns['estado'];
$xPostal             = $filaIns['postal'];
$xPais               = $filaIns['pais'];
$xTelefono           = $filaIns['telefono'];
$xEmail              = $filaIns['correo'];
$xComentarios        = $filaIns['comentarios'];
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
            <strong>Partner</strong>
            <small></small>
          </h1>
        </div>
        <?php $page="mensajes"; include("module/menu-partner.php"); ?>
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
                      <td scope="col"><strong>Nombres y Apellidos:</strong></td>
                      <td scope="col"><?php echo $xNombres; ?> <?php echo $xApellidos; ?></td>
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
                      <td><strong>C&oacute;digo Postal:</strong></td>
                      <td><?php echo $xPostal; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Pa&iacute;s: </strong></td>
                      <td><?php echo $xPais; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Tel&eacute;fono:</strong></td>
                      <td><?php echo $xTelefono; ?></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <strong>Comentarios:</strong><br>
                        <?php echo $xComentarios; ?>
                      </td>
                    </tr>
                  </table>
                </div>
                <footer class="card-footer">
                  <a href="partner.php" class="btn btn-secondary"><i class="fa fa-reply"></i> Volver a Partners</a>
                  <a href="<?php if($xVisitante=="0"){ ?>partner-delete.php?cod_partner=<?php echo $xCodigo; ?><?php }else{ ?>javascript:visitante();<?php } ?>" class="btn btn-bold btn-danger"><i class="fa fa-trash"></i> Borrar Mensaje</a>
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