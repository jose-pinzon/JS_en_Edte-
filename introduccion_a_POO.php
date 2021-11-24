<?php
//classes
/*las clases son como si fueran moldes de u objetos es ejemplo si creamos una clase laptop este tendra 
sus atributos pero de este van a derivar otros onjetos que tenga las ccaraccterirticas de laptops

los obbjetos van a tenr los mismos atributos de una clase solo que co diferentes valores*/ 


// creando clases

class Curso {

    public $nombre;
    public $duracion;
    public $costo;
    public $moneda;
    public  $profesor;
    public $disponible;
    //crear un metodo que es lo mismo que una funcion solo que este se usa para objetos
    public function imprimirInfo(){
    return "el nombre del curso es".$this->nombre ."quien imparte el curso es ".$this->profesor;
}
}


$php = new Curso();// esta es la forma de instancias o crear un objeto con base a la clase.
$php -> nombre = 'html';//haci es la forma de asignar un valor a los atributos de la clase
$php -> duracion = 10;//para llamar las variables de la clase no es necesario poner el signo de peso.
$php -> costo = '500 pesos ';
$php -> moneda = 'mexicana';
$php -> profesor = 'alvaro';
$php -> disponible = true;

echo $php -> imprimirInfo();//tenemos que usar echo por solo estamos returnando es decir traer la informacion pero no lo estamos imprimiendo.








?>