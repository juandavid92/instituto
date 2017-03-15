<?php
class ConexionBD{
    //variables de conexion
    private $host;
    private $user;
    private $password;
    private $database;

    function __construct($host,$user,$pass,$db){
        $this->host=$host;
        $this->user=$user;
        $this->password=$pass;
        $this->database=$db;
    }
    //metodo de conexion a la DB.
    function conex(){
        $conexion=  mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if(mysqli_connect_errno()){
            echo "No se ha realizado la conexión a la BD correctamente";
        }
        return $conexion;
    }
}