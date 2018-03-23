<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_caso    = $_REQUEST['cod_caso'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}

if($proceso == ""){
  $consultaCasos = "SELECT * FROM casos WHERE cod_caso='$cod_caso'";
  $ejecutarCasos = mysqli_query($enlaces,$consultaCasos) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaCas = mysqli_fetch_array($ejecutarCasos);
  $cod_caso     = $filaCas['cod_caso'];
  $titulo       = htmlspecialchars_decode($filaCas['titulo']);
  $resumen      = $filaCas['resumen'];
  $descripcion  = $filaCas['descripcion'];
  $imagen       = $filaCas['imagen'];
  $fecha        = $filaCas['fecha'];
  $estado       = $filaCas['estado'];
}
if($proceso=="Actualizar"){ 
  $cod_caso     = $_POST['cod_caso'];
  $titulo       = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $slug         = $titulo;
  $slug         = preg_replace('~[^\pL\d]+~u', '-', $slug);
  $slug         = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
  $slug         = preg_replace('~[^-\w]+~', '', $slug);
  $slug         = trim($slug, '-');
  $slug         = preg_replace('~-+~', '-', $slug);
  $slug         = strtolower($slug);
  if (empty($slug)){
      return 'n-a';
  }
  $imagen       = $_POST['imagen'];
  $resumen      = $_POST['resumen'];
  $descripcion  = mysqli_real_escape_string($enlaces, $_POST['descripcion']);
  $fecha        = $_POST['fecha'];
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
    
  $actualizarCasos = "UPDATE casos SET cod_caso='$cod_caso', slug='$slug', titulo='$titulo', imagen='$imagen', resumen='$resumen', descripcion='$descripcion', fecha='$fecha', estado='$estado' WHERE cod_caso='$cod_caso'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarCasos);
  header("Location:casos.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
      function Validar(){
        if(document.fcms.titulo.value==""){
          alert("Debe escribir un título");
          document.fcms.titulo.focus();
          return;
        }
        if(document.fcms.descripcion.value==""){
          alert("Debe escribir una descripcion");
          document.fcms.descripcion.focus();
          return;
        }
        document.fcms.action = "casos-edit.php";
        document.fcms.proceso.value="Actualizar";
        document.fcms.submit();
      }
      function Imagen(codigo){
        url = "agregar-foto.php?id=" + codigo;
        AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
      }
    </script>
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
    <?php $menu="casos"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Casos de estudio</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Nuevo Caso</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="titulo">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="titulo" type="text" id="titulo" value="<?php echo $titulo; ?>" required/>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="imagen">Imagen:</label><br>
                  <small>(1140px x 837px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <input class="form-control" id="imagen" name="imagen" type="text" value="<?php echo $imagen; ?>">
                </div>
                <div class="col-4 col-lg-2">
                  <button class="btn btn-info" type="button" name="boton2" onClick="javascript:Imagen('CAS');" /><i class="fa fa-save"></i> Examinar</button>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="resumen">Resumen:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea data-provide="summernote" data-toolbar="full" id="resumen" name="resumen" data-min-height="150"><?php echo $resumen; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea data-provide="summernote" data-toolbar="full" id="descripcion" name="descripcion" data-min-height="150"><?php echo $descripcion; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
                </div>
              </div>

            </div>

            <footer class="card-footer">
              <a href="casos.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="fecha" value="<?php echo $fecha; ?>">
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_caso" value="<?php echo $cod_caso; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>