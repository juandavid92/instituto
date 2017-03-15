<?php
class Functions{
    private $resultado_conex;
    private $consulta;

    function __construct($resul_conex,$consulta) {
        $this->resultado_conex=$resul_conex;
        $this->consulta=$consulta;
    }
    function get_consulta(){
        $resultado_consulta= mysqli_query($this->resultado_conex,$this->consulta);
        return $resultado_consulta;
    } 
}
