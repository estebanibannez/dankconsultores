<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Formulario de contacto con HTML5 y jQuery por DarioBF - www.dariobf.com</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link href="Css/estilos.css" type="text/css" rel="stylesheet" />

	<!-- Inclusión de la hoja de estilos CSS -->
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Glegoo' rel='stylesheet' type='text/css'>
</head>	
<body>
<header>
	<hgroup>
		<h1>Formulario de contacto con HTML5 y jQuery por <a href="http://www.dariobf.com">DarioBF</a></h1>
		<h2>Validado, con estilos y listo para funcionar.</h2>
	</hgroup>
</header>
<div id="contenedor">
	<div id="textoContacto">
		<h3>Contacto</h3>
		<form id="formulario" name="formContacto" method="post" action="process.php" >
			<label for="nombre">Nombre*:</label>
			<input name="name" placeholder="Introduce tu hombre" class="required" /><br />
        
			<label for="apellidos">Apellidos*:</label>
			<input name="surname" placeholder="Tus dos apellidos" class="required" /><br />
                
			<label for="empresa">Empresa*:</label>
			<input name="company" placeholder="¿Para quién trabajas?" class="required" /><br />
    
			<label for="departamento">Cargo/Departamento:</label>
			<input name="department" placeholder="¿Qué función desempeñas?" /><br />
            
			<label for="telefono">Teléfono:</label>
			<input name="phone" placeholder="¿Hablamos?" /><br />
        
			<label for="mail">E-mail*:</label>
			<input name="mail" placeholder="Podré contestarte" class="required" /><br />
            
			<label id="modif01" for="comentario">Comentario:</label>
			<textarea id="modif02" placeholder="Escribeme tu comentario aquí" name="comment"></textarea><br />
                    
			<div id="aster" > * | Campos obligatorios</div>
                            
			<input class="botonAcceder" type="submit" id="boton" value="Enviar" />
		</form>                
	</div><!-- /textoContacto -->
</div><!-- /contenedor -->     
<footer>
	<p>Desarrollado por <a href="http://www.dariobf.com" title="Diseño web Cantabria">DarioBF</a></p>
	<a href="">Licencia</a>
</footer>

<!-- Códigos de validación para el formulario -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/jquery.form.js"></script>
<!-- Script que llama a la validación del formulario -->
	<script>
		$(function(){
			$('#formulario').validate({
				submitHandler: function(form) {
				    $(form).ajaxSubmit({
					    url: 'process.php',
					    success: function() {
					    	
						    $('#textoContacto h3').hide();
						    $('#formulario').hide();
						    $('#textoContacto').append("<p class='thanks'>Gracias por contactar con nosotros.</p>")
					    }
				    });
			    }
			});         
		});
	</script>
<!-- Fin códigos de validación del formulario -->
</body>
</html>
