<?php
//d�finit la m�thode personnalis�e de prise en compte d'erreur pour �tre la m�thode de gestion des erreurs
set_error_handler('error_handler',E_ALL);
//fonction de prise en copmpte d'erreurs
function error_handler($errNo,$errStr,$errFile,$errLine)
{
	if(ob_get_length()) ob_clean();
	$error_message='ERRNO:'.$errno.chr(10).
				   'TEXT:'.$errStr.chr(10).
				   'LOCATION'.$errFile.
				   ',line'.$errLine;
	echo $error_message;
	//emp�che le traitement detout autreb script php
	exit;
}
?>
