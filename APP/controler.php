<?php 

	include 'conexion.php';
	include 'valida_user.php';
    include '../bbdd.php';
    include('functions.php');
    
    $result_conex=$conex->conex();

    $opcion = $_GET['opcion'];
    switch ($opcion) {
        case '1':
            header("location: ../profesores.php");
            break;
        case '2':
            header("location: ../cursos.php");
            break;
        case '3':
            echo $opcion;
            break;
        case '4':
            header("location: ../alumnos.php");
            break;        
        default:
            $user = $_POST['email'];
            $pass = md5($_POST['contrasena']);

            $consulta="SELECT * FROM usuarios";
            $comparar = new LogginUser($result_conex,$consulta,$user,$pass);
            $result_consulta = $comparar->get_consulta();
            $comparar->loggin($result_consulta, $user);
            break;
    }
    
