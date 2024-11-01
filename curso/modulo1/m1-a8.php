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
                    <li class="nav-active"><a href="m1-a8.php">Lição 8</a></li>
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
                <h3>Lição 8 - Transporte</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas a diferentes meios de transporte.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Car (carro)</p>

                <p>Bus (ônibus)</p>

                <p>Train (trem)</p>

                <p>Bicycle (bicicleta)</p>

                <p>Airplane (avião)</p>

                <p>Boat (barco)</p>

                <p>Subway (metrô)</p>

                <p>Taxi (táxi)</p>

                <p>Ticket (bilhete)</p>

                <p>Station (estação)</p>

                <p>Airport (aeroporto)</p>

                <p>Traffic (trânsito)</p>

                <h4>2. Frases Úteis:</h4>

                <p>How do you get to work? (Como você vai para o trabalho?)</p>

                <p>I take the bus. (Eu pego o ônibus.)</p>

                <p>Where is the train station? (Onde fica a estação de trem?)</p>

                <p>I need a taxi. (Eu preciso de um táxi.)</p>

                <p>Do you have a ticket? (Você tem um bilhete?)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: How do you get to work? <br>
                    Person B: I usually take the bus, but sometimes I ride my bicycle. <br>
                    Person A: Where is the nearest bus stop? <br>
                    Person B: It's just around the corner. Do you need a ticket? <br>
                    Person A: Yes, I do. Where can I buy one? <br>
                    Person B: You can get one at the station or online.</p>
                <br><br>
                <hr>
                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Qual veículo você usa para voar para outro país?',
                        'Answers' => array(
                            'A' => 'Airplane',
                            'B' => 'Car',
                            'C' => 'Bicycle'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'Onde você espera o trem?',
                        'Answers' => array(
                            'A' => 'Airport',
                            'B' => 'Station',
                            'C' => 'Stop'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'O que você precisa para viajar em transporte público?',
                        'Answers' => array(
                            'A' => 'Ticket',
                            'B' => 'License',
                            'C' => 'Passport'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'Qual meio de transporte tem duas rodas?',
                        'Answers' => array(
                            'A' => 'Bus',
                            'B' => 'Train',
                            'C' => 'Bicycle'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    5 => array(
                        'Question' => 'O que você pega quando quer uma viagem rápida e direta?',
                        'Answers' => array(
                            'A' => 'Taxi',
                            'B' => 'Boat',
                            'C' => 'Bus'
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
                    <p><a href="m1-a9.php" class="proximo-link">Ir para a lição 9</a></p>
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