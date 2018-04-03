<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_inscripcion = $_REQUEST['cod_inscripcion'];

$consultaIns="SELECT * FROM inscripcion WHERE cod_inscripcion='$cod_inscripcion'";
$resultadoIns=mysqli_query($enlaces,$consultaIns);
$filaIns = mysqli_fetch_array($resultadoIns);
$cod_inscripcion     = $filaIns['cod_inscripcion'];
$xNombres            = $filaIns['nombres'];
$xApellidos          = $filaIns['apellidos'];
$xFecha              = $filaIns['fecha_ingreso'];
$xCargo              = $filaIns['cargo'];
$xOrganizacion       = $filaIns['organizacion'];
$xDireccion_d        = $filaIns['direccion_domicilio'];
$xDireccion_e        = $filaIns['direccion_empresa'];
$xCiudad             = $filaIns['ciudad'];
$xEstado             = $filaIns['estado'];
$xPais               = $filaIns['pais'];
$xPostal             = $filaIns['postal'];
$xTelefono_m         = $filaIns['telefono_mobil'];
$xTelefono_d         = $filaIns['telefono_domicilio'];
$xEmail              = $filaIns['correo'];
$xTelefono_e         = $filaIns['telefono_empresa'];
$xCertificacion      = $filaIns['certificacion'];
$xEvaluaciones       = $filaIns['evaluaciones'];
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
                      <td><strong>Nombres y Apellidos:</strong></td>
                      <td><?php echo $xNombres; ?> <?php echo $xApellidos; ?></td>
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
                      <td><strong>Direcci&oacute;n Domicilio:</strong></td>
                      <td><?php echo $xDireccion_d; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Direcci&oacute;n Empresa:</strong></td>
                      <td><?php echo $xDireccion_e; ?></td>
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
                      <td><strong>C&oacute;digo Postal:</strong></td>
                      <td><?php echo $xPostal; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Tel&eacute;fono M&oacute;bil:</strong></td>
                      <td><?php echo $xTelefono_m; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Tel&eacute;fono Domicilio:</strong></td>
                      <td><?php echo $xTelefono_d; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Tel&eacute;fono Empresa:</strong></td>
                      <td><?php echo $xTelefono_e; ?></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <strong>¿C&oacute;mo se enter&oacute; de este Programa de Certificaci&oacute;n?:</strong><br>
                        <?php echo $xCertificacion; ?>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <strong>¿Aplicar&aacute; evaluaciones en su propia empresa o para sus clientes?:</strong><br>
                        <?php echo $xEvaluaciones; ?>
                      </td>
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