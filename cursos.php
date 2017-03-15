<!DOCTYPE html>
<html>
<head>
	<title>Cursos</title>
	<?php include('head.html'); ?>
</head>
<body>
	<div class='content-loggin'>
		<?php 
			  include('header.html');
			  include 'APP/conexion.php';
	    	  include 'bbdd.php';
	    	  include('APP/functions.php');
	    ?>	  
		<div class="content-datos">
			<h4>Lista de Cursos</h4>
			<?php
	    	  	$result_conex=$conex->conex();
	    	  	$consulta = 'SELECT * FROM cursos';
	            $db = new Functions($result_conex,$consulta);
	            $result = $db->get_consulta();
	            echo '<table border=1 class="tabla-datos">';
		        echo '<tr class="head-table">';
		        echo "<th>Nombre Curso</th>";
		        echo "<th>Descripcion</th>";
		        echo "</tr>";
		        while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		        	echo '<tr>';
		            echo '<td>'.$fila["curso"].'</td>';
		            echo '<td>'.$fila["descripcion"].'</td>';
		            echo '</tr>';        
		        }
		        echo '</table>';
			?>
		<a href="home.php" class='btn btn-regresar'> Regresar</a>
		</div>
	
	</div>
</body>
</html>