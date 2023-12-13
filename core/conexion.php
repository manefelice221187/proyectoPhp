<?php 
//print_r(PDO::getAvailableDrivers()); Verifica los drivers instalados. Si esta mySQl, se puede avanzar
// La clase PDO es la que se encarga de mantener la conexion a la base de datos
// La clase PDO statement es la que se encarga de las sentencias SQL y devuelve los resultados
// La clase PDO exceptions es la que se encarga de los errores
class Conexion{

    public function __construct(
       public string $driver = "mysql",
       public string $host = "localhost",
       public string $user = "root",
       public string $pass = "",
       public string $dbName = "sunny_side",
       public string $charset = "utf8"
    )
    {}

    protected function conexion(){
        try{
//$mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);            
            $pdo = new PDO("$this->driver:host=$this->host;
                            dbname=$this->dbName;
                            charset=$this->charset",
                            $this->user,
                            $this->pass
                            );
            return $pdo;                            
        }catch(PDOException $mensaje){
            echo $mensaje->getMessage();            
        }
    }
}

?>