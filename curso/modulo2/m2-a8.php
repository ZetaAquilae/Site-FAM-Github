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
                    <li class="nav-active"><a href="m2-a8.php">Lição 18</a></li>
                    <li><a href="m2-a9.php">Lição 19</a></li>
                    <li><a href="m2-a10.php">Lição 20</a></li>
                    <li class="modulo"><a href="../modulo3/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 2</h2>
                <h3>Lição 18 - Tempo e Clima</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas ao tempo e clima em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Sunny (ensolarado)</p>

                <p>Rainy (chuvoso)</p>

                <p>Cloudy (nublado)</p>

                <p>Windy (ventoso)</p>

                <p>Snowy (nevando)</p>

                <p>Hot (quente)</p>

                <p>Cold (frio)</p>

                <p>Warm (morno)</p>

                <p>Cool (fresco)</p>

                <p>Stormy (tempestuoso)</p>

                <p>Foggy (nevoeiro)</p>

                <h4>2. Frases Úteis:</h4>

                <p>What is the weather like today? (Como está o tempo hoje?)</p>

                <p>It is sunny and hot. (Está ensolarado e quente.)</p>

                <p>It is going to rain. (Vai chover.)</p>

                <p>The weather is cloudy and cool. (O tempo está nublado e fresco.)</p>

                <p>I love snowy days. (Eu amo dias de neve.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What is the weather like today? (Como está o tempo hoje?) <br>
                    Person B: It is sunny and hot. (Está ensolarado e quente.) <br>
                    Person A: Do you think it will rain later? (Você acha que vai chover mais tarde?) <br>
                    Person B: No, it will stay sunny all day. (Não, vai ficar ensolarado o dia todo.) <br>
                    Person A: Great! Let's go to the beach. (Ótimo! Vamos à praia.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'It is _______ and hot today. (Está _______ e quente hoje.)',
                        'Answers' => array(
                            'A' => 'cloudy',
                            'B' => 'sunny',
                            'C' => 'rainy'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'What is the weather like? (Como está o tempo?)',
                        'Answers' => array(
                            'A' => 'It is rainy.',
                            'B' => 'It is a car.',
                            'C' => 'It is joking.'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'I love _______ days. (Eu amo dias de _______.)',
                        'Answers' => array(
                            'A' => 'snowy',
                            'B' => 'dog',
                            'C' => 'school'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'It is going to _______. (Vai _______.)',
                        'Answers' => array(
                            'A' => 'sunny',
                            'B' => 'beach',
                            'C' => 'rain'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    5 => array(
                        'Question' => 'The weather is _______ and cool. (O tempo está _______ e fresco.)',
                        'Answers' => array(
                            'A' => 'hot',
                            'B' => 'cloudy',
                            'C' => 'stormy'
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
                    <p><a href="m2-a9.php" class="proximo-link">Ir para a lição 19</a></p>
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