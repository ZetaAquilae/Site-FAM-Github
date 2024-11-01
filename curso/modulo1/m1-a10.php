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
                    <li><a href="m1-a1.php">Lição 1</a></li>
                    <li><a href="m1-a2.php">Lição 1</a></li>
                    <li><a href="m1-a3.php">Lição 3</a></li>
                    <li><a href="m1-a4.php">Lição 4</a></li>
                    <li><a href="m1-a5.php">Lição 5</a></li>
                    <li><a href="m1-a6.php">Lição 6</a></li>
                    <li><a href="m1-a7.php">Lição 7</a></li>
                    <li><a href="m1-a8.php">Lição 8</a></li>
                    <li><a href="m1-a9.php">Lição 9</a></li>
                    <li class="nav-active"><a href="m1-a10.php">Lição 10</a></li>
                    <li class="modulo"><a href="../modulo2/m2-a1.php">Módulo 2</a></li>
                    <li class="modulo"><a href="../modulo2/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="../modulo2/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo2/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 1</h2>
                <h3>Lição 10 - Amizade</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas à amizade.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Friend (amigo)</p>

                <p>Best friend (melhor amigo)</p>

                <p>Friendship (amizade)</p>

                <p>Trust (confiança)</p>

                <p>Support (apoio)</p>

                <p>Loyal (leal)</p>

                <p>Honest (honesto)</p>

                <p>Fun (divertido)</p>

                <p>Share (compartilhar)</p>

                <p>Laugh (rir)</p>

                <p>Help (ajudar)</p>

                <h4>2. Frases Úteis:</h4>

                <p>She is my best friend. (Ela é minha melhor amiga.)</p>

                <p>We have a strong friendship. (Nós temos uma amizade forte.)</p>

                <p>I trust my friends. (Eu confio nos meus amigos.)</p>

                <p>Friends support each other. (Amigos se apoiam.)</p>

                <p>It's important to be loyal. (É importante ser leal.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Who is your best friend? (Quem é seu melhor amigo?) <br>
                    Person B: My best friend is Ana. (Minha melhor amiga é a Ana.) <br>
                    Person A: What do you like to do together? (O que vocês gostam de fazer juntos?) <br>
                    Person B: We like to go to the movies and laugh a lot. (Gostamos de ir ao cinema e rir muito.) <br>
                    Person A: That's great! Friends are important. (Isso é ótimo! Amigos são importantes.)</p>
                <br><br>
                <hr>
                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'She is my _______. (Ela é minha amiga.)',
                        'Answers' => array(
                            'A' => 'friend',
                            'B' => 'teacher',
                            'C' => 'neighbor'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'We have a strong _______. (Nós temos uma _______ forte.)',
                        'Answers' => array(
                            'A' => 'family',
                            'B' => 'friendship',
                            'C' => 'job'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'Friends _______ each other. (Amigos _______ um ao outro.)',
                        'Answers' => array(
                            'A' => 'ignore',
                            'B' => 'support',
                            'C' => 'compete'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    4 => array(
                        'Question' => 'It\'s important to be _______. (É importante ser _______.)',
                        'Answers' => array(
                            'A' => 'loyal',
                            'B' => 'selfish',
                            'C' => 'dishonest'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'I trust my _______. (Eu confio nos meus _______.)',
                        'Answers' => array(
                            'A' => 'enemies',
                            'B' => 'friends',
                            'C' => 'strangers'
                        ),
                        'CorrectAnswer' => 'B'
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
                    <p><a href="../modulo2/m2-a1.php" class="proximo-link">Ir para a lição 11</a></p>
                </div>

            </main>
        <?php

        }

        mysqli_close($dbc);
        ?>

        <footer>
            <p id="copyright">Todos os direitos reservados <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </footer>

    </div>
</body>

</html>