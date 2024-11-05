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
                    <li class="nav-active"><a href="m5-a1.php">Lição 41</a></li>
                    <li><a href="m5-a2.php">Lição 42</a></li>
                    <li><a href="m5-a3.php">Lição 43</a></li>
                    <li><a href="m5-a4.php">Lição 44</a></li>
                    <li><a href="m5-a5.php">Lição 45</a></li>
                    <li><a href="m5-a6.php">Lição 46</a></li>
                    <li><a href="m5-a7.php">Lição 47</a></li>
                    <li><a href="m5-a8.php">Lição 48</a></li>
                    <li><a href="m5-a9.php">Lição 49</a></li>
                    <li><a href="m4-a10.php">Lição 50</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 5</h2>
                <h3>Lição 41 - Festas de Aniversário</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas a festas de aniversário em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Birthday (aniversário)</p>

                <p>Party (festa)</p>

                <p>Cake (bolo)</p>

                <p>Balloons (balões)</p>

                <p>Gifts (presentes)</p>

                <p>Invitation (convite)</p>

                <p>Candles (velas)</p>

                <p>Sing (cantar)</p>

                <p>Celebrate (celebrar)</p>

                <p>Games (jogos)</p>

                <h4>2. Frases Úteis:</h4>

                <p>Happy birthday! (Feliz aniversário!)</p>

                <p>She is having a birthday party. (Ela está tendo uma festa de aniversário.)</p>

                <p>Let's sing "Happy Birthday". (Vamos cantar "Parabéns para Você".)</p>

                <p>He is blowing out the candles. (Ele está apagando as velas.)</p>

                <p>They brought many gifts. (Eles trouxeram muitos presentes.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: When is your birthday? (Quando é seu aniversário?) <br>
                    Person B: My birthday is next week. (Meu aniversário é na próxima semana.) <br>
                    Person A: Are you having a party? (Você vai fazer uma festa?) <br>
                    Person B: Yes, I am having a birthday party at my house. (Sim, vou fazer uma festa de aniversário na minha casa.) <br>
                    Person A: That sounds fun! (Isso parece divertido!)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Happy _______! (Feliz _______!)',
                        'Answers' => array(
                            'A' => 'birthday',
                            'B' => 'party',
                            'C' => 'cake'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'She is having a _______ party. (Ela está tendo uma festa de _______.)',
                        'Answers' => array(
                            'A' => 'gifts',
                            'B' => 'birthday',
                            'C' => 'candles'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'Let\'s sing _______. (Vamos cantar _______.)',
                        'Answers' => array(
                            'A' => 'games',
                            'B' => 'invitation',
                            'C' => 'Happy Birthday'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'He is blowing out the _______. (Ele está apagando as _______.)',
                        'Answers' => array(
                            'A' => 'balloons',
                            'B' => 'candles',
                            'C' => 'games'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'They brought many _______. (Eles trouxeram muitos _______.)',
                        'Answers' => array(
                            'A' => 'presents',
                            'B' => 'songs',
                            'C' => 'candles'
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
                    <p><a href="m5-a2.php" class="proximo-link">Ir para a lição 42</a></p>
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