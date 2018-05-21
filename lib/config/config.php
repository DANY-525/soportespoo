<?php


	class config {
		
	

		function conexion (){


			 $conexion = new Mysqli("localhost","root","","soportes");


			 return $conexion;



		}//end function 

	}//end class



?>