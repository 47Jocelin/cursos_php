<?php
if (Isset($_POST['Enviar'])){
    $Nombre = $_POST['Nombre'];
    $Apellidos = $_POST ['Apellidos'];
    $FechaN = $_POST['FechaN'];
    $Email=$_POST['Email'];
if ($Nombre ==){
    echo "Falto colocal tu Nombre";
    
       }
       else if($Apellidos == ""){
        echo "Falto poner tus Apellidos";

       }
    
    else if($FechaN == ""){
        echo "Falto poner tus FechaN";
     
    }

    else if($Email == ""){
        echo "Falto poner tu Email";
    }
    
    else {
        echo "Tu nombre es: "$Nombre." tus apellidos son:.$Apellidos." tu fecha de nacimiento es:.$FechaN." tu email es:."$Email;
    }
    
    }
    else{
        "Dale click al botoon";

    }
    ?>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Recuperar datos de formulario</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name = "Nombre" placeholder= "Nombre"(S)" /><br>
    <label for="FechaN">SELECIONAR TU FECHA DE NACIMIENTO</label><input type="date" name="FechaN" /><br>
    <input type="email" name = "Email" placeholder= "@gmail.com" /><br>
    <input type="submit" value = "Envuar" name= "Enviar" /><br>
</form>
  
</body>
</html>