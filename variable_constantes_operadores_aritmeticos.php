
<?php
include 'include/conecta.php';

print"La suma de Valor1 + Valor2 es:"-$Suma;;

//declarar una variable $ + identificador + asignacion del tipo de dato o de valor 

$variable= 45;
$Mensaje = "El valor de la variable es:";
$Numero1 = 56;  $Numero2 = 24;   $Numero3 = 89;
$Suma  = $Numero1 + $Numero2 +$Numero3;
$Resta = $Numero1 - $Numero2 - $Numero3;
$Multiplicacion = $Numero1 * $Numero2  * $Numero3;
$Divicion =$Numero1 / $Numero2  / $Numero3;
define ('Hora', 'consta de 60 minutos');
$Decremento;
$Incremento;
echo "la Suma de" ."$Numero1"+ "$Numero2"+ "$Numero3." es:  $Suma. "<br>";
echo "la Resta de" ."$Numero1" - "$Numero2" - "$Numero3." es: $Resta. "<br>";
echo "la Multiplicacion de" ."$Numero1" * "$Numero2"  * "$Numero3." es: $Multiplicacion. "<br>";
echo "la Divicion de" ."$Numero1" / "$Numero2" / "$Numero3." es:  $Divicion. "<br>";
//echo ver_dump(constant('Hora'))."<br>"; 
//echo var_dump($suma);
//echo  $Mensaje, $variable;
//area de un circulo
$Mensaje2 = "El area de un circulo con el radio de: "$Radio." por el valor de pi es: ".pi"  el resultado es: ".$Ejemplo;
$Ejemplo = Pi * $Radio * $Radio;
echo $Mensaje2."<br>";
echo var_dump(constant('Pi'));

?>





