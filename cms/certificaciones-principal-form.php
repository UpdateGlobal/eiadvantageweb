<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_contact  = $_REQUEST['cod_contact'];
if (isset($_REQUEST['proceso'])){
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso==""){
  $consultaContact = "SELECT * FROM contacto WHERE cod_contact='$cod_contact'";
  $ejecutarContact = mysqli_query($enlaces,$consultaContact) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaCot = mysqli_fetch_array($ejecutarContact);
  $xCodigo    = $filaCot['cod_contact'];
  $xForins    = $filaCot['inscripcion_mail'];
}

if($proceso == "Actualizar"){
  $cod_contact  = $_POST['cod_contact'];
  $forins       = $_POST['inscripcion_mail'];

  $ActualizarContact = "UPDATE contacto SET cod_contact='$cod_contact', inscripcion_mail='$forins' WHERE cod_contact='$cod_contact'";
  $resultadoActualizar = mysqli_query($enlaces,$ActualizarContact);
  header("Location:certificaciones-principal.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
      function Validar(){
        if(document.fcms.inscripcion_mail.value==""){
          alert("Debes ingresar un email");
          document.fcms.inscripcion_mail.focus();
          return; 
        }
        if (document.fcms.inscripcion_mail.value.indexOf('@') == -1){
          alert ("La \"dirección de email\" no es correcta");
          document.fcms.inscripcion_mail.focus();
          return;
        }
        document.fcms.action = "certificaciones-principal-form.php";
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
        <?php $page="principal"; include("module/menu-certificaciones.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Editar Correo del Formulario</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <?php if(isset($mensaje)){ echo $mensaje; } else {}; ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label required" for="inscripcion_mail">Correo:</label><br>
                  <small>(Recibe las inscripciones)</small>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="inscripcion_mail" type="email" id="inscripcion_mail" value="<?php echo $xForins; ?>" required/>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

            </div>

            <footer class="card-footer">
              <a href="certificaciones-principal.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_contact" value="<?php echo $xCodigo; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>