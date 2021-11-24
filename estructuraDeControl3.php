<?php
// CICLO IF 
//este es lo mismo que en javascrip solo que en usar console.log usamos (echo "el numnero es 1")


#este es lo mismo que el if solo que declarado de diferente manera el $a es como si fuera if y los 2 puntitos es como si fuera else
// // $numero = 1;
// // $a($numero ==1)? 1:2;
// // echo "el numero es igual a ".$a;//este no es recomendado de usar


// #el swich es lo mismo que enb javascrip y lo mismo que if en lugar deñl console va el echo
// //PLACTICA CCON IF ------
// $calificaciones = 83;


// if($calificaciones > 95){
//     $mensaje= ' exelente';
//     $nota = 'A';

// }elseif($calificaciones <=95 && $calificaciones > 85){
//     $mensaje= 'Muy bien';
//     $nota = 'B';
    
// }elseif ($calificaciones <= 85 && $calificaciones > 75 ) {
//     $mensaje= 'bien';
//     $nota = 'c';
// }else{
//     $mensaje= 'mal';
//     $nota = 'F';
// }

// echo "salistes ".$mensaje.' '."en este semeste y tu nota es ".$nota;






    //ciclo while este es para decir miestra cuando es decir mientras se siga cumpliendo esa condicion

    // $frutas = array('naranja','manzana', 'platano', 'uva');

    // $salir =0 ;
    // $i=0 ;


    // while($salir != 1){
    //     if ($frutas[$i] == 'uva') {
    //         echo "encontre las uvas </br>";
    //         $salir = 1;
    //     }else{
    //         echo "<p>la fruta encontrada es ".$frutas[$i]."</p>";
    //         $i++;
    //     }


    // }

    //do while  este se tiene que ejecutar por lo menos una vez
    // $i = 5;

    // do {
    //     echo"numero".$i."</br>";
    //     $i++;
    // } while ($i <br 5);//aqui aunque no se cumpla la condicion por lo menos se ejecutara una ves porque lo que se hace primero es ejecutar el codigo 
    //que esta en el "do" y despues realiza la condicion



    //en el ciclo for es lo mismo que el curso de javaScrip  solo las vqribles se ddeclaran diferente

// for ($i=1, $j =10 ; $i <br 50 && $j <br 100; $i+=10 , $j +=10) {  #el += quiere decir que aumentara en 10 en 10
//     echo "El numero es:".$i."</br>";
// }





//hacer sucesion de numeros fionashi -hacer plactica



//FOREACH 
/**
 * este es solo para recorrer array 
 */
// $redesSociales =array('www.facebook', 'www.twiter', 'www.youtube');

// foreach ($redesSociales As $var) {//la variable var puede ser cualquiera porque solo con llamralo siempre mostrara todos los datos del arreglo
//     // y no es neccesario poner i++ pórque el foreach ya lo trae.
//     echo $var.'</br>';
// }

#ASOCIATIVOS

// $redesSociales =array('a'=>'www.facebook','b'=> 'www.twiter','c'=> 'www.youtube');
//     foreach ($redesSociales  as $llave => $dato ) {//los valores despues del as puede ir cualquier nombre pero como este es asociativo
//         // es necesarrio poner el variable  de la llave y la varaiable  del dato
//         echo $llave."".$dato.'</br>';//podemos traer solo el valor que queramso o los 2
//     }

#FUNCION
// es una funccion para sumar numeros dependdiendo de sus parametros
//     function sumarNumeros($a , $b , $imprimir = false){
//         $suma = $a +$b;
//         if($imprimir ==true){
//             echo "la suma es ".$suma."</br>";


//     }else{
//         return $suma;
//     }

// }
// sumarNumeros(1  , 2 ,true)// si colocamos true cambiara el valor del parametro

#FUNCIONES ANONIMAS
$calabaza = function(){
    echo "finaliza el curso de php desde 0";

};
$calabaza();//haci es la forma de llamar una funcion anonima





?>