<?php


/**
* 
*/

include('helpers/helpersusermsg.php');

class LoginView extends helperusermsg{




	private $mensaje = "";
	
	function __construct($m)
	{


		$this->mensaje = $m;
	
	}




	function MostrarLogin(){



		$html ='<form method="POST" action="index.php?m=loginController&f=comprobarLogin">

			<label>nombre</label></br>
			<input type="text" name="nombre" placeholder="nombre"></br>
			<label>password</label></br>
			<input type="password" name="password" placeholder="ingresa tu password"></br>
			<input type="submit" name="enviar" ></br>


		
	     </form>';



	    print($html);



	}


	function loginError(){




		$usermsg =helperusermsg::getUserMsg($this->mensaje);


		$html ='
		<form method="POST" action="index.php?m=loginController&f=comprobarLogin">

			<label>nombre</label></br>
			<input type="text" name="nombre" placeholder="nombre"></br>
			<label>password</label></br>
			<input type="password" name="password" placeholder="ingresa tu password"></br>
			<input type="submit" name="enviar" ></br>


		
	     </form>';


	     $html.='<h1>'.$usermsg.'</h1>';


	  
	    print($html);



	}




	





}








?>