<?php

//variables
#reglas de variable
/**
 * en php para declarar una variable debe ser descriptiva y no podemos separar el nombre de la variable soo con un espacio 
 * es necesario que le pongamos una diagonal debejo ejemplo"$nombre_paterno", tambien no se debe colocar los signos reservados como:%, # , @ etc.
 * 
 * 
 * el php es sencible a las mayuscculas  por que no es lo mismo color que COLOR .
 */



// print "hola mundo";

$nombre = 'jose';
// echo "$nombre";

//formas de usar  cada tipo de dato numerico en php 
$enteros = 123;
$negativo  = - 1123;
$flotante = 234.56;
$octal= 0755;
$hexadecimal = 0xC4E;
$binario = 0b1010;

// echo $enteros." ". $negativo." ".$flotante

$nombreCompleto= ' jose gabriel';
$apellidosPaternos = ' pinzon eb';
$edad = 18 ;



// echo gettype($hexadecimal);//este sirve para poder verificar nuestro tipo de dato 

var_dump($edad);//este nos dice el tipo de dato y tambien que dato esta guardado en este 

//Aqui en php para hacer una varible por referencia es solo un poco diferente

$variable = ' gonzalo';
$variable2= &$variable;
$variable ='nuevo dato ';

// echo$variable2;//ahora mostrara el nuevo dato porque si cambiamos el valor tambien cambia en la asignacion.



#OPERADORES ARITMETICOS 
$a='20';
$b ='25 ';
$c = ' 50';


$sumar = $a + $b;
echo "SUMAR".$sumar."</br>";


$restar = $b - $c;
echo"RESTAR ".$restar."</br>"; 

$multiplicar = $a * $b;
echo 'MULTIPLICAR'.$multiplicar.'</br>'; 

$dividir = $c / $b;
echo 'DIVIDIR'.$dividir.'</br>';


$modulo = $a % $b;
echo 'residuo'.$modulo.'</br>';

// OPERADORES DE ASIGNACION  += , -= , /= , *=, .=
//solo veremos el de concatenar sting .

// $reflesco = 'coca ';

// $refigerios  .= ' arroz';

// echo $refigerios;



//OPERADORES  DE INCREMENTO ++´Y DECREMENTO --

$incremento = 8 ;
$subir = $incremento++ ; // si ejecutamos esto nos seguira mostrando 8  pero ejecutamoss incremento entonces nos mostrara 9 eso pasa porque 
//cuando le damos el decremento despues primero muestra el numero luego incrementa  pero si coloamos el ++ antes entonces primero aumentara y luego 
// sumara al valor
?>



