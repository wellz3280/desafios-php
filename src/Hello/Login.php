<?php

class Login
{
	private string $login;
	private string $senha;

	public function __construct(string $login, string $senha )
	{
		$this->login = $login;
		$this->senha = $senha;
	}

	public function recuperaLogin()
	{
		return $this->login;
	}

	public function recuperaSenha()
	{
		return $this->senha;
	}

	public function validaLogin():bool
	{
		$usuario = 'wellz'; $pass = '123456';
		
		if($this->login == $usuario and $this->senha == $pass )
		{

			return true;
		}else{
			
			return false;
		}

	} 

}