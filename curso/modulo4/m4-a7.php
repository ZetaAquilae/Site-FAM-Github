<?php
require_once('../../geral/connectdb.php');

session_start();
$error_msg = "";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/css/main.css" rel="stylesheet" type="text/css">
    <script src="../../assets/javascript/main.js"></script>
    <title>Curso de Inglês</title>
</head>

<body>
    <div id="container">
        <header>
            <div id="navegacao-div">
                <div id="logo"><a href="../../index.html"><img src="../../assets/images/design/english-course-logo.png" alt="logo"></a></div>
                <div id="curso-nav">
                    <h1>Curso de Inglês</h1>
                </div>
                <div id="button-nav">
                    <a href="../../logout.php">
                        <button id="login-nav">Sair</button>
                    </a>
                </div>
            </div>
        </header>

        <?php

        if (empty($_SESSION['id_usuario'])) {
            echo '<p class="texto-alerta mensagens">' . $error_msg . 'Você não está logado. <a href="../../login.php">Fazer login.</a></p>';
        } else {

            echo ('<p class="mensagens">Você está logado como ' . $_SESSION['email'] . '.</p>');

        ?>

            <nav>
                <ul>
                    <li class="modulo"><a href="../../curso.php">Início</a></li>
                    <li class="modulo"><a href="../modulo1/m1-a1.php">Módulo 1</a></li>
                    <li class="modulo"><a href="../modulo2/m2-a1.php">Módulo 2</a></li>
                    <li class="modulo"><a href="../modulo3/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="m4-a1.php">Módulo 4</a></li>
                    <li><a href="m4-a1.php">Lição 31</a></li>
                    <li><a href="m4-a2.php">Lição 32</a></li>
                    <li><a href="m4-a3.php">Lição 33</a></li>
                    <li><a href="m4-a4.php">Lição 34</a></li>
                    <li><a href="m4-a5.php">Lição 35</a></li>
                    <li><a href="m4-a6.php">Lição 36</a></li>
                    <li class="nav-active"><a href="m4-a7.php">Lição 37</a></li>
                    <li><a href="m4-a8.php">Lição 38</a></li>
                    <li><a href="m4-a9.php">Lição 39</a></li>
                    <li><a href="m4-a10.php">Lição 40</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 3</h2>
                <h3>Lição 37 - Esportes</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionados a esportes em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes dos Esportes:</h4>

                <p>Soccer (futebol)</p>

                <p>Basketball (basquete)</p>

                <p>Tennis (tênis)</p>

                <p>Swimming (natação)</p>

                <p>Running (corrida)</p>

                <p>Cycling (ciclismo)</p>

                <p>Volleyball (vôlei)</p>

                <p>Baseball (beisebol)</p>

                <p>Golf (golfe)</p>

                <p>Boxing (boxe)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I like playing soccer. (Eu gosto de jogar futebol.)</p>

                <p>She enjoys swimming. (Ela gosta de nadar.)</p>

                <p>He plays tennis on weekends. (Ele joga tênis nos fins de semana.)</p>

                <p>They love watching basketball. (Eles adoram assistir basquete.)</p>

                <p>We go running every morning. (Nós vamos correr todas as manhãs.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What is your favorite sport? (Qual é o seu esporte favorito?) <br>
                    Person B: My favorite sport is soccer. (Meu esporte favorito é futebol.) <br>
                    Person A: Do you play any other sports? (Você pratica outros esportes?) <br>
                    Person B: Yes, I also like swimming and cycling. (Sim, eu também gosto de nadar e andar de bicicleta.) <br>
                    Person A: That sounds fun! (Isso parece divertido!)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I like playing _______. (Eu gosto de jogar futebol.)',
                        'Answers' => array(
                            'A' => 'soccer',
                            'B' => 'golf',
                            'C' => 'boxing'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'She enjoys _______. (Ela gosta de nadar.)',
                        'Answers' => array(
                            'A' => 'basketball',
                            'B' => 'swimming',
                            'C' => 'baseball'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'He plays _______ on weekends. (Ele joga _______ nos fins de semana.)',
                        'Answers' => array(
                            'A' => 'running',
                            'B' => 'tennis',
                            'C' => 'cycling'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    4 => array(
                        'Question' => 'They love watching _______. (Eles adoram assistir basquete.)',
                        'Answers' => array(
                            'A' => 'golf',
                            'B' => 'volleyball',
                            'C' => 'basketball'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    5 => array(
                        'Question' => 'We go _______ every morning. (Nós vamos correr todas as manhãs.)',
                        'Answers' => array(
                            'A' => 'running',
                            'B' => 'swimming',
                            'C' => 'boxing'
                        ),
                        'CorrectAnswer' => 'A'
                    )
                );

                if (isset($_POST['answers'])) {
                    $Answers = $_POST['answers'];

                    foreach ($Questions as $QuestionNo => $Value) {

                        echo $Value['Question'] . '<br />';

                        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']) {
                            echo 'Você respondeu: <span class="incorrect">' . $Value['Answers'][$Answers[$QuestionNo]] . '</span><br>';
                            echo 'Resposta correta: <span class="correct">' . $Value['Answers'][$Value['CorrectAnswer']] . '</span>';
                        } else {
                            echo 'Resposta correta: <span class="correct">' . $Value['Answers'][$Answers[$QuestionNo]] . '</span><br>';
                            echo 'Você acertou!';
                            $counter++;
                        }

                        echo '<br /><hr>';
                        if ($counter == "") {
                            $counter = '0';
                            $results = "Pontuação: $counter/5";
                        } else {
                            $results = "Pontuação: $counter/5";
                        }
                    }
                    echo $results;
                } else {
                ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
                        <?php foreach ($Questions as $QuestionNo => $Value) { ?>

                            <p class="pergunta"><?php echo $Value['Question']; ?></p>
                            <?php
                            foreach ($Value['Answers'] as $Letter => $Answer) {
                                $Label = 'question-' . $QuestionNo . '-answers-' . $Letter;
                            ?>
                                <div class="opcoes">
                                    <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
                                    <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
                                </div>
                            <?php } ?>

                        <?php } ?>
                        <input type="submit" value="Verificar" class="botao-verificar" />
                    </form>
                <?php
                }
                ?>

                <div class="proximo">
                    <p><a href="m4-a8.php" class="proximo-link">Ir para a lição 38</a></p>
                </div>

            </main>
        <?php

        }

        mysqli_close($dbc);
        ?>

        <footer>
            <p id="copyright">Todos os direitos reservados
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </footer>

    </div>
</body>

</html>