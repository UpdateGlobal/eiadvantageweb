<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php 
$cod_inscripcion = $_REQUEST['cod_inscripcion'];
$eliminar = "DELETE FROM inscripcion WHERE cod_inscripcion='$cod_inscripcion'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:inscripciones.php");
?>