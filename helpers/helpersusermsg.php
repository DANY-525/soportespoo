<?php

/**
* 
*/
class helperusermsg  
{
	
	
	function getUserMsg($mensaje_recibido){

		$mensaje = "";



		switch ($mensaje_recibido) {

			
			case 'vacio':
				$mensaje = "por favor ingrese nombre y contraseña";
				break;

			case 'coincidir':
				$mensaje = "<mark>el nombre y password ingresados no son verdaderos</mark></br>";
				break;
			case 'nombre':
				$mensaje = "<mark>el nombre esta vacio</mark></br>";
				break;
			case 'descripcion':
				$mensaje = "<mark>descripcion esta vacia</mark></br>";
				break;
			case 'promocion':
				$mensaje = "</mark>promocion esta vacia</mark></br>";
				break;
			case 'precioNormal':
				$mensaje = "<mark>precioNormal esta vacio</mark></br>";
				break;

			case 'imagenUno':
				$mensaje = "<mark>imagenUno esta vacio por favor carge una imagen</mark></br>";
				break;


			case 'imagenDos':
				$mensaje = "<mark>imagenDos esta vacio por favor carge una imagen</mark></br>";
				break;
			case 'imagenTres':
				$mensaje = "<mark>imagenTres esta vacio por favor carge una imagen</mark></br>";
				break;
			case 'imagenCuatro':
				$mensaje = "<mark>imagenCuatro esta vacio por favor carge una imagen</mark></br>";
				break;
			case 'categoria':
				$mensaje = "<mark>categoria esta vacio por favor carge una imagen</mark></br>";
				break;
			
		
		}

		return $mensaje;




	}








}
	
	






?>