<?php include "module/conexion.php"; ?>
<?php include "module/verificar.php"; ?>
<?php 
$cod_evaluaciones_lista = $_REQUEST['cod_evaluaciones_lista'];
$eliminar = "DELETE FROM evaluaciones_lista WHERE cod_evaluaciones_lista='$cod_evaluaciones_lista'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:evaluaciones.php");
?>