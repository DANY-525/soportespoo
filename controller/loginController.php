<?php


include('model/login/login.php');

class LoginController extends Login
{
	
	function __construct()
	{
	
	}

	//end funcion 
	function ejecutarLogin(){

		include('vista/login/loginView.php');

		$mensaje = "";



		$login = new loginView($mensaje);

		$login->MostrarLogin();

	}//end ejecutar login
	

	//end comprobar

	function comprobarLogin(){

		$comprobarcion = $this->ValidateLogin($_POST['nombre'], $_POST['password']);


		if($comprobarcion == "false"){

				$this->ejecutarLoginConError($comprobarcion);


		}else{


			$resultado = Login::tryLogin($_POST['nombre'], $_POST['password']);


			$var = FALSE;
			$var2 = FALSE;


			for ($array = array(); $key = $resultado->fetch_assoc(); $array[] = $key) {

				$var  = isset( $key['nombre']);
				$var2 = isset( $key['password']);


		
			}//end for



			//si existe dentro del array ejecuto la funcion para el index
			if($var || $var2){

				session_start();

				 $_SESSION["usuario"] = $_POST['nombre'];
				 $_SESSION["id"] 	  = $_key['idusuario'];



				 header("location: index.php?m=IndexAdmin&f=listarSoportes");


				/*include('controller/IndexAdmin.php');

				$controlerSoportes = new IndexAdmin();
				$controlerSoportes->listarSoportes();*/


			}else{


				$this->ejecutarLoginSinCoincidir();



			}



		}//end else
		
	

	}//end function


	//end function validacion  login
	function ValidateLogin($nombre,$password){


		$hasfields = "true";

		if($nombre == "" || $password ==  ""){
		
			$hasfields = "false";


		}


		if($nombre == NULL || $password ==  NULL){

	
			
			$hasfields = "false";


		}

		return $hasfields;


	}//validar login



	//end ejecutar login con error
	function ejecutarLoginConError($comprobarcion){

		$mensaje = "vacio";


		include('vista/login/loginView.php');

		$login = new loginView($mensaje);

		$login->loginError();

	}//end function


	//end ejecutar login con error

	function ejecutarLoginSinCoincidir(){

		$mensaje = "coincidir";


		include('vista/login/loginView.php');

		$login = new loginView($mensaje);

		$login->loginError();

	}//end function
	



}


?>