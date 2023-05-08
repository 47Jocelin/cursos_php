<?php 
define('top', 2023);
define('Meses', 2023);
define('Dias', 365);
define('horas', 24);
$Born ="2008";
$Most = 18;
$age = top - $Born;
$Months = $age + Meses;
$Days = $age * Dias;
$horas = Dias ;
if(is_numeric($Born) && is_numeric($Most) && is_numeric($Age)
&& is_numeric($Months) && is_numeric($Days) && is_numeric($Hours)):
if($age >= $Most):

    echo "eres mayor de edad";
    echo "tienes".$age". "años de vida</br>;
    echo "son:".$Months."Meeses de vida"</br>;
    echo "son: ".$Days."Dias de vida"</br>;
    echo "son: ". $Hours. "Horas de vida"</br>;
else:
    echo "eres mayor de edad";
    echo "tienes".$age". "años de vida"</br>;
    echo "son:".$Months."Meses de vida"</br>;
    echo "son: ".$Days."Dias de vida"</br>;
    echo "son: ".$Hours. "Horas de vida"</br>;
endif;
else:
    echoo "¿Alguna de los valores asignados en las variables son valores numericos?";
endif;
?>