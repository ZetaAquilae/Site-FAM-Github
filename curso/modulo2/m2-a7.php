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

                    <li class="modulo"><a href="m2-a1.php">Módulo 2</a></li>
                    <li><a href="m2-a1.php">Lição 11</a></li>
                    <li><a href="m2-a2.php">Lição 12</a></li>
                    <li><a href="m2-a3.php">Lição 13</a></li>
                    <li><a href="m2-a4.php">Lição 14</a></li>
                    <li><a href="m2-a5.php">Lição 15</a></li>
                    <li><a href="m2-a6.php">Lição 16</a></li>
                    <li class="nav-active"><a href="m2-a7.php">Lição 17</a></li>
                    <li><a href="m2-a8.php">Lição 18</a></li>
                    <li><a href="m2-a9.php">Lição 19</a></li>
                    <li><a href="m2-a10.php">Lição 20</a></li>
                    <li class="modulo"><a href="../modulo3/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 2</h2>
                <h3>Lição 17 - Rotina Diária</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões para descrever a rotina diária em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Wake up (acordar)</p>

                <p>Get up (levantar)</p>

                <p>Brush teeth (escovar os dentes)</p>

                <p>Take a shower (tomar banho)</p>

                <p>Have breakfast (tomar café da manhã)</p>

                <p>Go to work/school (ir para o trabalho/escola)</p>

                <p>Have lunch (almoçar)</p>

                <p>Come home/go home (voltar para casa)</p>

                <p>Have dinner (jantar)</p>

                <p>Go to bed (ir para a cama)</p>

                <p>Sleep (dormir)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I wake up at 7 AM. (Eu acordo às 7 da manhã.)</p>

                <p>She takes a shower every morning. (Ela toma banho toda manhã.)</p>

                <p>He goes to school by bus. (Ele vai para a escola de ônibus.)</p>

                <p>We have lunch at noon. (Nós almoçamos ao meio-dia.)</p>

                <p>They go to bed at 10 PM. (Eles vão para a cama às 10 da noite.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What time do you wake up? (Que horas você acorda?) <br>
                    Person B: I wake up at 6 AM. (Eu acordo às 6 da manhã.) <br>
                    Person A: What do you do after that? (O que você faz depois disso?) <br>
                    Person B: I brush my teeth and take a shower. (Eu escovo os dentes e tomo banho.) <br>
                    Person A: When do you have breakfast? (Quando você toma café da manhã?) <br>
                    Person B: I have breakfast at 7 AM. (Eu tomo café da manhã às 7 da manhã.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I _______ at 7 AM. (Eu _______ às 7 da manhã.)',
                        'Answers' => array(
                            'A' => 'wake up',
                            'B' => 'sleep',
                            'C' => 'go to bed'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'She _______ every morning. (Ela _______ toda manhã.)',
                        'Answers' => array(
                            'A' => 'takes a shower',
                            'B' => 'goes to bed',
                            'C' => 'has dinner'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'He goes to school by _______. (Ele vai para a escola de _______.)',
                        'Answers' => array(
                            'A' => 'bus',
                            'B' => 'bed',
                            'C' => 'dinner'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'We have lunch at _______. (Nós almoçamos ao _______.)',
                        'Answers' => array(
                            'A' => 'morning',
                            'B' => 'noon',
                            'C' => 'night'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'They _______ at 10 PM. (Eles _______ às 10 da noite.)',
                        'Answers' => array(
                            'A' => 'have lunch',
                            'B' => 'wake up',
                            'C' => 'go to bed'
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
                    <p><a href="m2-a8.php" class="proximo-link">Ir para a lição 18</a></p>
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