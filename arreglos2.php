<?php
#formas de como declarar un arreglo

// $alumno = [];
// $alumnos = array();

// print_r($alumnos);//es una forma de llamar a los array 


// #ARREGLOS INDEXADOS 

// $dias = ['lunes ', 'martes', 'miercoles', 'jueves', ' viernes'];//primera forma
// // var_dump($dias);//primera forma de llamar

// $dias2 = array('lunes ', 'martes', 'miercoles', 'jueves', ' viernes');//segunda forma

// // print_r($dias2);//segunda forma de llamar

// /*si queremos solo imprimir un valor del array solo llamamos a la variabels con la dirreccion*/ 
// // echo$dias[2];
// //para agregar un nuevo dato solo basta con poner la variable con el array
// $dias[]= 'sabado';
// // var_dump($dias);


// #ARREGLOS ASOCIATIVOS  estos son los que le ponemos un nombre a al clave como se muestra abajo

// $usuario = ['nombre' => 'jose', 'edad'=> 12, 'universidad'=>'UTC'];

// var_dump($usuario);
// #ARREGLOS MULTIDIMENCIONALES


// $estudiantes = array(
// array('jose', 18 , 'Utc'),
// array('gerardo', 20 , 'Utc'),
// array('maria', 19 , 'Utc'),
// array('eduardo', 25 , 'Utc'),
// );
// //segunda forma de hacer lo anterior
// // $estudiantes = [
// //     ['jose', 18 , 'Utc'],
// //    ['gerardo', 20 , 'Utc'],
// //     ['maria', 19 , 'Utc'],
// //     ['eduardo', 25 , 'Utc'],
// // ];
// var_dump($estudiantes);
// //si se quiere escojer una columna en especifa se hace como se muestra abajo
// echo$estudiantes[1][0];


// #ASOCIATIVOS
// $estudiantes = [
//     ['nombre'=>'jose','edad'=> 18 , 'escuelas'=>'Utc'],
//     ['nombre'=>'gabriel','edad'=> 20, 'escuelas'=>'Utc'],


// ];

// var_dump($estudiantes);
// echo  '</br>'.$estudiantes[1]['edad'];//pedir datos  

// $estudiantes[1]['calificaciones'] = 9.5;//este es para darle un valor






// // arreglos y sus funciones nativas------------------
//     $cadena ='';
//     $arreglo = [];
//     $videojuegos =['FIFA', 'CALL OF DUTY', 'FORNITE',
//     'BATLEFIELD ', 'POKEMON', 'GTA',' THE SIMS'];
//     #para saber si un arreglo esta vacio se usa empty
//         var_dump(empty($arreglo));
//         var_dump(empty($videojuegos));

//     #para saber si existe un valor que queremos en el arreglo se usa isset

//         var_dump(isset($videojuegos[2]));//nos dira true
//         var_dump(isset($videojuegos[50]));//nos ira false

//     #para contar cuantos elementos hay en un arreglo se usa count
//         echo count($videojuegos);

//     #para poder traer un valor antepemultimo
//         $posicion = count($videojuegos )-2;
//         echo $videojuegos[$posicion ];
//     //es lo mismo que hacer lo de abajo
//         $videojuegos[2];

// #ORDENAR ARREGLOS DE FORMA ALFABETICA
//     sort($videojuegos);
//     var_dump($videojuegos);

// #ORDENAR ARREGLOS DE FORMA ALFABETICA PERO SIN PERDER SU INDICE
//     asort($videojuegos);
//     var_dump($videojuegos);

// #ORDENAR DE MANERA REVESA
//     rsort($videojuegos);
//     var_dump($videojuegos);
// #ORDENAR DE MANERA REVERSA PERO SIN PERDER EL INDICE
//     arsort($videojuegos);
//     var_dump($videojuegos);

// #dividir arreglos
// $dividir = array_chunk($videojuegos, 2);
// var_dump($dividir);


// #dividir y eliminar lo anterior

// var_dump(array_slice($videojuegos ,3 ));//todos lo que este antes del 3 se eliminara


// #como unir 2 arreglos
// $frutas =['manzana', ' mandarina', ' sandia'];
// $verduras =['tomate', 'romanita'];
// $unir=array_merge($frutas, $verduras);
// var_dump($unir);
// #ELIMINAR EL ULTIMO ELEMENTO 
// array_pop($videojuegos);
// var_dump($videojuegos);

// #agregar un valor en la ultima pocicion del arreglo
// array_push($videojuegos,'mariobros');
// var_dump($videojuegos);

#buscar un elemento en un arreglo 
    // $aAlumnos =array( 1,2,4,5,3,2,2);
    // $buscar=array_search(2,$aAlumnos);
    // var_dump($buscar)

#sumar elementos de un array 
//     $numeros= [1,3,34,45,56,34];
//     $suma = array_sum($numeros);
//     var_dump($suma);

// #como  buscar diferencias de los array 
// $alumA=['a'=>'jose', 'b'=>'gabriel', 'c'=> 'gerardo'];
// $alumB=['a'=>'felipe', 'b'=>'carmen', 'c'=> 'gerardo'];
// $diferencias= array_diff($alumA, $alumB);
// var_dump($diferencias);



#ocultar errores 
error_reporting('E-ERROR ');//aqui podemos dar un parametro de los errores que queremos que nos oculte
$nombre = 'jose';
echo $nombre;
echo $nombres;//aqui nos deberia marcar error pero con el codigo anterios no .o muestra pero el error esta ahi.


ini_set("log_error",1);
ini_set("error_log", "/tmp/php-error.log");//aqui damos el nombre de la carpeta donde queremos guardar el error 
error_log("hay un error")//aqui es para decir que queremos que nos muestre cuando busque un error 



?>