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
                    <li><a href="m5-a9.php">Lição 49</a></li>
                    <li class="nav-active"><a href="m5-a10.php">Lição 50</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 5</h2>
                <h3>Lição 50 - Despedidas</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas a despedidas em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Frases Comuns de Despedida:</h4>

                <p>Goodbye (adeus)</p>

                <p>Bye (tchau)</p>

                <p>See you later (até mais tarde)</p>

                <p>Take care (cuide-se)</p>

                <p>Have a good day (tenha um bom dia)</p>

                <p>Farewell (despedida)</p>

                <p>See you soon (até breve)</p>

                <p>Safe travels (boa viagem)</p>

                <p>Have a nice trip (tenha uma boa viagem)</p>

                <p>It was nice meeting you (foi bom conhecer você)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I have to go now. (Eu tenho que ir agora.)</p>

                <p>Let's stay in touch. (Vamos manter contato.)</p>

                <p>Don't be a stranger. (Não desapareça.)</p>

                <p>I'll miss you. (Vou sentir sua falta.)</p>

                <p>Until next time. (Até a próxima.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: I have to go now. (Eu tenho que ir agora.) <br>
                    Person B: Goodbye! (Adeus!) <br>
                    Person A: See you later. (Até mais tarde.) <br>
                    Person B: Take care. (Cuide-se.) <br>
                    Person A: You too. Have a good day! (Você também. Tenha um bom dia!)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Adeus',
                        'Answers' => array(
                            'A' => 'Hello',
                            'B' => 'Goodbye',
                            'C' => 'Please'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'Have a _______ day. (Tenha um _______ dia.)',
                        'Answers' => array(
                            'A' => 'bad',
                            'B' => 'nice',
                            'C' => 'boring'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'See you _______. (Até mais tarde.)',
                        'Answers' => array(
                            'A' => 'later',
                            'B' => 'today',
                            'C' => 'never'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'Safe _______. (Boa _______.)',
                        'Answers' => array(
                            'A' => 'night',
                            'B' => 'travels',
                            'C' => 'food'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'It was nice _______ you. (Foi bom _______ você.)',
                        'Answers' => array(
                            'A' => 'see',
                            'B' => 'help',
                            'C' => 'meeting'
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

                <div class="align-center">
                    <br><br>
                    <p>Parabéns! Você chegou ao fim do curso de Inglês nível iniciante. <a href="mailto:vhsdvd1@gmail.com">Clique para pedir seu certificado</a></p>
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