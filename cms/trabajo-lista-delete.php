<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php 
$cod_trabajo_lista = $_REQUEST['cod_trabajo_lista'];
$eliminar = "DELETE FROM trabajo_lista WHERE cod_trabajo_lista='$cod_trabajo_lista'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:trabajo.php");
?>