<?php
class AutoCarga{

	private function cargarClase($carga){
		$ruta = str_replace("\\","/",$carga).".php";
		if(file_exists($ruta)){
			require_once($ruta);
		}
	}
	
	public function cargarRutas(){
		spl_autoload_register(array($this,"cargarClase"));
	}
}
?>