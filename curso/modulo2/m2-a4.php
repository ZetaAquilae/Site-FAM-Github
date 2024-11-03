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
                    <li class="nav-active"><a href="m2-a4.php">Lição 14</a></li>
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
                <h3>Lição 14 - Estações do Ano</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes das estações do ano em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes das Estações do Ano:</h4>

                <p>Spring (primavera)</p>

                <p>Summer (verão)</p>

                <p>Autumn (fall) (outono)</p>

                <p>Winter (inverno)</p>

                <h4>2. Frases Úteis:</h4>

                <p>My favorite season is summer. (Minha estação favorita é o verão.)</p>

                <p>It is very hot in the summer. (É muito quente no verão.)</p>

                <p>The leaves fall in autumn. (As folhas caem no outono.)</p>

                <p>It is cold in the winter. (É frio no inverno.)</p>

                <p>Flowers bloom in spring. (As flores florescem na primavera.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What is your favorite season? (Qual é a sua estação favorita?) <br>
                    Person B: My favorite season is spring. (Minha estação favorita é a primavera.) <br>
                    Person A: Why do you like spring? (Por que você gosta da primavera?) <br>
                    Person B: Because the flowers bloom and the weather is nice. (Porque as flores florescem e o clima é agradável.) <br>
                    Person A: I prefer summer because I love the beach. (Eu prefiro o verão porque eu adoro a praia.)</p>
                <br><br>
                <hr>
                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Which season comes after winter? (Qual estação vem depois do inverno?)',
                        'Answers' => array(
                            'A' => 'Spring',
                            'B' => 'Summer',
                            'C' => 'Autumn'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'It is very hot in the _______. (É muito quente no _______.)',
                        'Answers' => array(
                            'A' => 'winter',
                            'B' => 'summer',
                            'C' => 'autumn'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'The leaves fall in _______. (As folhas caem no _______.)',
                        'Answers' => array(
                            'A' => 'spring',
                            'B' => 'summer',
                            'C' => 'autumn'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'Flowers bloom in _______. (As flores florescem na _______.)',
                        'Answers' => array(
                            'A' => 'spring',
                            'B' => 'winter',
                            'C' => 'autumn'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'It is cold in the _______. (É frio no _______.)',
                        'Answers' => array(
                            'A' => 'spring',
                            'B' => 'summer',
                            'C' => 'winter'
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
                    <p><a href="m2-a5.php" class="proximo-link">Ir para a lição 15</a></p>
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