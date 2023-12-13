<?php
require_once("core/crud.php");
class Adopcion extends Crud{
	public function __construct(
		public int $id =0,
		public string $id_animal="",
		public string $id_usuario="",
		public string $fecha="",
		public string $motivo=""
	)
    {
        parent::__construct("adopcion");
    }

    public function insertarAdopcion(){
        $this->crear("id,id_animal,id_usuario,fecha,motivo","?,?,?,?,?",
        [$this->id, $this->id_animal, $this->id_usuario, $this->fecha, $this->motivo]);
    }

    public function actualizarAdopcion(){
        $this->modificacion("id_animal=?,id_usuario=?,fecha=?,motivo=?",
        [$this->id_animal, $this->id_usuario, $this->fecha, $this->motivo, $this->id]);
    }

    public function removerAdopcion(){
        $this->delete($this->id);
    }
}
?>