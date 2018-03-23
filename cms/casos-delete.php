<?php include "module/conexion.php"; ?>
<?php include "module/verificar.php"; ?>
<?php 
$cod_caso = $_REQUEST['cod_caso'];
$eliminar = "DELETE FROM casos WHERE cod_caso='$cod_caso'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:casos.php");
?>