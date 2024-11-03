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
                    <li class="nav-active"><a href="m1-a5.php">Lição 5</a></li>
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
                <h3>Lição 5 - No Restaurante</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões úteis para usar em um restaurante.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Menu (cardápio)</p>

                <p>Waiter/Waitress (garçom/garçonete)</p>

                <p>Bill (conta)</p>

                <p>Table (mesa)</p>

                <p>Reservation (reserva)</p>

                <p>Drink (bebida)</p>

                <p>Food (comida)</p>

                <p>Appetizer (entrada)</p>

                <p>Main Course (prato principal)</p>

                <p>Dessert (sobremesa)</p>

                <h4>2. Frases Úteis:</h4>

                <p>Can I see the menu, please? (Posso ver o cardápio, por favor?)</p>

                <p>I would like to make a reservation. (Gostaria de fazer uma reserva.)</p>

                <p>I would like to order... (Gostaria de pedir...)</p>

                <p>Can I have the bill, please? (Posso ter a conta, por favor?)</p>

                <p>What do you recommend? (O que você recomenda?)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Waiter: Good evening! Can I take your order? <br>
                    Customer: Yes, I would like to order a steak with a side of vegetables, please. <br>
                    Waiter: Sure. Would you like anything to drink? <br>
                    Customer: I'll have a glass of red wine, please. <br>
                    Waiter: Excellent choice. Anything for dessert? <br>
                    Customer: Yes, I'll have the chocolate cake.</p>
                <br><br>
                <hr>
                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'O que você pede quando quer ver a lista de pratos?',
                        'Answers' => array(
                            'A' => 'Bill',
                            'B' => 'Menu',
                            'C' => 'Table'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'Quem traz sua comida em um restaurante?',
                        'Answers' => array(
                            'A' => 'Chef',
                            'B' => 'Customer',
                            'C' => 'Waiter'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    3 => array(
                        'Question' => 'Você quer pagar. O que você pede?',
                        'Answers' => array(
                            'A' => 'Reservation',
                            'B' => 'Bill',
                            'C' => 'Appetizer'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    4 => array(
                        'Question' => 'Como você chama a parte principal da sua refeição?',
                        'Answers' => array(
                            'A' => 'Appetizer',
                            'B' => 'Dessert',
                            'C' => 'Main Course'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    5 => array(
                        'Question' => 'Se você quiser pedir uma sugestão, você diz:',
                        'Answers' => array(
                            'A' => 'Can I see the menu, please?',
                            'B' => 'What do you recommend?',
                            'C' => 'Can I have the bill, please?'
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
                    <p><a href="m1-a6.php" class="proximo-link">Ir para a lição 6</a></p>
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