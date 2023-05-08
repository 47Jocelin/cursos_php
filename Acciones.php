<?php
incluír "conecta.php";

if (ISSET($_POST['btn'])){
    $Nombre = $conecta->real_escape_string($_POST['Nombre']);
    $apellidos = $conecta->real_escape_string($_POST['apellidos']);
    $Direccion = $conecta->real_escape_string($_POST['Direccion']);
    $Telefono = $conecta->real_escape_string($_POST['Telefono']);
    $Fecha = $conecta->real_escape_string($_POST['Fecha']);
    $email = $conecta->real_escape_string($_POST['email']);
    if($Nombre== " " || $apellidos== " " || $Direccion== " " || $Telefono==" " || $Fecha==" " || $Email electrónico== " "){
       $Alerta="Alguno de los datos estan vacios";
    }    
    else{ 
        $registro="INSERT INTO usuarios(Nombre,Apellidos,Direccion,Telefono,Fechanac,Email)VALUES('$Nombre','$Apellidos','$Direccion','$Telefono','$Fechanac','$Email')";
        $registros=$conecta->query($registro);
        if($registros>0){
            eco "Registro Exitoso";
        }más{
            echo"Error al registrar ";
        }
    }  
}
