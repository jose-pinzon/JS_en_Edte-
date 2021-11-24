<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php

define('INC', '/includes/');
require_once __DIR__ . INC . 'Curso.inc.php';


// define('INC','/ includes/');
// require_once __DIR__ . INC . 'Curso.inc.php';


    // define('INC','/includes/');
    // require_once __DIR__ . INC . '
    // Curso.inc.php';//este nombre quiere decir que es un archivo de clase eso dice inc
//el require es para poder hacer que los datos a traer van a ser obligatorios



$curso1 = new Curso(10, 0,'alvaro', 'POO',true);//ahora ya nos es necesario hacer el proceso anterior para 
// crear el objeto





// encaposulamiento es para tener seguro la informacion
// obtencion de datos de getter 
// 2
echo $curso1 -> obtenerTitulo().'</br>';
echo $curso1 -> obtenerProfesor().'</br>';


// cambiar datos SETTER
echo $curso1 -> asignarTitulo('POO avanzado desde 0').'</br>';
echo $curso1 -> obtenerTitulo().'</br>';




//3

$curso1->asignarRequerimientos(['php desde 0 ','conocimientos basicos de PHP']);
$curso1->obtenerRequerimiento();

    ?>



<!--  -->
    
</body>
</html>