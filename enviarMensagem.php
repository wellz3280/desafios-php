<?php
	require_once 'autoload.php';

	 use Desafios\Php\Email\EnviarEmail; 

	$email = "weliton@locawell.com;geovane@locawell.com;sergio@locawell.com";

	$enviar = new EnviarEmail();
	
	EnviarEmail::enviarMensagem($enviar->arrayEmail(';',$email));