<?php
require_once("core/crud.php");
class Animal extends Crud{
	public function __construct(
		public int $id =0,
		public string $nombre="",
		public string $raza="",
		public string $sexo="",
		public string $color="",
		public int $edad=0
	)
    {
        parent::__construct("animal");
    }

    public function insertarAnimal(){
        $this->crear("id,nombre,raza,sexo,color,edad","?,?,?,?,?,?",
        [$this->id, $this->nombre, $this->raza, $this->sexo, $this->color,$this->edad]);
    }

    public function actualizarAnimal(){
        $this->modificacion("nombre=?,raza=?,sexo=?,color=?,edad=?",
        [$this->nombre, $this->raza, $this->sexo, $this->color,$this->edad, $this->id]);
    }

    public function removerAnimal(){
        $this->delete($this->id);
    }
}
?>