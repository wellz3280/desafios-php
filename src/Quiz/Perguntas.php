<?php
	
	require_once 'Quiz.php';

class Perguntas extends Quiz
{
	
	private string $AlternativaCorreta ;

	public function __construct(string $pergunta,string $respostaUsuario, string $AlternativaCorreta)
	{

		parent::__construct($pergunta,$respostaUsuario);
		$this->AlternativaCorreta = $AlternativaCorreta;
		
	}

	public function recuperaAlternativaCorreta():string
	{
		return $this->AlternativaCorreta;
	}
	
	public function Pontuacao():int
		{
			return 1;
		}	

}