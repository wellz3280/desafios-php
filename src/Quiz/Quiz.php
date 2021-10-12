<?php

namespace Desafios\Php\Quiz;

abstract class Quiz
{
	
	private string $pergunta;
	private string $respostaUsuario;
	

	
	public function __construct(string $pergunta, string $respostaUsuario)
	{
		$this->pergunta = $pergunta;
		$this->respostaUsuario= $respostaUsuario;
		
	}

	public function recuperaPergunta():string
	{
		return $this->pergunta;
	}

	public function recuperaRespostaUsuario():string
	{
		return $this->respostaUsuario;
	}

	
	abstract public function Pontuacao():int;	



}