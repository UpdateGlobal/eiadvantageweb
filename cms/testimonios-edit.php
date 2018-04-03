<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_testimonio = $_REQUEST['cod_testimonio'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == ""){
  $consultaTestimonio = "SELECT * FROM testimonios WHERE cod_testimonio='$cod_testimonio'";
  $ejecutarTestimonio = mysqli_query($enlaces,$consultaTestimonio) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaTes = mysqli_fetch_array($ejecutarTestimonio);
  $cod_testimonio   = $filaTes['cod_testimonio'];
  $testimonio       = $filaTes['testimonio'];
  $autor            = htmlspecialchars($filaTes['autor']);
  $cargo            = htmlspecialchars($filaTes['cargo']);
  $link             = $filaTes['link'];
  $link_text        = $filaTes['link_text'];
  $orden            = $filaTes['orden'];
  $estado           = $filaTes['estado'];
}
if($proceso=="Actualizar"){ 
  $cod_testimonio   = $_POST['cod_testimonio'];
  $testimonio       = $_POST['testimonio'];
  $autor            = mysqli_real_escape_string($enlaces, $_POST['autor']);
  $cargo            = mysqli_real_escape_string($enlaces, $_POST['cargo']);
  $link             = $_POST['link'];
  $link_text        = $_POST['link_text'];
  $orden            = $_POST['orden'];
  $estado           = $_POST['estado'];
  $actualizarTestimonio = "UPDATE testimonios SET cod_testimonio='$cod_testimonio', testimonio='$testimonio', autor='$autor', cargo='$cargo', link='$link', link_text='$link_text', orden='$orden', estado='$estado' WHERE cod_testimonio='$cod_testimonio'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarTestimonio) or die('Consulta fallida: ' . mysqli_error($enlaces));
  
  header("Location:testimonios.php");
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
        document.fcms.action = "testimonios-edit.php";
        document.fcms.proceso.value="Actualizar";
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
          <h4 class="card-title"><strong>Editar Testimonio</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label require" for="testimonio">Testimonio:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="testimonio" id="testimonio"><?php echo $testimonio; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label require" for="autor">Autor:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="autor" type="text" id="autor" value="<?php echo $autor; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="cargo">Cargo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="cargo" type="text" id="cargo" value="<?php echo $cargo; ?>" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4 col-lg-2 col-xs-12">
                  <label class="col-form-label" for="link">Enlace:</label>
                </div>
                <div class="col-md-4 col-lg-5 col-xs-12">
                  <input class="form-control" name="link" type="text" id="link" placeholder="Ejm: www.ejemplo.com" value="<?php echo $link; ?>" />
                  <div class="margin-respo"></div>
                </div>
                <div class="col-md-4 col-lg-5 col-xs-12">
                  <input class="form-control" name="link_text" type="text" id="link_text" placeholder="Texto para el enlace" value="<?php echo $link_text; ?>" />
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
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado="1"){echo "checked";} ?>>
                </div>
              </div>

            </div>
            <footer class="card-footer">
              <a href="testimonios.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_testimonio" value="<?php echo $cod_testimonio; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>