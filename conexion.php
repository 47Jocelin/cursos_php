<?php
$Host = "localhost"";
$UserHost = "root";
$Database = "practicas";
$Contraseña = "";
$conect = mysql_connect($Nombre,$Apellidos,$Direccion,$Telefono,$Fecha,$Email);
if($conect->connect_error){
 die('Error al conectar la base de datos del aplicativo'. $conecta->connect_error);
}
?>