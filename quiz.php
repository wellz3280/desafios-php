<!Doctype html>
<html lang="pt-br">
    <head>
        <title>Quiz</title>
    </head>
<body>
    <header>
        <h1>Quiz Paises</h1>
    </header>
    <main>
        <h2>Qual o Maior País da América do Sul ?</h2>
            <form action="#" method="get">
                <button type="submit" name="quiz" value="brasil">Brasil</button>
                <button type="submit" name="quiz" value="argentina">Argentina</button>
                <button type="submit" name="quiz" value="colombia">Colombia</button>
                <button type="submit" name="quiz" value="venezuela">Venezuela</button>
            </form>
    </main>
    <footer>
        <?php
            require_once 'src/Quiz/Quiz.php';
            require_once 'src/Quiz/Pergunta1.php';

            $quiz1 = new Pergunta1($_GET['quiz']);

            echo $quiz1->recuperaResposta();
          
             echo $quiz1->opcaoCorreta();


            

         
        ?>
    </footer>
</body>
</html>