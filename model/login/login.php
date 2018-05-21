<?php

	/**
	* 
	*/

	include('model/masterModel.php');
	class login extends masterModel{


		function tryLogin($nombre,$password){


			$sql = "SELECT * FROM usuarios where nombre = '$nombre' AND password='$password'";


			$buscarusuario = masterModel::requestlogin($sql);

			return $buscarusuario;

		}//end function try login

	
		
	}//end class




?>