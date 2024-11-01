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
                    <li class="nav-active"><a href="m1-a7.php">Lição 7</a></li>
                    <li><a href="m1-a8.php">Lição 8</a></li>
                    <li><a href="m1-a9.php">Lição 9</a></li>
                    <li><a href="m1-a10.php">Lição 10</a></li>
                    <li class="modulo"><a href="../modulo2/m2-a1.php">Módulo 2</a></li>
                    <li class="modulo"><a href="../modulo2/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="../modulo2/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo2/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 1</h2>
                <h3>Lição 7 - Na Cozinha</h3>

                <h4>Objetivo:</h4>

<p>Aprender vocabulário e expressões comuns usados na cozinha.</p>

<h4>Conteúdo:</h4>

<h4>1. Vocabulário Comum:</h4>

<p>Stove (fogão)</p>

<p>Oven (forno)</p>

<p>Refrigerator (geladeira)</p>

<p>Sink (pia)</p>

<p>Pot (panela)</p>

<p>Pan (frigideira)</p>

<p>Knife (faca)</p>

<p>Fork (garfo)</p>

<p>Spoon (colher)</p>

<p>Plate (prato)</p>

<p>Glass (copo)</p>

<p>Cup (xícara)</p>

<p>Cook (cozinhar)</p>

<p>Bake (assar)</p>

<p>Boil (ferver)</p>

<p>Fry (fritar)</p>

<h4>2. Frases Úteis:</h4>

<p>Can you pass me the salt? (Você pode me passar o sal?)</p>

<p>I need a knife to cut the vegetables. (Eu preciso de uma faca para cortar os legumes.)</p>

<p>Preheat the oven to 180 degrees. (Pré-aqueça o forno a 180 graus.)</p>

<p>Boil the water for pasta. (Ferva a água para o macarrão.)</p>

<p>She is baking a cake. (Ela está assando um bolo.)</p>

<h4>3. Exemplo de Diálogo:</h4>

<p>Person A: Can you help me in the kitchen? <br>
Person B: Sure! What do you need? <br>
Person A: I need a knife to cut the vegetables and a pot to boil the water. <br>
Person B: Here is the knife. The pot is on the stove. <br>
Person A: Thanks! Can you also preheat the oven to 180 degrees? <br>
Person B: No problem!</p>
                <br><br>
                <hr>
                <h2>Exercícios</h2>

                <?php

$Questions = array(
    1 => array(
        'Question' => 'Qual utensílio você usa para cortar vegetais?',
        'Answers' => array(
            'A' => 'Fork',
            'B' => 'Knife',
            'C' => 'Spoon'
        ),
        'CorrectAnswer' => 'B'
    ),
    2 => array(
        'Question' => 'Onde você assa um bolo?',
        'Answers' => array(
            'A' => 'Stove',
            'B' => 'Refrigerator',
            'C' => 'Oven'
        ),
        'CorrectAnswer' => 'C'
    ),
    3 => array(
        'Question' => 'Qual item você usa para beber água?',
        'Answers' => array(
            'A' => 'Plate',
            'B' => 'Glass',
            'C' => 'Pan'
        ),
        'CorrectAnswer' => 'B'
    ),
    4 => array(
        'Question' => 'Que ação você toma ao fazer macarrão?',
        'Answers' => array(
            'A' => 'Fry',
            'B' => 'Boil',
            'C' => 'Bake'
        ),
        'CorrectAnswer' => 'B'
    ),
    5 => array(
        'Question' => 'Onde você armazena os alimentos para mantê-los refrigerados?',
        'Answers' => array(
            'A' => 'Sink',
            'B' => 'Oven',
            'C' => 'Refrigerator'
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
                    <p><a href="m1-a8.php" class="proximo-link">Ir para a lição 8</a></p>
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