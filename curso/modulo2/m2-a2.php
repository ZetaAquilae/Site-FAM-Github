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
                    <li class="nav-active"><a href="m2-a2.php">Lição 12</a></li>
                    <li><a href="m2-a3.php">Lição 13</a></li>
                    <li><a href="m2-a4.php">Lição 14</a></li>
                    <li><a href="m2-a5.php">Lição 15</a></li>
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
                <h3>Lição 12 - Números de 1 a 100</h3>

                <h4>Objetivo:</h4>

                <p>Aprender a contar e reconhecer os números de 1 a 100 em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Números de 1 a 10:</h4>

                <p>One (um)</p>

                <p>Two (dois)</p>

                <p>Three (três)</p>

                <p>Four (quatro)</p>

                <p>Five (cinco)</p>

                <p>Six (seis)</p>

                <p>Seven (sete)</p>

                <p>Eight (oito)</p>

                <p>Nine (nove)</p>

                <p>Ten (dez)</p>

                <h4>2. Números de 11 a 20:</h4>

                <p>Eleven (onze)</p>

                <p>Twelve (doze)</p>

                <p>Thirteen (treze)</p>

                <p>Fourteen (catorze)</p>

                <p>Fifteen (quinze)</p>

                <p>Sixteen (dezesseis)</p>

                <p>Seventeen (dezessete)</p>

                <p>Eighteen (dezoito)</p>

                <p>Nineteen (dezenove)</p>

                <p>Twenty (vinte)</p>

                <h4>3. Números de 21 a 100 (principais):</h4>

                <p>Thirty (trinta)</p>

                <p>Forty (quarenta)</p>

                <p>Fifty (cinquenta)</p>

                <p>Sixty (sessenta)</p>

                <p>Seventy (setenta)</p>

                <p>Eighty (oitenta)</p>

                <p>Ninety (noventa)</p>

                <p>One hundred (cem)</p>

                <h4>4. Como formar os números:</h4>

                <p>Números de 21 a 99 são formados combinando as dezenas com as unidades. Ex.: 21 (twenty-one), 45 (forty-five), 99 (ninety-nine).</p>
                <br><br>
                <hr>
                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'What number is "twenty-five"? (Qual número é "twenty-five"?)',
                        'Answers' => array(
                            'A' => '15',
                            'B' => '25',
                            'C' => '35'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'How do you say "40" in English? (Como se diz "40" em inglês?)',
                        'Answers' => array(
                            'A' => 'Fourteen',
                            'B' => 'Forty',
                            'C' => 'Four'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'Which number is "seventy-two"? (Qual número é "seventy-two"?)',
                        'Answers' => array(
                            'A' => '72',
                            'B' => '27',
                            'C' => '77'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'How do you write "88" in English? (Como se escreve "88" em inglês?)',
                        'Answers' => array(
                            'A' => 'Eighty-eight',
                            'B' => 'Eighteen',
                            'C' => 'Eighty'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'What number is "ninety-nine"? (Qual número é "ninety-nine"?)',
                        'Answers' => array(
                            'A' => '89',
                            'B' => '99',
                            'C' => '19'
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
                    <p><a href="m2-a3.php" class="proximo-link">Ir para a lição 13</a></p>
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