<?php
	
	 require_once 'src/Quiz/Quiz.php';
            require_once 'src/Quiz/Perguntas.php';

            $quiz1 = new Perguntas('Qual o Maior País da América do Sul ?','brasil','brasil');

            echo $quiz1->recuperaPergunta() . PHP_EOL;
            echo PHP_EOL ."Resposta usuario: ".$quiz1->recuperaRespostaUsuario() . PHP_EOL;
            echo PHP_EOL ."Resposta Correta : ".$quiz1->recuperaAlternativaCorreta() . PHP_EOL;
          	
          	$quiz1->Pontuacao();
             //echo $quiz1->opcaoCorreta();
