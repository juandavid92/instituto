<?php
class LogginUser{
    private $resultado_conex;
    private $consulta;
    private $user;
    private $pass; 

    function __construct($resul_conex,$consulta,$user,$pass) {
        $this->resultado_conex=$resul_conex;
        $this->consulta=$consulta;
        $this->user=$user;
        $this->pass=$pass;
    }
    function get_consulta(){
        $resultado_consulta= mysqli_query($this->resultado_conex,$this->consulta);
        return $resultado_consulta;
    } 
    function loggin($resultado , $user){
        $usuario_ok=0;
        while($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
            if($this->user === $fila["email"] && $this->pass === $fila["password"]){
                $usuario_ok=1;
                break; 
            }
        }
        if($usuario_ok==1){
            session_start();
            $_SESSION['usuario'] = $user;
            header("location: ../home.php");
        }
        else{
           header("location: ../htmls/ko.html");
        }
    }   
}
