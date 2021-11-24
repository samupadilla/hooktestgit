<?php 
class Conexion{    
    //private $dsn='mysql:host=sql437.main-hosting.eu ;dbname=u991668360_2142345';
    private $dsn='mysql:host=sql437.main-hosting.eu;port=3306 ;dbname=u991668360_2142345';
    private $usr='u991668360_adsi';
    private $psw='Adsi2142345';  
    private $cnx;
public function __construct(){
    try {
        $this->cnx=new PDO($this->dsn,$this->usr,$this->psw); 
        //echo 'clase padre <br>';
        //print_r($this->cnx);
        //echo '<br>';

    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}

public function desconectar(){
    $this->cnx=null;
}
public function getCnx(){
    return $this->cnx;
}
public function setCnx($cnx){
    $this->cnx=$cnx;
}
}

//$prueba=new Conexion();
//echo $prueba->getCnx();
?>