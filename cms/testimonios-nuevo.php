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
  $testimonio   = $_POST['testimonio'];
  $autor        = $_POST['autor'];
  $cargo        = $_POST['cargo'];
  $link         = $_POST['link'];
  $link_text    = $_POST['link_text'];
  if(isset($_POST['orden'])){$orden = $_POST['orden'];}else{$orden = 0;}
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
  $insertarTestimonio = "INSERT INTO testimonios(testimonio, autor, cargo, link, link_text, orden, estado)VALUE('$testimonio', '$autor', '$cargo', '$link', '$link_text', '$orden', '$estado')";
  $resultadoInsertar = mysqli_query($enlaces,$insertarTestimonio);
  $mensaje = "<div class='alert alert-success' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <strong>Nota:</strong> El testimonio se registr&oacute; exitosamente. <a href='testimonios.php'>Ir a Testimonios</a>
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
        if(document.fcms.testimonio.value==""){
          alert("Debe escribir el testimonio");
          return;
        }
        if(document.fcms.autor.value==""){
          alert("Debe escribir un autor");
          return;
        }
        document.fcms.action = "testimonios-nuevo.php";
        document.fcms.proceso.value="Registrar";
        document.fcms.submit();
      }
      function Imagen(codigo){
        url = "agregar-foto.php?id=" + codigo;
        AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
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
    <?php $menu="testimonios"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Testimonios</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Testimonio Nuevo</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>
              
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label require" for="testimonio">Testimonio:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="testimonio" id="testimonio"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label require" for="autor">Autor:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="autor" type="text" id="autor" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="cargo">Cargo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="cargo" type="text" id="cargo" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="link">Enlace:</label>
                </div>
                <div class="col-4 col-lg-5">
                  <input class="form-control" name="link" type="text" id="link" placeholder="Ejm: www.ejemplo.com" />
                  <div class="margin-respo"></div>
                </div>
                <div class="col-4 col-lg-5">
                  <input class="form-control" name="link_text" type="text" id="link_text" placeholder="Texto para el enlace" />
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
              <a href="testimonios.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-chevron-circle-right"></i> Registrar Testimonio</button>
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