<?php



include('lib/config/config.php');
class masterModel extends config{


	/*CONSULTAS LOGIN*/


	function requestlogin($sql){


		$ejecutarConsulta = config::conexion();


		$resultado = $ejecutarConsulta->query($sql);

	
		return $resultado;


	}//end function




	/*CONSULTAS INDEX*/


	/*obtenemos todos los productos*/
	function getProducts($sql){


		$ejecutarConsulta = config::conexion();


		$resultado = $ejecutarConsulta->query($sql);

	
		return $resultado;




	}


	/*obtenemos todos las categorias*/
	function getCategorie($sql){


		$ejecutarConsulta = config::conexion();


		$resultado = $ejecutarConsulta->query($sql);

	
		return $resultado;




	}//end function 



	function insertDatos($sql){


		$ejecutarConsulta = config::conexion();


		$resultado = $ejecutarConsulta->query($sql);

		if($resultado){

			



			var_dump($ejecutarConsulta);
			exit;
		}
		
		
	}//end function












}//end class




?>