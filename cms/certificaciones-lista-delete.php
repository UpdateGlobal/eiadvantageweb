<?php include "module/conexion.php"; ?>
<?php include "module/verificar.php"; ?>
<?php 
$cod_certificaciones_lista = $_REQUEST['cod_certificaciones_lista'];
$eliminar = "DELETE FROM certificaciones_lista WHERE cod_certificaciones_lista='$cod_certificaciones_lista'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:certificaciones-principal.php");
?>