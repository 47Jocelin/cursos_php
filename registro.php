
<?php prepara inserta datos 
include 

 if(isset($POST["btn"]);
$Nombre    $conecta->reat.scape.string (POST['nombre'];
$Apellido  $conecta->reat.scape.string  (POST['apellidos'];
$Direccion $conecta->reat.scape.string   (POST['direccion'];
$Telefono  $conecta->reat.scape.string   (POST['telefono'];
$Fecha $conecta->reat.scape.string  (POST['fecha'];
$email     $conecta->reat.scape.string   (POST['email'];

 
if( $Nombre="" if$Apellidos="" if$Direccion=""  if$Telefono=""
ifFecha=""  if$email="" ){
$Alerta ="Alguno de los datos esta vacio";
}
else{

$reistro="INSERT INTO usuario (Nombre.Apellidos,Direccion,Telefono.Fecha.Email)VALUES('$Nombre', '$Apellios','$Direccion,'$Telefopno','$Fecha, '$Email');
$registros =conecta>query($registro),
if($registros>o){
echo"registro exitoso";
}else{
echo "error al registrar";
}

?>