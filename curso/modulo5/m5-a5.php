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
                    <li class="nav-active"><a href="m5-a5.php">Lição 45</a></li>
                    <li><a href="m5-a6.php">Lição 46</a></li>
                    <li><a href="m5-a7.php">Lição 47</a></li>
                    <li><a href="m5-a8.php">Lição 48</a></li>
                    <li><a href="m5-a9.php">Lição 49</a></li>
                    <li><a href="m5-a10.php">Lição 50</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 5</h2>
                <h3>Lição 45 - Conversas Telefônicas</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões comuns usadas em conversas telefônicas em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Call (chamada)</p>

                <p>Answer (atender)</p>

                <p>Hang up (desligar)</p>

                <p>Voicemail (correio de voz)</p>

                <p>Hold (esperar)</p>

                <p>Speaker (viva-voz)</p>

                <p>Ring (tocar)</p>

                <p>Dial (discagem)</p>

                <p>Missed call (chamada perdida)</p>

                <p>Text message (mensagem de texto)</p>

                <h4>2. Frases Úteis:</h4>

                <p>Hello, who is this? (Olá, quem fala?)</p>

                <p>Can I speak to...? (Posso falar com...?)</p>

                <p>Hold on a moment, please. (Aguarde um momento, por favor.)</p>

                <p>I will call you back. (Eu vou te ligar de volta.)</p>

                <p>Sorry, I can't hear you. (Desculpe, não estou te ouvindo.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Hello, who is this? (Olá, quem fala?) <br>
                    Person B: Hi, it's John. Can I speak to Mary? (Oi, é o John. Posso falar com a Mary?) <br>
                    Person A: Hold on a moment, please. (Aguarde um momento, por favor.) <br>
                    Person B: Sure. (Claro.) <br>
                    Person A: Sorry, she is not available right now. Can I take a message? (Desculpe, ela não está disponível agora. Posso anotar um recado?) <br>
                    Person B: Yes, please tell her to call me back. (Sim, por favor, peça para ela me ligar de volta.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Hello, who is _______? (Olá, quem _______?)',
                        'Answers' => array(
                            'A' => 'there',
                            'B' => 'this',
                            'C' => 'speaking'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'Can I speak to _______? (Posso falar com ela?)',
                        'Answers' => array(
                            'A' => 'you',
                            'B' => 'him',
                            'C' => 'her'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    3 => array(
                        'Question' => 'Hold on a _______, please. (Aguarde um momento, por favor.)',
                        'Answers' => array(
                            'A' => 'minute',
                            'B' => 'second',
                            'C' => 'moment'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'I will call you _______. (Eu vou te ligar de volta.)',
                        'Answers' => array(
                            'A' => 'back',
                            'B' => 'later',
                            'C' => 'soon'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'Sorry, I can\'t _______ you. (Desculpe, não estou ouvindo você.)',
                        'Answers' => array(
                            'A' => 'see',
                            'B' => 'hear',
                            'C' => 'understand'
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
                    <p><a href="m5-a6.php" class="proximo-link">Ir para a lição 46</a></p>
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