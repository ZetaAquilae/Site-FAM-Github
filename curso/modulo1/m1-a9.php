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
                    <li><a href="m1-a7.php">Lição 7</a></li>
                    <li><a href="m1-a8.php">Lição 8</a></li>
                    <li class="nav-active"><a href="m1-a9.php">Lição 9</a></li>
                    <li><a href="m1-a10.php">Lição 10</a></li>
                    <li class="modulo"><a href="../modulo2/m2-a1.php">Módulo 2</a></li>
                    <li class="modulo"><a href="../modulo3/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 1</h2>
                <h3>Lição 9 - Viagem</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões úteis para usar durante viagens.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Airport (aeroporto)</p>

                <p>Flight (voo)</p>

                <p>Ticket (bilhete)</p>

                <p>Luggage (bagagem)</p>

                <p>Passport (passaporte)</p>

                <p>Hotel (hotel)</p>

                <p>Reservation (reserva)</p>

                <p>Taxi (táxi)</p>

                <p>Map (mapa)</p>

                <p>Tourist (turista)</p>

                <p>Guide (guia)</p>

                <p>Souvenir (lembrança)</p>

                <h4>2. Frases Úteis:</h4>

                <p>Where is the airport? (Onde fica o aeroporto?)</p>

                <p>I have a reservation. (Eu tenho uma reserva.)</p>

                <p>How much is the taxi fare? (Quanto é a tarifa do táxi?)</p>

                <p>Can I see your passport, please? (Posso ver seu passaporte, por favor?)</p>

                <p>Do you have a map? (Você tem um mapa?)</p>

                <p>Where can I buy a souvenir? (Onde posso comprar uma lembrança?)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Tourist: Excuse me, where is the nearest hotel? <br>
                    Local: The nearest hotel is two blocks away. <br>
                    Tourist: Thank you! How much is the taxi fare to get there? <br>
                    Local: It should be around $10. Do you need a map? <br>
                    Tourist: Yes, please. That would be very helpful.</p>
                <br><br>
                <hr>
                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Onde você pode ficar durante sua viagem?',
                        'Answers' => array(
                            'A' => 'Hotel',
                            'B' => 'Airport',
                            'C' => 'Taxi'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'O que você precisa para embarcar em um voo?',
                        'Answers' => array(
                            'A' => 'Luggage',
                            'B' => 'Ticket',
                            'C' => 'Guide'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'Onde você despacha sua bagagem antes de um voo?',
                        'Answers' => array(
                            'A' => 'Hotel',
                            'B' => 'Reservation',
                            'C' => 'Airport'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'Como você chama uma pessoa que visita um lugar por prazer?',
                        'Answers' => array(
                            'A' => 'Tourist',
                            'B' => 'Guide',
                            'C' => 'Passenger'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'O que você compra para lembrar da sua viagem?',
                        'Answers' => array(
                            'A' => 'Ticket',
                            'B' => 'Souvenir',
                            'C' => 'Map'
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
                    <p><a href="m1-a10.php" class="proximo-link">Ir para a lição 10</a></p>
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