<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_programas_lista    = $_REQUEST['cod_programas_lista'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}

if($proceso == ""){
  $consultaProgramas = "SELECT * FROM programas_lista WHERE cod_programas_lista='$cod_programas_lista'";
  $ejecutarProgramas = mysqli_query($enlaces,$consultaProgramas) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaPar = mysqli_fetch_array($ejecutarProgramas);
  $cod_programas_lista      = $filaPar['cod_programas_lista'];
  $titulo                   = htmlspecialchars_decode($filaPar['titulo']);
  $descripcion              = $filaPar['descripcion'];
  $orden                    = $filaPar['orden'];
  $estado                   = $filaPar['estado'];
}
if($proceso=="Actualizar"){ 
  $cod_programas_lista   = $_POST['cod_programas_lista'];
  $titulo              = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $descripcion         = $_POST['descripcion'];
  $orden               = $_POST['orden'];
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
    
  $actualizarProgramas = "UPDATE programas_lista SET cod_programas_lista='$cod_programas_lista', titulo='$titulo', descripcion='$descripcion', orden='$orden', estado='$estado' WHERE cod_programas_lista='$cod_programas_lista'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarProgramas);
  header("Location:programas.php");
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
        document.fcms.action = "programas-lista-edit.php";
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
    <?php $menu="partner"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Programas</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Editar P&aacute;rrafo</strong></h4>
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
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
                </div>
              </div>

            </div>

            <footer class="card-footer">
              <a href="programas.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_programas_lista" value="<?php echo $cod_programas_lista; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>