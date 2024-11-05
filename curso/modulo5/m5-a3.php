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
                    <li class="nav-active"><a href="m5-a3.php">Lição 43</a></li>
                    <li><a href="m5-a4.php">Lição 44</a></li>
                    <li><a href="m5-a5.php">Lição 45</a></li>
                    <li><a href="m5-a6.php">Lição 46</a></li>
                    <li><a href="m5-a7.php">Lição 47</a></li>
                    <li><a href="m5-a8.php">Lição 48</a></li>
                    <li><a href="m5-a9.php">Lição 49</a></li>
                    <li><a href="m5-a10.php">Lição 50</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 5</h2>
                <h3>Lição 43 - Costumes Tradicionais</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas a costumes tradicionais em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Custom (costume)</p>

                <p>Tradition (tradição)</p>

                <p>Festival (festival)</p>

                <p>Ceremony (cerimônia)</p>

                <p>Ritual (ritual)</p>

                <p>Dance (dança)</p>

                <p>Music (música)</p>

                <p>Food (comida)</p>

                <p>Dress (vestimenta)</p>

                <p>Celebration (celebração)</p>

                <h4>2. Frases Úteis:</h4>

                <p>Every culture has its own customs. (Cada cultura tem seus próprios costumes.)</p>

                <p>They have many traditions. (Eles têm muitas tradições.)</p>

                <p>This festival is very important in our culture. (Este festival é muito importante na nossa cultura.)</p>

                <p>The ceremony was beautiful. (A cerimônia foi linda.)</p>

                <p>Traditional dances are part of the celebration. (Dança tradicional é parte da celebração.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What are some customs in your culture? (Quais são alguns costumes na sua cultura?) <br>
                    Person B: In my culture, we have a festival every year with traditional food and music. (Na minha cultura, temos um festival todo ano com comida e música tradicional.) <br>
                    Person A: That sounds interesting. What about traditional dress? (Isso parece interessante. E a vestimenta tradicional?) <br>
                    Person B: We wear special clothes during ceremonies and celebrations. (Usamos roupas especiais durante cerimônias e celebrações.) <br>
                    Person A: I would love to see that! (Eu adoraria ver isso!)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Every culture has its own _______. (Cada cultura tem seus próprios _______.)',
                        'Answers' => array(
                            'A' => 'languages',
                            'B' => 'traditions',
                            'C' => 'regions'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'They have many _______. (Eles têm muitos festivais.)',
                        'Answers' => array(
                            'A' => 'festivals',
                            'B' => 'foods',
                            'C' => 'clothes'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'This _______ is very important in our culture. (Este festival é muito importante na nossa cultura.)',
                        'Answers' => array(
                            'A' => 'festival',
                            'B' => 'food',
                            'C' => 'music'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'The _______ was beautiful. (A cerimônia foi linda.)',
                        'Answers' => array(
                            'A' => 'music',
                            'B' => 'food',
                            'C' => 'ceremony'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    5 => array(
                        'Question' => 'Traditional dances are part of the _______. (Dança tradicional é parte da _______.)',
                        'Answers' => array(
                            'A' => 'celebration',
                            'B' => 'region',
                            'C' => 'food'
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
                    <p><a href="m5-a4.php" class="proximo-link">Ir para a lição 44</a></p>
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