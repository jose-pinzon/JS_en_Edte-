<?php

// interfases son como las clases pero estos tendran funciones y todas deben ser publicas
// hacer despues de las clases 
// 3
interface Requerimientos {
    public function asignarRequerimientos($listado);
    public function obtenerRequerimiento();
}
interface Conocimientos {
    public function asignarConocimientos($listado);
    public function obtenerConocimientos();
}



// 1

class Curso{
    private $duracion;
    private $costo;
    private $profesor;
    private $nombre;
    private $disponible;
    private $listado;
    
    #Creando contructor
    /**
     * el constructor es para poder crear los objetos solo con los datos privados por que como ya se sabe 
     * solo la clase puede accedder a las variables.
     */

    public function __construct($duracion, $costo , $profesor, 
    $nombre, $disponible) {///porque aqui llamamos las variables de las clases
        
        $this->titulo =$duracion;//y aqui lo igualamos
        $this->costo =$costo;
        $this->profesor = $profesor;
        $this->nombre =$nombre;
        $this->disponible = $disponible;
       
    }




    #encapsulamiento 
    // 2
//    getter  estte es para sacar datos privados
    public function obtenerTitulo(){
        return $this->titulo;

    }
    public function obtenerProfesor(){
        return $this->profesor;
    }

    #setter para modificar los datos sin sobre escribir o cambiarlo directamente del la variable privada.
    public function asignarTitulo($titulo){
        $this->titulo =$titulo;

        
    }

    // 4

    public function asignarRequerimientos($listado){
        $this->listado =$listado;
    }

    public function obtenerRequerimiento(){
        if(!empty($this ->listado)){
            foreach($this->listad as $lista){
                echo "<p>".$lista."</p>";
            }
        }

    }


    

    


}



?>
