<?php
if($_POST["name"] && $_POST["email"] != ""){
	$de = $_POST["name"];
	$destino = "inesdr1704@gmail.com";
	$asunto = "FORMULARIO DE EJEMPLO";
	$mensaje .= "FORMULARIO."."\n";
	$mensaje .= "\n";
	$mensaje .= "NOMBRE: " . utf8_decode($_POST["name"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "EMAIL: " . utf8_decode($_POST["email"]) ."\n";
    $emailheader = "From: Formulario Phantomicy <inesdr1704@gmail.com>\r\n";
mail($destino, $asunto, $mensaje, $emailheader) or die ("Oh, no... tu solicitud no ha podido ser enviada.<br/>Inténtalo de nuevo.");
echo utf8_decode(utf8_encode('¡Gracias! Tu consulta ha sido enviada correctamente.'));
	} else {
    if($_POST["name"] == ""){
    echo utf8_encode ('Por favor, indica tu nombre.');
    exit; }
    if($_POST["email"] == ""){
    echo utf8_encode ('Por favor, indica un email de contacto.');
    exit; }
}
?>