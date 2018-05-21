<?php


include('model/masterModel.php');
class indexM extends masterModel{


	function listAll(){


		$sql="SELECT * FROM productos LEFT JOIN imagenes ON imagenes.productos_idproductos = productos.idproductos";


		$productsget  = masterModel::getProducts($sql);

		return $productsget;





	}//end function 




	function getCategories(){

		$sql="SELECT * FROM categorias";


		$productsget  = masterModel::getCategorie($sql);

		return $productsget;





	}


	function SendDatos($nombre,$descripcion,$promocion,$precioNormal,$preciopromocion,$imagenuno,$imagendos,$imagentres,$imagencuatro,$categorias){
		
		$sql = "INSERT INTO productos (idproductos, nombre, descripcion, haspromocion, precio, preciopromocion, usuarios_idusuario, categorias_idcategorias) VALUES (0, '$nombre', '$descripcion', '$promocion', '$precioNormal', '$preciopromocion', '1', '$categorias');";

		$productsget  = masterModel::insertDatos($sql);

		var_dump($productsget);
		exit;



	}//end function





}//end class




?>