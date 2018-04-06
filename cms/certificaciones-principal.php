<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
if (isset($_REQUEST['eliminar'])) {
  $eliminar = $_POST['eliminar'];
} else {
  $eliminar = "";
}
if ($eliminar == "true") {
  $sqlEliminar = "SELECT cod_certificaciones_lista FROM certificaciones_lista ORDER BY orden";
  $sqlResultado = mysqli_query($enlaces,$sqlEliminar);
  $x = 0;
  while($filaElim = mysqli_fetch_array($sqlResultado)){
    $id_certificaciones_lista = $filaElim["cod_certificaciones_lista"];
    if ($_REQUEST["chk" . $id_certificaciones_lista] == "on") {
      $x++;
      if ($x == 1) {
          $sql = "DELETE FROM certificaciones_lista WHERE cod_certificaciones_lista=$id_certificaciones_lista";
        } else {
          $sql = $sql . " OR cod_certificaciones_lista=$id_certificaciones_lista";
        }
    }
  }
  mysqli_free_result($sqlResultado);
  if ($x > 0) { 
    $rs = mysqli_query($enlaces,$sql);
  }
  header ("Location:certificaciones-principal.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <style>
      @media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px) {
        td:nth-of-type(1):before { content: "Título"; }
        td:nth-of-type(2):before { content: "Orden"; }
        td:nth-of-type(3):before { content: "Estado"; }
        td:nth-of-type(4):before { content: ""; }
        td:nth-of-type(5):before { content: ""; }
        td:nth-of-type(6):before { content: ""; }
      }
    </style>
    <script>
      function Procedimiento(proceso,seccion){
        document.fcms.proceso.value = "";
        estado = 0;
        for (i = 0; i < document.fcms.length; i++)
            
        if(document.fcms.elements[i].name.substring(0,3) == "chk"){
          if(document.fcms.elements[i].checked == true){
            estado = 1
          }
        }
        if (estado == 0) {
          if (seccion == "N"){
            alert("Debes de seleccionar un categoria.")
          }
          return
        }
        procedimiento = "document.fcms." + proceso + ".value = true"
        eval(procedimiento)
        document.fcms.submit()  
      }
    </script>
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
    <?php $menu="certificaciones"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Certificaciones</strong>
            <small></small>
          </h1>
        </div>
        <?php $page="principal"; include("module/menu-certificaciones.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>P&aacute;gina Principal</strong></h4>
              <div class="card-body">
                <?php
                  $consultarCertificaciones = "SELECT * FROM certificaciones_principal";
                  $resultadoCertificaciones = mysqli_query($enlaces, $consultarCertificaciones);
                  $filaCer = mysqli_fetch_array($resultadoCertificaciones);
                    $xCodigo      = $filaCer['cod_certificaciones_principal'];
                    $xTitulo      = $filaCer['titulo'];
                    $xDescripcion = $filaCer['descripcion'];
                    $xContacto    = $filaCer['contacto'];
                ?>
                <h3><?php echo $xTitulo; ?></h3>
                <p><?php 
                    $strDes = strip_tags($xDescripcion);
                    $strCut = substr($strDes,0,400);
                    $xDescripcion = substr($strCut,0,strrpos($strCut, ' ')).'...';
                    echo $xDescripcion;
                  ?></p>
                <p><strong>Enlace de Contacto (?):</strong> <?php if($xContacto=="1"){ echo "- Si -"; }else{ echo "- No -";} ?></p>
              </div>
              <footer class="card-footer">
                <a class="btn btn-info" href="<?php if($xVisitante=="0"){ ?>certificaciones-principal-edit.php?cod_certificaciones_principal=<?php echo $xCodigo; ?><?php }else{ ?>javascript:visitante();<?php } ?>"><i class="fa fa-pencil"></i> Editar Principal</a>
              </footer>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Formulario</strong></h4>
              <?php
                $consultarCot = 'SELECT * FROM contacto';
                $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
                while($filaCot  = mysqli_fetch_array($resultadoCot)){
                  $xCodigoCont = $filaCot['cod_contact'];
                  $xForins     = $filaCot['inscripcion_mail'];
              ?>
              <div class="card-body">
                <strong>Correo que recibe las nuevas Inscripciones:</strong> <?php echo $xForins; ?>
              </div>
              <footer class="card-footer">
                <a class="btn btn-info" href="certificaciones-principal-form.php?cod_contact=<?php echo $xCodigoCont; ?>"><i class="fa fa-pencil"></i> Editar Correo</a>
              </footer>
              <?php
                }
                mysqli_free_result($resultadoCot);
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Lista de P&aacute;rrafos</strong></h4>
              <div class="card-body">
                <a class="btn btn-info" href="<?php if($xVisitante=="0"){ ?>certificaciones-lista-nuevo.php<?php }else{ ?>javascript:visitante();<?php } ?>"><i class="fa fa-plus"></i> A&ntilde;adir nuevo</a>
                <hr>
                <form name="fcms" method="post" action="">
                  <table class="table">
                    <thead>
                      <tr>
                        <th width="65%" scope="col">T&iacute;tulo
                          <input type="hidden" name="proceso">
                          <input type="hidden" name="eliminar" value="false">
                        </th>
                        <th width="10%" scope="col">Orden</th>
                        <th width="10%" scope="col">Estado</th>
                        <th width="5%" scope="col">&nbsp;</th>
                        <th width="5%" scope="col">&nbsp;</th>
                        <th width="5%" scope="col"><a href="javascript:Procedimiento('eliminar','N');"><img src="assets/img/borrar.png" width="18" height="25" alt="Borrar"></a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $consultarCertificacionesL = "SELECT * FROM certificaciones_lista ORDER BY orden ASC";
                        $resultadoCertificacionesL = mysqli_query($enlaces, $consultarCertificacionesL);
                        while($filaCerl = mysqli_fetch_array($resultadoCertificacionesL)){
                          $xCodigo    = $filaCerl['cod_certificaciones_lista'];
                          $xTitulol   = $filaCerl['titulo'];
                          $xOrden     = $filaCerl['orden'];
                          $xEstado    = $filaCerl['estado'];
                      ?>
                      <tr>
                        <td><?php echo $xTitulol; ?></td>
                        <td><?php echo $xOrden; ?></td>
                        <td><strong><?php if($xEstado=="1"){ echo "[Activo]"; }else{ echo "[Inactivo]";} ?></strong></td>
                        <td><?php if($xVisitante=="0"){ ?><a class="boton-eliminar" href="certificaciones-lista-delete.php?cod_certificaciones_lista=<?php echo $xCodigo; ?>"><i class="fa fa-trash"></i></a><?php }else{ ?><a class="boton-eliminar boton-eliminar-bloqueado" href="javascript:visitante();"><i class="fa fa-trash"></i></a><?php } ?></td>
                        <td><a class="boton-editar" href="certificaciones-lista-edit.php?cod_certificaciones_lista=<?php echo $xCodigo; ?>"><i class="fa fa-pencil-square"></i></a></td>
                        <td><?php if($xVisitante=="0"){?>
                          <div class="hidden">
                            <label class="custom-control custom-control-lg custom-checkbox" for="chkbx-<?php echo $xCodigo; ?>">
                              <input type="checkbox" class="custom-control-input" id="chkbx-<?php echo $xCodigo; ?>" name="chk<?php echo $xCodigo; ?>" />
                              <span class="custom-control-indicator"></span>
                            </label>
                          </div>
                          <?php } ?>
                        </td>
                      </tr>
                      <?php
                        }
                        mysqli_free_result($resultadoCertificacionesL);
                      ?>
                    </tbody>
                  </table>
                </form>
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