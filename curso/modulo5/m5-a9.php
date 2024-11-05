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
                    <li class="modulo"><a href="../modulo2/m2-a1.php">Módulo 2</a></li>
                    <li class="modulo"><a href="../modulo3/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="m5-a1.php">Módulo 5</a></li>
                    <li><a href="m5-a1.php">Lição 41</a></li>
                    <li><a href="m5-a2.php">Lição 42</a></li>
                    <li><a href="m5-a3.php">Lição 43</a></li>
                    <li><a href="m5-a4.php">Lição 44</a></li>
                    <li><a href="m5-a5.php">Lição 45</a></li>
                    <li><a href="m5-a6.php">Lição 46</a></li>
                    <li><a href="m5-a7.php">Lição 47</a></li>
                    <li><a href="m5-a8.php">Lição 48</a></li>
                    <li class="nav-active"><a href="m5-a9.php">Lição 49</a></li>
                    <li><a href="m4-a10.php">Lição 50</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 5</h2>
                <h3>Lição 49 - Essenciais para Viagens</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas aos itens essenciais para viagens em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Passport (passaporte)</p>

                <p>Luggage (bagagem)</p>

                <p>Ticket (bilhete)</p>

                <p>Map (mapa)</p>

                <p>Guidebook (guia de viagem)</p>

                <p>Itinerary (itinerário)</p>

                <p>Travel insurance (seguro de viagem)</p>

                <p>Boarding pass (cartão de embarque)</p>

                <p>Currency (moeda)</p>

                <p>Adapter (adaptador)</p>

                <h4>2. Frases Úteis:</h4>

                <p>Don't forget your passport. (Não se esqueça do seu passaporte.)</p>

                <p>Where is my luggage? (Onde está minha bagagem?)</p>

                <p>I need to buy a ticket. (Eu preciso comprar um bilhete.)</p>

                <p>Do you have a map? (Você tem um mapa?)</p>

                <p>The guidebook is very helpful. (O guia de viagem é muito útil.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What should I pack for the trip? (O que eu devo levar para a viagem?) <br>
                    Person B: Make sure you have your passport, tickets, and a map. (Certifique-se de levar seu passaporte, bilhetes e um mapa.) <br>
                    Person A: Do I need travel insurance? (Eu preciso de seguro de viagem?) <br>
                    Person B: Yes, it's always a good idea to have travel insurance. (Sim, é sempre uma boa ideia ter seguro de viagem.) <br>
                    Person A: Thank you for the tips! (Obrigado pelas dicas!)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Don\'t forget your _______. (Não se esqueça do seu passaporte.)',
                        'Answers' => array(
                            'A' => 'ticket',
                            'B' => 'passport',
                            'C' => 'map'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'Where is my _______? (Onde está minha bagagem?)',
                        'Answers' => array(
                            'A' => 'currency',
                            'B' => 'adapter',
                            'C' => 'luggage'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    3 => array(
                        'Question' => 'I need to buy a _______. (Eu preciso comprar um bilhete.)',
                        'Answers' => array(
                            'A' => 'map',
                            'B' => 'ticket',
                            'C' => 'guidebook'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    4 => array(
                        'Question' => 'Do you have a _______? (Você tem um mapa?)',
                        'Answers' => array(
                            'A' => 'passport',
                            'B' => 'ticket',
                            'C' => 'map'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    5 => array(
                        'Question' => 'The _______ is very helpful. (O guia de viagem é muito útil.)',
                        'Answers' => array(
                            'A' => 'itinerary',
                            'B' => 'guidebook',
                            'C' => 'adapter'
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
                    <p><a href="m5-a10.php" class="proximo-link">Ir para a lição 50</a></p>
                </div>

            </main>
        <?php

        }

        mysqli_close($dbc);
        ?>

        <footer>
            <p id="copyright">Todos os direitos reservados
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </footer>

    </div>
</body>

</html>