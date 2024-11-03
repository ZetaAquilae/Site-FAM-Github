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
                    <li><a href="m2-a7.php">Lição 17</a></li>
                    <li><a href="m2-a8.php">Lição 18</a></li>
                    <li class="nav-active"><a href="m2-a9.php">Lição 19</a></li>
                    <li><a href="m2-a10.php">Lição 20</a></li>
                    <li class="modulo"><a href="../modulo3/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 2</h2>
                <h3>Lição 19 - Cores</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes das cores em inglês e como usá-las em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes das Cores:</h4>

                <p>Red (vermelho)</p>

                <p>Blue (azul)</p>

                <p>Yellow (amarelo)</p>

                <p>Green (verde)</p>

                <p>Black (preto)</p>

                <p>White (branco)</p>

                <p>Orange (laranja)</p>

                <p>Purple (roxo)</p>

                <p>Pink (rosa)</p>

                <p>Brown (marrom)</p>

                <p>Gray (cinza)</p>

                <h4>2. Frases Úteis:</h4>

                <p>What is your favorite color? (Qual é a sua cor favorita?)</p>

                <p>My favorite color is blue. (Minha cor favorita é azul.)</p>

                <p>The sky is blue. (O céu é azul.)</p>

                <p>The apple is red. (A maçã é vermelha.)</p>

                <p>She is wearing a yellow dress. (Ela está usando um vestido amarelo.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What is your favorite color? (Qual é a sua cor favorita?) <br>
                    Person B: My favorite color is green. (Minha cor favorita é verde.) <br>
                    Person A: Do you like purple? (Você gosta de roxo?) <br>
                    Person B: Yes, I like purple and pink. (Sim, eu gosto de roxo e rosa.) <br>
                    Person A: I think red is the best color. (Eu acho que vermelho é a melhor cor.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'What color is the sky? (Qual é a cor do céu?)',
                        'Answers' => array(
                            'A' => 'Red',
                            'B' => 'Blue',
                            'C' => 'Green'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'The apple is _______. (A maçã é _______.)',
                        'Answers' => array(
                            'A' => 'Yellow',
                            'B' => 'Black',
                            'C' => 'Red'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    3 => array(
                        'Question' => 'She is wearing a _______ dress. (Ela está usando um vestido amarelo.)',
                        'Answers' => array(
                            'A' => 'Yellow',
                            'B' => 'Gray',
                            'C' => 'Brown'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'What is your favorite color? (Qual é a sua cor favorita?)',
                        'Answers' => array(
                            'A' => 'My favorite color is green.',
                            'B' => 'I am 25 years old.',
                            'C' => 'I live in New York.'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'Do you like _______? (Você gosta de rosa?)',
                        'Answers' => array(
                            'A' => 'water',
                            'B' => 'pink',
                            'C' => 'book'
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
                    <p><a href="m2-a10.php" class="proximo-link">Ir para a lição 20</a></p>
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