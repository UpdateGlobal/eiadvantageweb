<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_certifica = $_REQUEST['cod_certifica'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == ""){
  $consultaCarrusel = "SELECT * FROM certificaciones WHERE cod_certifica='$cod_certifica'";
  $ejecutarCarrusel = mysqli_query($enlaces,$consultaCarrusel) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaCer = mysqli_fetch_array($ejecutarCarrusel);
  $titulo       = mysqli_real_escape_string($enlaces, $filaCer['titulo']);
  $fecha        = $filaCer['fecha'];
  $descripcion  = $filaCer['descripcion'];
  $orden        = $filaCer['orden'];
  $estado       = $filaCer['estado'];
}

if($proceso=="Actualizar"){
  $cod_certifica  = $_POST['cod_certifica'];
  $titulo         = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $fecha          = $_POST['fecha'];
  $descripcion    = $_POST['descripcion'];
  $orden          = $_POST['orden'];
  $estado         = $_POST['estado'];

  $actualizarCertifica = "UPDATE certificaciones SET cod_certifica='$cod_certifica', titulo='$titulo', fecha='$fecha', descripcion='$descripcion', orden='$orden', estado='$estado' WHERE cod_certifica='$cod_certifica'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarCertifica) or die('Consulta fallida: ' . mysqli_error($enlaces));
  header("Location:certificaciones.php");
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
      if(document.fcms.fecha.value==""){
        alert("Debe escribir una fecha");
        document.fcms.fecha.focus();
        return;
      }
      document.fcms.action = "certificaciones-edit.php";
      document.fcms.proceso.value="Actualizar";
      document.fcms.submit();
    }
    function soloNumeros(e){ 
      var key = window.Event ? e.which : e.keyCode 
      return ((key >= 48 && key <= 57) || (key==8)) 
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
        <?php $page="proximas"; include("module/menu-certificaciones.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Registrar Certificaci&oacute;n</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="titulo">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="titulo" type="text" id="titulo" value="<?php echo $titulo; ?>" required />
                </div>
              </div>
  
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="fecha">Fecha:</label><br>
                  <small>(Ejemplo: 2013 - Presente)</small>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="fecha" type="text" id="fecha" value="<?php echo $fecha; ?>" required />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="descripcion" id="descripcion"><?php echo $descripcion; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-2 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" value="<?php echo $orden; ?>" onKeyPress="return soloNumeros(event)" />
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
              <a href="certificaciones.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_certifica" value="<?php echo $cod_certifica; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>