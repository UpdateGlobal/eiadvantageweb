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
  $titulo       = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $fecha        = $_POST['fecha'];
  $descripcion  = $_POST['descripcion'];
  $orden        = $_POST['orden'];
  $estado       = $_POST['estado'];
  
  $insertarCertifica = "INSERT INTO certificaciones(titulo, fecha, descripcion, orden, estado)VALUE('$titulo', '$fecha', '$descripcion', '$orden', '$estado')";
  $resultadoInsertar = mysqli_query($enlaces,$insertarCertifica);
  $mensaje = "<div class='alert alert-success' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <strong>Nota:</strong> La certificaci&oacute;n se registr&oacute; con exitosamente. <a href='certificaciones.php'>Ir a Clientes</a>
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
      if(document.fcms.fecha.value==""){
        alert("Debe asignar una fecha");
        document.fcms.fecha.focus();
        return; 
      }
      document.fcms.action = "certificaciones-nuevo.php";
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
          <h4 class="card-title"><strong>Registrar Certificación</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="titulo">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="titulo" type="text" id="titulo" required />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="fecha">Fecha:</label><br>
                  <small>(Ejemplo: 2013 - Presente)</small>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="fecha" type="text" id="fecha" required />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-2 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" onKeyPress="return soloNumeros(event)" />
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
              <a href="certificaciones.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-chevron-circle-right"></i> Registrar Certificaci&oacute;n</button>
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