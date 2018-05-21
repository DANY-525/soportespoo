<?php


	/**
	* 
	*/
	class IndexView {
		
		

		function InicioView($listadoProductos){


		$html ='<h1>listado de soportes  <a href="index.php?m=IndexAdmin&f=CrearSoportes">Ingresar Un Soporte</a></h1>';
		$html .='<div>';

		$html .='<ul>';



			for ($array = array(); $key = $listadoProductos->fetch_assoc() ; $array[] = $key) {

				$html .='<li>'.$key['nombre'].'</li></br>
						 <li>'.$key['descripcion'].'</li></br>
						 <li>'.$key['precio'].'</li>
						 <img class="imagen" src="img/'.$key['imagenuno'].'">
						 <li><a href="">editar un soporte<a/>
						 <a href="" >eliminar  un soporte<a/></li>';

			}	


		$html .='</ul>';
		


		$html.='</div>';	



		print($html);


		}//end function


		public function crearFormulario($categorias){

			

			$html=' 
			
			
			<fieldset>
			
			<form  name="productos" id="formproductos" enctype="multipart/form-data">
		

					<label>nombre</label>
					<input type="text" name="nombre"></br>

					<label>descripcion</label>
					<input type="text" name ="descripcion"></br>

					<label>Catetoria</label>


					<select name="categorias" form="formproductos" >';
					

						for($array = array(); $key = $categorias->fetch_assoc();$array[] = $key){		

			            	$html.='<option  value="'.$key['idcategorias'].'">'.$key['descripcion'].' </option>';
			                   

			            	}
			 	 	$html.='</select></br>

					<label>tiene promocion</label>

				    <select name="has_promo" form="formproductos" >


                    <option  value="TRUE">si </option>
                    <option  value="FALSE">no </option>


 	                 </select></br>

 	                  <label>precio Normal</label>
					<input type="text" name ="precioNormal"></br>

 	                 <label>precio promocion</label>
					<input type="text" name ="preciopromocion"></br>

					<label>ImagenUno</label>
					<input type="file" name ="imagenuno"></br>

					<label>ImagenDos</label>
					<input type="file" name ="imagenDos"></br>

					<label>ImagenTres</label>
					<input type="file" name ="imagenTres"></br>
					
					<label>ImagenCuatro</label>
					<input type="file" name ="imagenCuatro"></br>


					
					<input type="submit" class="btn_enviar" name ="enviar"></br>
					
				    </form> 
				    </fieldset>
					 <aside id="respuesta">
						<div id="precarga">
							
						</div>
						<div id="mensaje"></div>
			
					</aside>';


					 
				

			print($html);





		}//end function



	}// end class












?>