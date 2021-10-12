<?php
	
	 require_once 'src/Quiz/Quiz.php';
            require_once 'src/Quiz/Pergunta1.php';

            $quiz1 = new Pergunta1($_GET['quiz']);

            echo $quiz1->recuperaResposta();
          
             echo $quiz1->opcaoCorreta();
