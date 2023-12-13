<?php
// public, static, protected
// Declarar propiedades o métodos de clases como estáticos los hacen accesibles sin la necesidad de instanciar la clase. Una propiedad declarada como static no puede ser accedida con 
// un objeto de clase instanciado (aunque un método estático sí lo puede hacer).
// Por motivos de compatibilidad con PHP 4, si no se utiliza ninguna declaración de visibilidad, se tratará a las propiedades o métodos como si hubiesen sido definidos como public.
abstract class Persona{
	public $nombre;
	public $apellido;
	public $edad;
	public $telefono;
	static $idioma;
	
	public function __construct(
		string $nombre="",
		string $apellido="",
		int $edad=0,
		string $telefono=""
	)
	{
		$this->nombre  =$nombre;
		$this->apellido=$apellido;
		$this->edad    = $edad;
		$this->telefono= $telefono;
		
	}
	
	function hablar($tema){
		// echo "Soy --- y hablo sobre $tema";
		// atributo this
		echo "Soy ",$this->nombre," y hablo sobre $tema.",$this->temaEsExtenso($tema);
	}

	function ver(){}
	function cantar(){}
	
	private function temaEsExtenso($tema){
		return ($tema=="Politica")?"Tema extenso":"Tema no extenso";
	}
	
	public function __set($name,$value){
		switch($name){
			case "telefono":
				return $this->$name = $this->validarTelefono($value);
			default:
				return $this->$name = $name;
		}
	}
	public function __get($name){
		return $this->$name;
	}	
	
	public function validarTelefono($telefono){
		if(preg_match('/^[0-9]{10}$/',$telefono)){
			return $telefono;
		} else{
			return "Estructura incorrecta";
		}
	}

	public function __destruct(){		
	}
}
?>


// <?php
// Actualizacion php8 de constructor y union de tipos (int|string...se inicializa con cualquiera de ambos) 
// class Persona{
	// static $idioma;
	
	// public function __construct(
		// public int|string $nombre="",
		// public string $apellido="",
		// public int $edad=0,
		// public string $telefono=""
	// )
	// {}
// }
// ?>