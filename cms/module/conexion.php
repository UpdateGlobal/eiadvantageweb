<?php 
$enlaces = mysqli_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysqli_error($enlaces));
mysqli_select_db($enlaces,'update_inteligencia') or die('No se pudo seleccionar la base de datos');

/*$enlaces = mysqli_connect('localhost', 'eiadvant_update', '3$1myKb-v7cA') or die('No se pudo conectar: ' . mysqli_error($enlaces));
mysqli_select_db($enlaces,'eiadvant_update') or die('No se pudo seleccionar la base de datos'); */

?>