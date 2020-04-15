<?php

//Correo de destino; donde se enviará el correo.
$correoDestino = "ventas@dankconsultores.cl";

//Texto emisor; sólo lo leerá quien reciba el contenido.
$textoEmisor = "MIME-VERSION: 1.0\r\n";

$textoEmisor = "MIME-Version: 1.0" . "\r\n";
$textoEmisor .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $textoEmisor .= "From: Formulario creado por dankconsultores web";

// $textoEmisor = "From: e.ibannez.p@gmail.com" . "\r\n" . "CC: pa.ordenes.va@gmail.com";
/*
	Recopilo los datos vía POST
	Con strip_tags suprimo etiquetas HTML y php para evitar una posible inyección.
	Como no gestiona base de datos no es necesario limpiar de inyección SQL.
*/
$nombre = strip_tags($_POST['nombres']);
// $apellidos = strip_tags($_POST['mail']);
$empresa = strip_tags($_POST['empresa']);
// $departamento = strip_tags($_POST['department']);
$telefono = strip_tags($_POST['telefono']);
$correo = strip_tags($_POST['mail']);
$comentario = strip_tags($_POST['message']);
$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

//Formateo el asunto del correo
$asunto = "Contacto vía WEB Dank Consultores";

//Formateo el cuerpo del correo

$cuerpo = "<b>Solicitud de:</b> " . $nombre . ",  a las " . $fechaFormateada . "<br />";
$cuerpo .= "<b>Empresa:</b> " . $empresa . "<br />";
$cuerpo .= "<b>Teléfono de contacto: </b>" . $telefono . "<br />";
$cuerpo .= "<b>E-mail:</b> " . $correo . "<br />";
$cuerpo .= "<b>Comentario:</b> " . $comentario;

// Envío el mensaje
mail( $correoDestino, $asunto, $cuerpo, $textoEmisor);
?>