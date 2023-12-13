// Operador de asignacion y referencia = &
// Operador de asignacion para concatenar .=
<?php
$a = 10;
$b = &$a;

$a = 20 ;
$a = 60 ;

echo $b;

$saludo = "Hola ";
$saludo .= "Marines";

echo $saludo;

$numero = 20;
$numero += 10; //lo mismo para la resta, multiplicacion, division, elevacion y modulo: -=, *=, /=, **=, %=

echo $numero;

?>

// Operador and o &&
// Operador or o ||
// Operador xor
// Operador !
<?php
$edad = 15;
$esMayor = $edad >=18;

$regalo = "Si";
$traeRegalo = $regalo == "Si";

// var_dump($esMayor and $traeRegalo);
// var_dump($esMayor or $traeRegalo);
var_dump($esMayor && $traeRegalo);
var_dump($esMayor || $traeRegalo);
var_dump($esMayor xor $traeRegalo);
var_dump(!$esMayor);
echo $numero;

?>

// Operador pre-incremento (aumenta de a 1)
// Operador pos-incremento (muestra y luego aumenta 1)
// Operador pre-decremento (disminuye de a 1)
// Operador pos-decremento (muestra y luego disminuye 1)
<?php
$numero = 10;
$numero = $numero + 1;
$numero += 1;
echo ++$numero; //pre

$numero++;
echo $numero; //pos

echo --$numero; //pre-dec

$numero--;
echo $numero; //pos-dec

?>

// Operador ternario (operando)?operando:operando
// Operador elvis ?:
// Operador fusion null ??
<?php
$promedio = 5;
$aprobo = ($promedio>=7)?"Aprobaste":"Reprobaste";
echo $aprobo; 

$promedio = null;
$aprobo = ($promedio)?:5;
echo $aprobo; 

$promedio;
$aprobo = ($promedio)??5;
echo $aprobo; 
?>

//precedencia de operadores. 
// La precedencia de un operador indica qué tan "estrechamente" se unen dos expresiones juntas
// Los operadores de igual precedencia que no son asociativos no pueden usarse unos junto a otros, por ejemplo, 1 < 2 > 1 es ilegal en PHP. La expresión 1 <= 1 == 1, 
// por otro lado, es legal, ya que el operador == tiene menos precedencia que el operador <=.
// El uso de paréntesis, incluso cuando no es estrictamente necesario, a menudo puede aumentar la legibilidad del código haciendo grupos explícitamente 
// en lugar de confiar en la precedencia y asociatividad implícitas del operador.

--------------------------------------------
// If
<?php
$promedio = 5;
$tieneFaltas = "Si";
if ($promedio > 4 && $tieneFaltas = "No") {
	echo "Aprobo";  
}else if ($tieneFaltas = "Si"){
	echo "Desaprobo por faltas";  
}else {
	echo "Desaprobo";  
}
?>

// switch y match (match es solo para v8 y solo permite devolver un valor)
<?php
$camisa = "Verde";


echo match($camisa){
	"Gris"=> "Encontre Gris",
	"Rojo"=> "Encontre Rojo",
	"Verde"=> "Encontre Verde";
};


switch($camisa){
	case "Gris":
		echo "Encontre gris";
	 break;
	case "Rojo":
		echo "Encontre rojo";
	 break;
	case "Verde":
		echo "Encontre verde";
	 break;	 
}	 
?>

// While
<?php
$zapato = 0;

while($zapato <=100){
	echo "Zapato numero: ",$zapato;
	$zapato++;
}
	 
?>

//----------------------------------

// Array
<?php
$array = ["Marines", "jose", "Sofi"];

echo $array[2];

foreach($array as $index =>$nombre){
	echo "Mi nombre es: ",$nombre," index: $index";
};

?>

// Array asociativo
<?php
$datos = [
	"nombre" => "Marines",	
	"apellido" => "Mendez", 
	"edad" => "29"
];

var_dump($datos["apellido"]);

foreach($datos as $valor){
	echo $valor;
};

foreach($datos as $key =>$valor){
	echo "$key: $valor";
};
?>

// Agregar datos en Arrays
// eliminar datos en Arrays
<?php
$alumnos = ["Marines", "jose", "Sofi"];
$datos = [
	"nombre" => "Marines",	
	"apellido" => "Mendez", 
	"edad" => "29"
];

array_push($alumnos,"Luis");
$datos["Colonia"]="Alegria";

// eliminar
unset($alumnos[1]);
unset($datos["apellido"]);

// modificar
$alumnos[1] = "Jose";
$datos["apellido"] = "Mendes";

// count
var_dump(count($alumnos));
var_dump(count($datos));

// ordenar (asort)
asort($alumnos);
asort($datos);

// ordenar inversa (arsort)
arsort($alumnos);
arsort($datos);

//busqueda
var_dump(array_search("Sofia",$alumnos));
var_dump(array_search("29",$datos));

$index = array_search("Sofia",$alumnos);
$key   = array_search("29",$datos);
var_dump($alumnos[$index]);
var_dump($datos[$key]);

//reemplazar
$alumnosCorreccion = array_replace($alumnos,[
	0=>"Laura",
	1=>"Joya"
]);
$datosCorreccion = array_replace($datos,[
	"apellido"=>"Felice"
]);

var_dump($alumnosCorreccion);
var_dump($datosCorreccion);
?>


// Arreglos multidimencionales
// recorrer Arreglos multidimencionales
<?php
$animales = [
	/*0*/	["Puma", "Jaguar", "Lince"],
	/*1*/	["Paloma", "Pato", "Tucan"],
	/*2*/	["Serpiente", "Cocodrilo", "Tortuga"]
];

$animales2 = [
	"Felinos"  =>	["Puma", "Jaguar", "Lince"],
	"Aves"     =>	["Paloma", "Pato", "Tucan"],
	"Reptiles" =>	["Serpiente", "Cocodrilo", "Tortuga"]
];

echo $animales[2][1];
echo $animales2["Aves"][1];

foreach($animales as $clasificacion){
	foreach($clasificacion as $animal){
		echo "Animal: $animal";
	}
}

//por llave
foreach($animales as $key => $clasificacion){
	foreach($clasificacion as $animal){
		echo "$key: $animal";
	}
}

?>
/****************/
// Funciones
<?php
function obtenerEdad(){
	$edad = 2023-1994;
	echo "Mi edad es: $edad";
}

obtenerEdad();

//funcion con parametros
function obtenerEdad($anio){
	$edad = 2023-$anio;
	echo "Mi edad es: $edad";
}

function obtenerEdad($anio, $anioActual=2023){
	$edad = $anioActual-$anio;
	echo "Mi edad es: $edad";
}

obtenerEdad(2000);
?>

// Return
<?php

function obtenerEdad($anio, $anioActual=2023){
	$edad = $anioActual-$anio;
	return $edad;
}

$edad= obtenerEdad(2000, 2010);
echo "Mi edad es: $edad";
?>

// declaraciones de tipo escalar
// Cuando se declara variables de tipo, y se activa el modo estricto, cuando se pasen
// parametros que no corresponden al tipo de la variable, saltara error
<?php
declare(strict_types=1);
function obtenerEdad(int $anio,int $anioActual=2023){
	$edad = $anioActual-$anio;
	return $edad;
}

$edad= obtenerEdad(2000, 2010.10);
echo "Mi edad es: $edad";
?>

// funciones anonimas
<?php

function suma(){
	return 20+10;
}

$suma= suma();
echo "La suma es: $suma";

//para realizar la funcion anonima seria:
$mensaje="La suma es: ";
$suma= function suma($numero1,$numero2) use ($mensaje){
	$resultado= $numero1 + $numero2;
	return "$mensaje $resultado";
}

echo "La suma es: $suma(100,400)";
?>
/*-------------------------------------------*/
/*Clases*/
/*-------------------------------------------*/
<?php
require_once(persona.php);

$jose = new Persona();
$jose->nombre = "Jose";
$jose->hablar("Politica");
echo $jose->nombre;
Persona::$idioma="Espanol";
echo Persona::$idioma;

$jose->__set("telefono","3584378593");
echo $jose->__get("telefono");

?>


<?php
require_once("autoload.php");
(new AutoCarga())->cargarRutas();

$jose = new Persona();
$jose->nombre = "Jose";
$jose->hablar("Politica");
echo $jose->nombre;
Persona::$idioma="Espanol";
echo Persona::$idioma;

$jose->__set("telefono","3584378593");
echo $jose->__get("telefono");

?>