<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$mensaje = "";
$cod_nosotros = $_REQUEST['cod_nosotros'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}

if($proceso == ""){
  $consultaNosotros = "SELECT * FROM nosotros WHERE cod_nosotros='$cod_nosotros'";
  $ejecutarNosotros = mysqli_query($enlaces,$consultaNosotros) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaNos = mysqli_fetch_array($ejecutarNosotros);
  $cod_nosotros       = $filaNos['cod_nosotros'];
  $titulo             = $filaNos['titulo'];
  $texto_menu         = $filaNos['texto_menu'];
  $descripcion        = $filaNos['descripcion'];
  $contacto           = $filaNos['contacto'];
  $orden              = $filaNos['orden'];
  $estado             = $filaNos['estado'];
}

if($proceso == "Actualizar"){
  $cod_nosotros = $_POST['cod_nosotros'];
  $titulo       = $_POST['titulo'];
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
  $texto_menu   = $_POST['texto_menu'];
  $descripcion  = $_POST['descripcion'];
  if(isset($_POST['contacto'])){$contacto = $_POST['contacto'];}else{$contacto = 0;}
  if(isset($_POST['orden'])){$orden = $_POST['orden'];}else{$orden = 0;}
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
  $insertarNosotros = "UPDATE nosotros SET cod_nosotros='$cod_nosotros', titulo='$titulo', slug='$slug', texto_menu='$texto_menu', descripcion='$descripcion', contacto='$contacto', orden='$orden', estado='$estado' WHERE cod_nosotros='$cod_nosotros'";
  $resultadoInsertar = mysqli_query($enlaces,$insertarNosotros);
  header("Location:nosotros.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script type="text/javascript">
      function Validar(){
        if(document.fcms.titulo.value==""){
          alert("Debe escribir un Título");
          return;
        }
        if(document.fcms.texto_menu.value==""){
          alert("Debe escribir un texto para el submenú");
          return;
        }
        document.fcms.action = "nosotros-edit.php";
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
    <?php $menu="nosotros"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Nosotros</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Nosotros Nuevo</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              
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
                  <label class="col-form-label required" for="texto_menu">Texto men&uacute;:</label><br>
                  <small>(Texto para el submen&uacute;)</small>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="texto_menu" type="text" id="texto_menu" value="<?php echo $texto_menu; ?>" required />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="descripcion">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea class="form-control" name="descripcion" data-toolbar="full" id="descripcion" data-provide="summernote" data-min-height="150"><?php echo $descripcion; ?></textarea>
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
                  <label class="col-form-label" for="contacto">Contacto:</label>
                </div>
                <div class="col-2 col-lg-10">
                  <input type="checkbox" id="contacto" name="contacto" data-size="small" data-provide="switchery" value="1" <?php if($contacto=="1"){echo "checked";} ?>>
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
              <a href="nosotros.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="cod_nosotros" value="<?php echo $cod_nosotros; ?>">
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