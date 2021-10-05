<?php

	require 'Login.php';

 	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$usuario = new login($login,$senha);
	if($usuario->validaLogin() === false)
	{
		header('location:../../Hello.php?id=1');
		
	}else{
		echo "ola mdf";
	}
