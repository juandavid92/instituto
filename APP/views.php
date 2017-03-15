<?php 
	class Views
	{
	    function __construct() {
	        
	    }

	    function ViewCursos($datos){
	    	echo "<table>";
	    	foreach ($datos as $key => $value) {
	    		echo "<tr>";
	    		echo "<td>".$value . "</td>";
	    		echo "</tr>";
	    	}
	    	echo "</table>";
	    }
	}