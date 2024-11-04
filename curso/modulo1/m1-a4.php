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
                    <li class="nav-active"><a href="m1-a4.php">Lição 4</a></li>
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
                <h3>Lição 4 - Pronomes Pessoais e Verbos To Be</h3>

                <h4>Objetivo: Aprender os pronomes pessoais e como usar o verbo "to be" (am, is, are) no presente simples.</h4>

                <h4>Conteúdo:</h4>

                <h4> 1. Pronomes Pessoais:</h4>

                <p>I (eu)</p>

                <p>You (você)</p>

                <p>He (ele)</p>

                <p>She (ela)</p>

                <p>It (ele/ela - para objetos e animais)</p>

                <p>We (nós)</p>

                <p>You (vocês)</p>

                <p>They (eles/elas)</p>

                <h4>2. Verbo To Be no Presente Simples:</h4>

                <h4>Afirmativa:</h4>

                <p>I am</p>

                <p>You are</p>

                <p>He/She/It is</p>

                <p>We are</p>

                <p>You are</p>

                <p>They are</p>

                <h4>Negativa:</h4>

                <p>I am not</p>

                <p>You are not (aren't)</p>

                <p>He/She/It is not (isn't)</p>

                <p>We are not (aren't)</p>

                <p>You are not (aren't)</p>

                <p>They are not (aren't)</p>

                <h4>Interrogativa:</h4>

                <p>Am I?</p>

                <p>Are you?</p>

                <p>Is he/she/it?</p>

                <p>Are we?</p>

                <p>Are you?</p>

                <p>Are they?</p>

                <h4>3. Exemplos:</h4>

                <p>I am a student. (Eu sou um estudante.)</p>

                <p>She is my friend. (Ela é minha amiga.)</p>

                <p>They are not at home. (Eles não estão em casa.)</p>

                <p>Are you a teacher? (Você é professor?)</p>
                <br><br>
                <hr>
                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I _______ (to be) happy.',
                        'Answers' => array(
                            'A' => 'am',
                            'B' => 'is',
                            'C' => 'are'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'She _______ (to be) a doctor.',
                        'Answers' => array(
                            'A' => 'am',
                            'B' => 'is',
                            'C' => 'are'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'They _______ (to be) friends.',
                        'Answers' => array(
                            'A' => 'am',
                            'B' => 'is',
                            'C' => 'are'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'We _______ (to be) not tired.',
                        'Answers' => array(
                            'A' => 'am',
                            'B' => 'is',
                            'C' => 'are'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    5 => array(
                        'Question' => '_______ you (to be) a student?',
                        'Answers' => array(
                            'A' => 'Am',
                            'B' => 'Is',
                            'C' => 'Are'
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
                    <p><a href="m1-a5.php" class="proximo-link">Ir para a lição 5</a></p>
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