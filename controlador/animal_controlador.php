<?php
require_once("modelo/animal.php");
class AnimalControlador extends Animal{
    public function __construct(){
        parent::__construct();
    }

    public function indexAnimal(){
        require_once("vista/animales.php");
    }

    public function mostrarAnimal(){
        if (isset($_REQUEST["id"])){
            $animal= $this->consultarUno($_REQUEST["id"]);
        }else{
            $animal= $this;
        }
        require_once("vista/animal_formulario.php");        
    }
    public function guardarAnimal(){
        
    }
    public function eliminarAnimal(){}
}
?>