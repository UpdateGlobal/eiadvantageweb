<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_inteligencia_lista    = $_REQUEST['cod_inteligencia_lista'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}

if($proceso == ""){
  $consultaInteligencia = "SELECT * FROM inteligencia_lista WHERE cod_inteligencia_lista='$cod_inteligencia_lista'";
  $ejecutarInteligencia = mysqli_query($enlaces,$consultaInteligencia) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaInt = mysqli_fetch_array($ejecutarInteligencia);
  $cod_inteligencia_lista   = $filaInt['cod_inteligencia_lista'];
  $titulo                   = htmlspecialchars_decode($filaInt['titulo']);
  $descripcion              = $filaInt['descripcion'];
  $link                     = $filaInt['link'];
  $orden                    = $filaInt['orden'];
  $estado                   = $filaInt['estado'];
}
if($proceso=="Actualizar"){ 
  $cod_inteligencia_lista   = $_POST['cod_inteligencia_lista'];
  $titulo                   = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $descripcion              = $_POST['descripcion'];
  $link                     = $_POST['link'];
  $orden                    = $_POST['orden'];
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
    
  $actualizarInteligencia = "UPDATE inteligencia_lista SET cod_inteligencia_lista='$cod_inteligencia_lista', titulo='$titulo', descripcion='$descripcion', link='$link', orden='$orden', estado='$estado' WHERE cod_inteligencia_lista='$cod_inteligencia_lista'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarInteligencia);
  header("Location:inteligencia.php");
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
        document.fcms.action = "inteligencia-lista-edit.php";
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
    <?php $menu="inteligencia"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Inteligencia Emocional</strong>
            <small></small>
          </h1>
        </div>
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
                  <label class="col-form-label" for="link">Enlace:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="link" type="text" id="link" value="<?php echo $link; ?>" required/>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-8 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" value="<?php echo $orden; ?>" required/>
                  <div class="invalid-feedback"></div>
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
              <a href="inteligencia.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_inteligencia_lista" value="<?php echo $cod_inteligencia_lista; ?>">
            </footer>

          </form>
        </div>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>