<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_evaluaciones   = $_REQUEST['cod_evaluaciones'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}

if($proceso == ""){
  $consultaEvaluaciones = "SELECT * FROM evaluaciones WHERE cod_evaluaciones='$cod_evaluaciones'";
  $ejecutarEvaluaciones = mysqli_query($enlaces,$consultaEvaluaciones) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaEva = mysqli_fetch_array($ejecutarEvaluaciones);
  $cod_evaluaciones  = $filaEva['cod_evaluaciones'];
  $titulo            = htmlspecialchars_decode($filaEva['titulo']);
  $descripcion       = $filaEva['descripcion'];
  $contacto          = $filaEva['contacto'];
}

if($proceso=="Actualizar"){
  $cod_evaluaciones   = $_POST['cod_evaluaciones'];
  $titulo             = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $descripcion        = mysqli_real_escape_string($enlaces, $_POST['descripcion']);
  if(isset($_POST['contacto'])){$contacto = $_POST['contacto'];}else{$contacto = 0;}
    
  $actualizarEvaluaciones = "UPDATE evaluaciones SET cod_evaluaciones='$cod_evaluaciones', titulo='$titulo', descripcion='$descripcion', contacto='$contacto' WHERE cod_evaluaciones='$cod_evaluaciones'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarEvaluaciones);
  header("Location:evaluaciones.php");
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
        document.fcms.action = "evaluaciones-edit.php";
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
            <strong>Evaluaciones</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Editar P&aacute;gina Principal</strong></h4>
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
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea data-provide="summernote" data-toolbar="full" id="descripcion" name="descripcion" data-min-height="150"><?php echo $descripcion; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contacto">Contacto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="contacto" data-size="small" data-provide="switchery" value="1" <?php if($contacto=="1"){echo "checked";} ?>>
                </div>
              </div>

            </div>

            <footer class="card-footer">
              <a href="evaluaciones.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_evaluaciones" value="<?php echo $cod_evaluaciones; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>