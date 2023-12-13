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
        $this->id = $_REQUEST["id"];
        $this->nombre = $_REQUEST["nombre"];
        $this->raza = $_REQUEST["raza"];
        $this->sexo = $_REQUEST["sexo"];
        $this->color = $_REQUEST["color"];
        $this->edad = $_REQUEST["edad"];
        $this->id>0?$this->actualizarAnimal():$this->insertarAnimal();
        header("Location:index.php");
    }
    public function eliminarAnimal(){
        $this->delete($_REQUEST["id"]);
        header("Location:index.php");
    }
}
?>