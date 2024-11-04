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
                    <li class="nav-active"><a href="m2-a6.php">Lição 16</a></li>
                    <li><a href="m2-a7.php">Lição 17</a></li>
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
                <h3>Lição 16 - Horas do Dia</h3>

                <h4>Objetivo:</h4>

                <p>Aprender a perguntar e dizer as horas em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>O'clock (horas)</p>

                <p>Half past (e meia)</p>

                <p>Quarter past (e quinze)</p>

                <p>Quarter to (quinze para as)</p>

                <p>Minutes (minutos)</p>

                <p>Hour (hora)</p>

                <p>AM (antes do meio-dia)</p>

                <p>PM (depois do meio-dia)</p>

                <h4>2. Como Perguntar as Horas:</h4>

                <p>What time is it? (Que horas são?)</p>

                <p>Do you have the time? (Você tem as horas?)</p>

                <p>Can you tell me the time? (Você pode me dizer as horas?)</p>

                <h4>3. Como Dizer as Horas:</h4>

                <p>It's [hora] o'clock. (São [hora] horas.)</p>

                <p>It's half past [hora]. (É/São [hora] e meia .)</p>

                <p>It's quarter past [hora]. (São [hora] e quinze.)</p>

                <p>It's quarter to [hora]. (São quinze para as [hora].)</p>

                <p>It's [hora] and [minutos]. (São [hora] e [minutos].)</p>

                <h4>4. Exemplo de Diálogo:</h4>

                <p>Person A: What time is it? (Que horas são?) <br>
                    Person B: It's three o'clock. (São três horas.) <br>
                    Person A: Do you have the time? (Você tem as horas?) <br>
                    Person B: It's half past six. (São seis e meia.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'What time is it? (Que horas são? "São duas horas.")',
                        'Answers' => array(
                            'A' => 'It\'s three o\'clock.',
                            'B' => 'It\'s two o\'clock.',
                            'C' => 'It\'s one o\'clock.'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'It\'s half past _______. (São sete e meia.)',
                        'Answers' => array(
                            'A' => 'seven',
                            'B' => 'eight',
                            'C' => 'nine'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'What time is it? (Que horas são? "São quatro e quinze.")',
                        'Answers' => array(
                            'A' => 'It\'s quarter past three.',
                            'B' => 'It\'s quarter past four.',
                            'C' => 'It\'s quarter past five.'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    4 => array(
                        'Question' => 'It\'s quarter to _______. (São quinze para as sete.)',
                        'Answers' => array(
                            'A' => 'six',
                            'B' => 'seven',
                            'C' => 'eight'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'What time is it? (Que horas são? "São cinco e vinte.")',
                        'Answers' => array(
                            'A' => 'It\'s five and fifteen minutes.',
                            'B' => 'It\'s five and twenty-five minutes.',
                            'C' => 'It\'s five and twenty minutes.'
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
                    <p><a href="m2-a7.php" class="proximo-link">Ir para a lição 17</a></p>
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