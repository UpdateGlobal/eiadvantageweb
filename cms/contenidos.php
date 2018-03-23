<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
if (isset($_REQUEST['eliminar'])) {
  $eliminar = $_POST['eliminar'];
} else {
  $eliminar = "";
}
if ($eliminar == "true") {
  $sqlEliminar = "SELECT cod_contenido FROM contenidos ORDER BY orden";
  $sqlResultado = mysqli_query($enlaces,$sqlEliminar);
  $x = 0;
  while($filaElim = mysqli_fetch_array($sqlResultado)){
    $id_contenidos = $filaElim["cod_contenido"];
    if ($_REQUEST["chk" . $id_contenidos] == "on") {
      $x++;
      if ($x == 1) {
          $sql = "DELETE FROM contenidos WHERE cod_contenido=$id_contenidos";
        } else {
          $sql = $sql . " OR cod_contenido=$id_contenidos";
        }
    }
  }
  mysqli_free_result($sqlResultado);
  if ($x > 0) { 
    $rs = mysqli_query($enlaces,$sql);
  }
  header ("Location:contenidos.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <style>
      @media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px) {
        td:nth-of-type(1):before { content: "Título"; }
        td:nth-of-type(2):before { content: "Imagen"; }
        td:nth-of-type(3):before { content: "Archivo"; }
        td:nth-of-type(4):before { content: "Orden"; }
        td:nth-of-type(5):before { content: "Estado"; }
        td:nth-of-type(6):before { content: ""; }
        td:nth-of-type(7):before { content: ""; }
        td:nth-of-type(8):before { content: ""; }
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
    <?php $menu="productos"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Contenidos</strong>
            <small></small>
          </h1>
        </div>
        <?php $page="contenidos"; include("module/menu-categorias.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Lista de Contenidos</strong></h4>
              <div class="card-body">
                <a class="btn btn-info" href="<?php if($xVisitante=="0"){ ?>contenidos-categorias-nuevo.php<?php }else{ ?>javascript:visitante();<?php } ?>"><i class="fa fa-plus"></i> A&ntilde;adir nueva</a>
                <hr>
                <form name="fcms" method="post" action="">
                  <table class="table">
                    <thead>
                      <tr>
                        <th width="25%" scope="col">T&iacute;tulo
                          <input type="hidden" name="proceso">
                          <input type="hidden" name="eliminar" value="false">
                        </th>
                        <th width="35%" scope="col">Imagen</th>
                        <th width="10%" scope="col">Archivo(?)</th>
                        <th width="10%" scope="col">Orden</th>
                        <th width="5%" scope="col">Estado</th>
                        <th width="5%" scope="col">&nbsp;</th>
                        <th width="5%" scope="col">&nbsp;</th>
                        <th width="5%" scope="col"><a href="javascript:Procedimiento('eliminar','N');"><img src="assets/img/borrar.png" width="18" height="25" alt="Borrar"></a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $consultarContenidos = "SELECT cc.cod_menu, cc.categoria, c.* FROM contenidos_categorias as cc, contenidos as c WHERE c.cod_menu=cc.cod_menu ORDER BY orden ASC";
                        $resultadoContenidos = mysqli_query($enlaces, $consultarContenidos);
                        while($filaCon = mysqli_fetch_array($resultadoContenidos)){
                          $xCodigo    = $filaCon['cod_contenido'];
                          $xCategoria = $filaCon['categoria'];
                          $xTitulo    = $filaCon['titulo'];
                          $xImagen    = $filaCon['imagen'];
                          $xArchivo   = $filaCon['archivo'];
                          $xOrden     = $filaCon['orden'];
                          $xEstado    = $filaCon['estado'];
                      ?>
                      <tr>
                        <td><?php echo $xCategoria; ?></td>
                        <td><?php echo $xTitulo; ?></td>
                        <td><?php echo $xImagen; ?></td>
                        <td><?php echo $xArchivo; ?></td>
                        <td><?php echo $xOrden; ?></td>
                        <td><?php if($xCodigo!="0"){?>
                          <strong><?php if($xEstado=="1"){ echo "[Activo]"; }else{ echo "[Inactivo]";} ?></strong>
                        <?php }?></td>
                        <td><?php if($xCodigo!="0"){?>
                          <?php if($xVisitante=="0"){ ?><a class="boton-eliminar" href="productos-categorias-delete.php?cod_contenido=<?php echo $xCodigo; ?>"><i class="fa fa-trash"></i></a><?php }else{ ?><a class="boton-eliminar boton-eliminar-bloqueado" href="javascript:visitante();"><i class="fa fa-trash"></i></a><?php } ?><?php }?>
                        </td>
                        <td><?php if($xCodigo!="0"){?><a class="boton-editar" href="productos-categorias-edit.php?cod_contenido=<?php echo $xCodigo; ?>"><i class="fa fa-pencil-square"></i></a><?php }?></td>
                        <td><?php if($xVisitante=="0"){?>
                          <?php if($xCodigo!="0"){?>
                          <div class="hidden">
                            <label class="custom-control custom-control-lg custom-checkbox" for="chkbx-<?php echo $xCodigo; ?>">
                              <input type="checkbox" class="custom-control-input" id="chkbx-<?php echo $xCodigo; ?>" name="chk<?php echo $xCodigo; ?>" />
                              <span class="custom-control-indicator"></span>
                            </label>
                          </div><?php } ?>
                          <?php } ?>
                        </td>
                      </tr>
                      <?php
                        }
                        mysqli_free_result($resultadoContenidos);
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