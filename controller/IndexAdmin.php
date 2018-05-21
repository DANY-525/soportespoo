<?php

include('model/index/indexM.php');

class IndexAdmin extends indexM {


	public function listarSoportes(){


		$listadoProductos= indexM::listAll();


		include('vista/Index/IndexView.php');

		$login = new IndexView();

		 $login->InicioView($listadoProductos);

	}//end function




	public function CrearSoportes(){



		$categorias =  indexM::getCategories();


	include('vista/Index/IndexView.php');
	$crear = new IndexView();



	$crear->crearFormulario($categorias);







	}//end function 


	//Funcion que envia los datos
	public function EnviarDatos(){



		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$promocion = $_POST['has_promo'];
		$precioNormal = $_POST['precioNormal'];
		$preciopromocion = $_POST['preciopromocion'];
		$imagenuno =$_FILES['imagenuno'];
		$imagendos = $_FILES['imagenDos'];
		$imagentres = $_FILES['imagenTres'];
		$imagencuatro = $_FILES['imagenCuatro'];
		$categorias = $_POST['categorias'];

	

		$resultadoValidar = $this->ValidarDatos($nombre,$descripcion,$promocion,$precioNormal,$preciopromocion,$imagenuno,$imagendos,$imagentres,$imagencuatro,$categorias);


		include('helpers/helpersusermsg.php');

		$MensajesMostrar =new helperusermsg();

		$sinProblemasValidacion = TRUE;

		foreach ($resultadoValidar as $key => $value) {


			if(!$value){

				$sinProblemasValidacion = FALSE;

				$mensaje = $MensajesMostrar->getUserMsg($key);

				echo $mensaje;

				
			}

		}//End Foreach

		if($sinProblemasValidacion){

			


			indexM::SendDatos($nombre,$descripcion,$promocion,$precioNormal,$preciopromocion,$imagenuno,$imagendos,$imagentres,$imagencuatro,$categorias);


		}


	}//end funcion 


	//funcion que valida los datos
	public function ValidarDatos($nombre,$descripcion,$promocion,$precioNormal,$preciopromocion,$imagenuno,$imagendos,$imagentres,$imagencuatro,$categorias){



		$validarNombre = TRUE;
		$validarDescripcion = TRUE;
		$validarPromocion = TRUE;
		$ValidarNormal = TRUE;
		$ValidarPrecioPromocion = TRUE;
		$validarImagenUno = TRUE;
		$validarImagenDos = TRUE;
		$validarImagenTres = TRUE;
		$validarImagenCuatro = TRUE;
		$validarCategoria = TRUE;


		if($nombre == ""){


			$validarNombre = FALSE;


		}

		if($descripcion == ""){


			$validarDescripcion = FALSE;

		}


		if($promocion == ""){


			$validarPromocion = FALSE;

		}


		if($precioNormal == ""){


			$ValidarNormal = FALSE;

		}

		if($imagenuno['type'] == ""){


			$validarImagenUno = FALSE;

		}


		if($imagendos['type'] == ""){


			$validarImagenDos = FALSE;

		}


		if($imagentres['type'] == ""){


			$validarImagenTres = FALSE;

		}


		if($imagencuatro['type'] == ""){


			$validarImagenCuatro = FALSE;

		}

		if($categorias== ""){


			$validarCategoria = FALSE;

		}



		$arrayValidated = array('nombre' => $validarNombre , 
	 					  	 'descripcion' => $validarDescripcion,
	 						'promocion' => $validarPromocion,
	 						'precioNormal' => $ValidarNormal,
	 						 'imagenUno' => $validarImagenUno,
	 						 'imagenDos' => $validarImagenDos,
	 						 'imagenTres' => $validarImagenTres,
	 						  'imagenCuatro' => $validarImagenCuatro,
	 						  'categoria' => $validarCategoria);


		return $arrayValidated;

		



	}//end function 
	
	

}//end class




?>





