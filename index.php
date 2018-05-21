<?php


class index {


	public $metodo="";
	public $funcion="";



	function __construct($m,$f){

		$this->metodo = $m;

		$this->funcion = $f;


		
	}

	public function genUrl(){


		$funcionEjecutar = $this->funcion;

		include('controller/'.$this->metodo.'.php');


		     $controlador = new $this->metodo();

		     $controlador->$funcionEjecutar();

	}




}

/*ejecutamos la clase*/




$metodoejecutar = "";


$funcionejecutar = "";




$metodo = isset($_REQUEST['m']);


$funcion  = isset($_REQUEST['f']);



if( $metodo == ""){


	$metodoejecutar = "loginController";



}else{


	$metodoejecutar  = $_REQUEST['m'];


}


if( $funcion == ""){


	$funcionejecutar = "ejecutarLogin";



}else{


	$funcionejecutar  = $_REQUEST['f'];


}



include('vista/header.php');


 $objUrl = new index($metodoejecutar,$funcionejecutar);


 $objUrl->genUrl();

include('vista/footer.php');

?>