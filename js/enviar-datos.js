$(document).ready(function(){

	$('.btn_enviar').on("click", function(evt){

		evt.preventDefault();

		// declaro la variable formData e instancio el objeto nativo de javascript new FormData
		var formData = new FormData(document.getElementById("formproductos"));

		// declaro la variable ruta
		var ruta = 'index.php?m=IndexAdmin&f=EnviarDatos';

		// iniciar el ajax
		$.ajax({

			url: ruta,

			// el metodo para enviar los datos es POST
			type: "POST",

			// colocamos la variable formData para el envio de la imagen
			data: formData,

			contentType: false,

			processData: false,

			beforeSend: function() 
			{
			    $('#precarga').prepend('<img src="img/iconos/loader.gif" />');
			},

			error : function ( xhr, textStatus, error){
			//alert('ocurrió un error')
			//console.log( xhr, textStatus, error )
			$('#precarga').fadeOut('slow', function (){
					$('#mensaje')
						.fadeIn('slow')
						//.html('<p>Ocurrió un error en el servidor</p>')
						.html('<p>Ocurrió el siguiente error en el servidor:<br>"<b>Error N°'+xhr.status+' Mensaje: '+xhr.statusText+'</b>"</p>')
				})
			},

			success: function(data)
			{
				$('#mensaje').fadeOut("fast",function(){

					$('#mensaje').html(data);

				});

				$('#mensaje').fadeIn("slow");
				$('#precarga').fadeOut("slow");
			} 


		});


	});

});