<?php 
//print_r(PDO::getAvailableDrivers()); Verifica los drivers instalados. Si esta mySQl, se puede avanzar
// La clase PDO es la que se encarga de mantener la conexion a la base de datos
// La clase PDO statement es la que se encarga de las sentencias SQL y devuelve los resultados
// La clase PDO exceptions es la que se encarga de los errores
require_once("modelo/usuario.php");
    $usuario = new Usuario(
        1,
        "Marcelo",
        "Felice",
        "3585131034",
        "36"
    );

    // $usuario->insertar();
    //  $usuario->actualizar();
    // $usuario->remover();
    // var_dump($usuario->consultarTodo());
    // var_dump($usuario->consultarUno(1));

    // Create a connection
// $conn = new mysqli($driver, $host, $user, $pass, $bdName, $charset);

//     // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// echo "Connected successfully";

// // Now you can perform operations on the bdName

// // Close the connection when done
// $conn->close();

?>