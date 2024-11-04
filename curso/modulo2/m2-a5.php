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
                    <li class="nav-active"><a href="m2-a5.php">Lição 15</a></li>
                    <li><a href="m2-a6.php">Lição 16</a></li>
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
                <h3>Lição 15 - Meses do Ano</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes dos meses do ano em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes dos Meses do Ano:</h4>

                <p>January (janeiro)</p>

                <p>February (fevereiro)</p>

                <p>March (março)</p>

                <p>April (abril)</p>

                <p>May (maio)</p>

                <p>June (junho)</p>

                <p>July (julho)</p>

                <p>August (agosto)</p>

                <p>September (setembro)</p>

                <p>October (outubro)</p>

                <p>November (novembro)</p>

                <p>December (dezembro)</p>

                <h4>2. Frases Úteis:</h4>

                <p>My birthday is in July. (Meu aniversário é em julho.)</p>

                <p>We go on vacation in December. (Nós saímos de férias em dezembro.)</p>

                <p>The school year starts in February. (O ano letivo começa em fevereiro.)</p>

                <p>What month is it? (Que mês é este?)</p>

                <p>It is cold in January. (Faz frio em janeiro.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: When is your birthday? (Quando é seu aniversário?) <br>
                    Person B: My birthday is in August. (Meu aniversário é em agosto.) <br>
                    Person A: What month is it now? (Que mês é agora?) <br>
                    Person B: It is November. (É novembro.) <br>
                    Person A: Do you have plans for December? (Você tem planos para dezembro?) <br>
                    Person B: Yes, I am going to visit my family. (Sim, vou visitar minha família.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'What month is "May"? (Qual mês é "May"?)',
                        'Answers' => array(
                            'A' => 'Março',
                            'B' => 'Maio',
                            'C' => 'Junho'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'When is your birthday? (Quando é seu aniversário?)',
                        'Answers' => array(
                            'A' => 'My birthday is in July.',
                            'B' => 'I am 25 years old.',
                            'C' => 'I live in New York.'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'What month comes after April? (Qual mês vem depois de abril?)',
                        'Answers' => array(
                            'A' => 'March',
                            'B' => 'May',
                            'C' => 'June'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    4 => array(
                        'Question' => 'We go on vacation in _______. (Nós saímos de férias em dezembro.)',
                        'Answers' => array(
                            'A' => 'November',
                            'B' => 'December',
                            'C' => 'January'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'The school year starts in _______. (O ano letivo começa em fevereiro.)',
                        'Answers' => array(
                            'A' => 'February',
                            'B' => 'March',
                            'C' => 'April'
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
                    <p><a href="m2-a6.php" class="proximo-link">Ir para a lição 16</a></p>
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