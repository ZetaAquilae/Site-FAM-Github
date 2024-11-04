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
                    <li class="modulo"><a href="m1-a1.php">Módulo 1</a></li>
                    <li class="nav-active"><a href="m1-a1.php">Lição 1</a></li>
                    <li><a href="m1-a2.php">Lição 2</a></li>
                    <li><a href="m1-a3.php">Lição 3</a></li>
                    <li><a href="m1-a4.php">Lição 4</a></li>
                    <li><a href="m1-a5.php">Lição 5</a></li>
                    <li><a href="m1-a6.php">Lição 6</a></li>
                    <li><a href="m1-a7.php">Lição 7</a></li>
                    <li><a href="m1-a8.php">Lição 8</a></li>
                    <li><a href="m1-a9.php">Lição 9</a></li>
                    <li><a href="m1-a10.php">Lição 10</a></li>
                    <li class="modulo"><a href="../modulo2/m2-a1.php">Módulo 2</a></li>
                    <li class="modulo"><a href="../modulo3/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 1</h2>
                <h3>Lição 1 - Present Simple (Simple Present)</h3>

                <h4><strong>Objetivo:</strong></h4>
                <p>Aprender a usar o tempo verbal Present Simple (presente simples) para falar sobre hábitos, rotinas e fatos gerais.</p>
                <h4><strong>Conteúdo:</strong></h4>
                <p><strong>1. Estrutura do Present Simple:</strong></p>
                <ul>
                    <li>
                        <p><strong>Afirmativa:</strong></p>
                        <ul>
                            <li>
                                <p>Sujeito + verbo (na forma base) + complemento</p>
                            </li>
                            <li>
                                <p>Ex.: I work, She plays, They study</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <p><strong>Negativa:</strong></p>
                        <ul>
                            <li>
                                <p>Sujeito + do/does + not + verbo (na forma base) + complemento</p>
                            </li>
                            <li>
                                <p>Ex.: I do not (don&rsquo;t) work, She does not (doesn&rsquo;t) play, They do not (don&rsquo;t) study</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <p><strong>Interrogativa:</strong></p>
                        <ul>
                            <li>
                                <p>Do/Does + sujeito + verbo (na forma base) + complemento?</p>
                            </li>
                            <li>
                                <p>Ex.: Do you work?, Does she play?, Do they study?</p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p><strong>2. Uso do Present Simple:</strong></p>
                <ul>
                    <li>
                        <p>Para falar sobre hábitos e rotinas.</p>
                    </li>
                    <li>
                        <p>Para expressar verdades universais ou fatos gerais.</p>
                    </li>
                </ul>
                <p><strong>3. Exemplos:</strong></p>
                <ul>
                    <li>
                        <p>I wake up at 7 AM every day. (Eu acordo às 7h todos os dias.)</p>
                    </li>
                    <li>
                        <p>She likes chocolate. (Ela gosta de chocolate.)</p>
                    </li>
                    <li>
                        <p>They study English on weekends. (Eles estudam inglês nos fins de semana.)</p>
                    </li>
                </ul>

                <br><br>
                <hr>
                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'He _______ (to play) soccer every Saturday.',
                        'Answers' => array(
                            'A' => 'plays',
                            'B' => 'play',
                            'C' => 'played'
                        ),
                        'CorrectAnswer' => 'A'

                    ),
                    2 => array(
                        'Question' => 'Qual a forma correta da frase negativa: "They (to go) to school by bus"?',
                        'Answers' => array(
                            'A' => 'They do go to school by bus.',
                            'B' => 'They does not go to school by bus.',
                            'C' => 'They do not go to school by bus.'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    3 => array(
                        'Question' => '______ (to do) you like pizza?',
                        'Answers' => array(
                            'A' => 'Do',
                            'B' => 'Does',
                            'C' => 'Doing'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'She _______ (to work) at a bank.',
                        'Answers' => array(
                            'A' => 'work',
                            'B' => 'works',
                            'C' => 'worked'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => '_____ he ______ (to study) English every day?',
                        'Answers' => array(
                            'A' => 'Do / study',
                            'B' => 'Does / studies',
                            'C' => 'Does / study'
                        ),
                        'CorrectAnswer' => 'C'
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
                    <p><a href="m1-a2.php" class="proximo-link">Ir para a lição 2</a></p>
                </div>

            </main>
        <?php

        }

        mysqli_close($dbc);
        ?>

        <footer>
            <p id="copyright">Todos os direitos reservados 
                <script>document.write(new Date().getFullYear());</script>
            </p>
        </footer>

    </div>
</body>

</html>