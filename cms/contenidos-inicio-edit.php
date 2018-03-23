<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_contenido  = $_REQUEST['cod_contenido'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}

if($cod_contenido==0){
  if($proceso==""){
    $consultaCon = "SELECT * FROM contenidos_inicio WHERE cod_contenido='0'";
    $ejecutarCon = mysqli_query($enlaces,$consultaCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
    $filaCon = mysqli_fetch_array($ejecutarCon);
    $cod_contenido = $filaCon['cod_contenido'];
    $contenido_1   = htmlspecialchars($filaCon['contenido_1']);
  }
  if($proceso == "Actualizar"){
    $cod_contenido = $_POST['cod_contenido'];
    $contenido_1   = mysqli_real_escape_string($enlaces, $_POST['contenido_1']);
    $ActualizarCon = "UPDATE contenidos_inicio SET cod_contenido='$cod_contenido', contenido_1='$contenido_1' WHERE cod_contenido='$cod_contenido'";
    $resultadoActualizar = mysqli_query($enlaces,$ActualizarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
    header("Location:contenidos-inicio.php");
  }
}

if($cod_contenido==1){
  if($proceso==""){
    $consultaCon = "SELECT * FROM contenidos_inicio WHERE cod_contenido='1'";
    $ejecutarCon = mysqli_query($enlaces,$consultaCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
    $filaCon = mysqli_fetch_array($ejecutarCon);
    $cod_contenido    = $filaCon['cod_contenido'];
    $contenido_2      = htmlspecialchars($filaCon['contenido_2']);
    $contenido_3      = $filaCon['contenido_3'];
    $contenido_4      = $filaCon['contenido_4'];
    $contenido_5      = htmlspecialchars($filaCon['contenido_5']);
    $estado           = $filaCon['estado'];
  }

  if($proceso == "Actualizar"){
    $cod_contenido    = $_POST['cod_contenido'];
    $contenido_2      = mysqli_real_escape_string($enlaces, $_POST['contenido_2']);
    $contenido_3      = $_POST['contenido_3'];
    $contenido_4      = $_POST['contenido_4'];
    $contenido_5      = mysqli_real_escape_string($enlaces, $_POST['contenido_5']);
    $estado           = $_POST['estado'];
    
    $ActualizarCon = "UPDATE contenidos_inicio SET cod_contenido='$cod_contenido', contenido_2='$contenido_2', contenido_3='$contenido_3', contenido_4='$contenido_4', contenido_5='$contenido_5', estado='$estado' WHERE cod_contenido='$cod_contenido'";
    $resultadoActualizar = mysqli_query($enlaces,$ActualizarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
    header("Location:contenidos-inicio.php");
  }
}

if($cod_contenido==2){
  if($proceso==""){
    $consultaCon = "SELECT * FROM contenidos_inicio WHERE cod_contenido='2'";
    $ejecutarCon = mysqli_query($enlaces,$consultaCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
    $filaCon = mysqli_fetch_array($ejecutarCon);
    $cod_contenido    = $filaCon['cod_contenido'];
    $contenido_2      = htmlspecialchars($filaCon['contenido_2']);
    $contenido_3      = $filaCon['contenido_3'];
    $contenido_4      = $filaCon['contenido_4'];
    $estado           = $filaCon['estado'];
  }

  if($proceso == "Actualizar"){
    $cod_contenido    = $_POST['cod_contenido'];
    $contenido_2      = mysqli_real_escape_string($enlaces, $_POST['contenido_2']);
    $contenido_3      = $_POST['contenido_3'];
    $contenido_4      = $_POST['contenido_4'];
    $estado           = $_POST['estado'];
    
    $ActualizarCon = "UPDATE contenidos_inicio SET cod_contenido='$cod_contenido', contenido_2='$contenido_2', contenido_3='$contenido_3', contenido_4='$contenido_4', estado='$estado' WHERE cod_contenido='$cod_contenido'";
    $resultadoActualizar = mysqli_query($enlaces,$ActualizarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
    header("Location:contenidos-inicio.php");
  }
}

if($cod_contenido==3){
  if($proceso==""){
    $consultaCon = "SELECT * FROM contenidos_inicio WHERE cod_contenido='3'";
    $ejecutarCon = mysqli_query($enlaces,$consultaCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
    $filaCon = mysqli_fetch_array($ejecutarCon);
    $cod_contenido    = $filaCon['cod_contenido'];
    $contenido_1      = $filaCon['contenido_1'];
    $contenido_2      = $filaCon['contenido_2'];
    $contenido_3      = $filaCon['contenido_3'];
    $estado           = $filaCon['estado'];
  }

  if($proceso == "Actualizar"){
    $cod_contenido    = $_POST['cod_contenido'];
    $contenido_1      = $_POST['contenido_1'];
    $contenido_2      = $_POST['contenido_2'];
    $contenido_3      = $_POST['contenido_3'];
    $estado           = $_POST['estado'];

    $ActualizarCon = "UPDATE contenidos_inicio SET cod_contenido='$cod_contenido', contenido_1='$contenido_1', contenido_2='$contenido_2', contenido_3='$contenido_3', estado='$estado' WHERE cod_contenido='$cod_contenido'";
    $resultadoActualizar = mysqli_query($enlaces,$ActualizarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
    header("Location:contenidos-inicio.php");
  }
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
    function Validar(){
      document.fcms.action = "contenidos-inicio-edit.php";
      document.fcms.proceso.value="Actualizar";
      document.fcms.submit();
    }
    function Imagen(codigo){
      url = "agregar-foto.php?id=" + codigo;
      AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
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
    <?php $menu="nosotros"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Contenidos de Inicio</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Editar Contenidos</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if($cod_contenido==0){ ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_1">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_1; ?></p><?php } ?>
                  <input class="form-control" type="text" id="contenido_1" name="contenido_1" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $contenido_1; ?>">
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <?php } ?>
              <?php if($cod_contenido==1){ ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_2">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_2; ?></p><?php } ?>
                  <input class="form-control" type="text" id="contenido_2" name="contenido_2" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $contenido_2; ?>">
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_3">Contenidos:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_3; ?></p><?php } ?>
                  <textarea name="contenido_3" data-provide="summernote" data-min-height="150" <?php if($xVisitante=="1"){ ?> style="display:none;" <?php }else{ ?> <?php } ?> ><?php echo $contenido_3; ?></textarea>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="imagen">Imagen:</label><br>
                  <small>(200px x 121px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_4; ?></p><?php } ?>
                  <input class="form-control" id="imagen" name="contenido_4" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $contenido_4; ?>" />
                </div>
                <div class="col-4 col-lg-2">
                  <?php if($xVisitante=="0"){ ?>
                  <button class="btn btn-bold btn-info" type="button" name="boton4" onClick="javascript:Imagen('CON');" /><i class="fa fa-save"></i> Examinar</button>
                  <?php } ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_5">Texto:</label><br>
                  <small>(Texto de la imagen)</small>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_5; ?></p><?php } ?>
                  <input class="form-control" type="text" id="contenido_5" name="contenido_5" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $contenido_5; ?>">
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="description">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php if($estado=="1"){ echo "[Activo]";}else{ echo "[Inactivo]"; } ?></p><?php }else{ ?>
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
                  <?php } ?>
                </div>
              </div>
              <?php } ?>
              <?php if($cod_contenido==2){ ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_2">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_2; ?></p><?php } ?>
                  <input class="form-control" type="text" id="contenido_2" name="contenido_2" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $contenido_2; ?>">
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_3">Contenidos:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_3; ?></p><?php } ?>
                  <textarea name="contenido_3" data-provide="summernote" data-min-height="150" <?php if($xVisitante=="1"){ ?> style="display:none;" <?php }else{ ?> <?php } ?> ><?php echo $contenido_3; ?></textarea>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="imagen">Imagen:</label><br>
                  <small>(320px x 320px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_4; ?></p><?php } ?>
                  <input class="form-control" id="imagen" name="contenido_4" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $contenido_4; ?>" />
                </div>
                <div class="col-4 col-lg-2">
                  <?php if($xVisitante=="0"){ ?>
                  <button class="btn btn-bold btn-info" type="button" name="boton4" onClick="javascript:Imagen('CON');" /><i class="fa fa-save"></i> Examinar</button>
                  <?php } ?>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php if($estado=="1"){ echo "[Activo]";}else{ echo "[Inactivo]"; } ?></p><?php }else{ ?>
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
                  <?php } ?>
                </div>
              </div>
              
              <?php } ?>
              <?php if($cod_contenido==3){ ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="imagen">Imagen:</label><br>
                  <small>(485px x 320px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_1; ?></p><?php } ?>
                  <input class="form-control" id="imagen" name="contenido_1" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $contenido_1; ?>" />
                </div>
                <div class="col-4 col-lg-2">
                  <?php if($xVisitante=="0"){ ?>
                  <button class="btn btn-bold btn-info" type="button" name="boton4" onClick="javascript:Imagen('CON');" /><i class="fa fa-save"></i> Examinar</button>
                  <?php } ?>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_2">Resumen:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_2; ?></p><?php } ?>
                  <textarea name="contenido_2" data-provide="summernote" data-min-height="100" <?php if($xVisitante=="1"){ ?> style="display:none;" <?php }else{ ?> <?php } ?> ><?php echo $contenido_2; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_3">Contenido Oculto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_3; ?></p><?php } ?>
                  <textarea name="contenido_3" data-provide="summernote" data-min-height="150" <?php if($xVisitante=="1"){ ?> style="display:none;" <?php }else{ ?> <?php } ?> ><?php echo $contenido_3; ?></textarea>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php if($estado=="1"){ echo "[Activo]";}else{ echo "[Inactivo]"; } ?></p><?php }else{ ?>
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
                  <?php } ?>
                </div>
              </div>

              <?php } ?>
            </div>
            <footer class="card-footer">
              <a href="contenidos-inicio.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_contenido" value="<?php echo $cod_contenido; ?>">
            </footer>
          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>