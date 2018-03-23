<?php include "module/conexion.php"; ?>
<?php include "module/verificar.php"; ?>
<?php 
$cod_programas_lista = $_REQUEST['cod_programas_lista'];
$eliminar = "DELETE FROM programas_lista WHERE cod_programas_lista='$cod_programas_lista'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:programas.php");
?>