<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$mensaje = "";
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == "Registrar"){
  $titulo             = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $descripcion        = $_POST['descripcion'];
  $orden              = $_POST['orden'];
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}

  $insertarInteligencia = "INSERT INTO partner_lista(titulo, descripcion, orden, estado)VALUE('$titulo', '$descripcion', '$orden', '$estado')";
  $resultadoInsertar = mysqli_query($enlaces,$insertarInteligencia);
  $mensaje = "<div class='alert alert-success' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <strong>Nota:</strong> El enlace se registr&oacute; exitosamente. <a href='partner-principal.php'>Ir a Partner</a>
        </div>";
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
        document.fcms.action = "partner-lista-nuevo.php";
        document.fcms.proceso.value = "Registrar";
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
    <?php $menu="partner"; include("module/menu.php"); ?>
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
        <?php $page="principal"; include("module/menu-partner.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Nuevo Enlace</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="titulo">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="titulo" type="text" id="titulo" required/>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea data-provide="summernote" data-toolbar="full" id="descripcion" name="descripcion" data-min-height="150"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-8 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" onKeyPress="return soloNumeros(event)" />
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" checked>
                </div>
              </div>

            </div>

            <footer class="card-footer">
              <a href="partner-principal.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-chevron-circle-right"></i> Registrar P&aacute;rrafo</button>
              <input type="hidden" name="proceso">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>