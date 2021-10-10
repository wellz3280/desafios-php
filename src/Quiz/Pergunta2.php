<?php
	
	require_once 'Quiz.php';

class Pergunta2 extends Quiz
{
	private string $respostaUsuario;
	private string $AlternativaCorreta ;

	public function __construct(string $respostaUsuario, string $AlternativaCorreta = 'brasil')
	{

		$this->AlternativaCorreta = $AlternativaCorreta;
		$this->respostaUsuario = $respostaUsuario;
	}

	public function recuperaResposta():string
	{
		return $this->respostaUsuario;
	}
	
	public function opcaoCorreta():int
	{
		if($this->AlternativaCorreta === $this->respostaUsuario){
			echo "certa resposta";
			return $this->Pontuacao() + 1;
		
		}else{
			echo "resposta Errada";
			return $this->Pontuacao();
		
		}
	}

}