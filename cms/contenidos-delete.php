<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php 
$cod_contenidos = $_REQUEST['cod_contenido'];
$eliminar = "DELETE FROM contenidos WHERE cod_contenido='$cod_contenidos'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:contenidos.php");
?>