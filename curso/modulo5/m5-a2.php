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
                    <li class="nav-active"><a href="m5-a2.php">Lição 42</a></li>
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
                <h3>Lição 42 - Diferenças Culturais</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas às diferenças culturais em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Culture (cultura)</p>

                <p>Tradition (tradição)</p>

                <p>Custom (costume)</p>

                <p>Festival (festival)</p>

                <p>Celebration (celebração)</p>

                <p>Language (língua)</p>

                <p>Food (comida)</p>

                <p>Religion (religião)</p>

                <p>Clothing (vestuário)</p>

                <p>Etiquette (etiqueta)</p>

                <h4>2. Frases Úteis:</h4>

                <p>Every culture has its own traditions. (Cada cultura tem suas próprias tradições.)</p>

                <p>They celebrate many festivals. (Eles celebram muitos festivais.)</p>

                <p>Food is an important part of their culture. (A comida é uma parte importante da cultura deles.)</p>

                <p>We respect different religions. (Nós respeitamos diferentes religiões.)</p>

                <p>Traditional clothing varies by region. (O vestuário tradicional varia por região.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What are some traditions in your culture? (Quais são algumas tradições na sua cultura?) <br>
                    Person B: In my culture, we celebrate the New Year with fireworks and special foods. (Na minha cultura, nós celebramos o Ano Novo com fogos de artifício e comidas especiais.) <br>
                    Person A: That sounds interesting. What about religious practices? (Isso parece interessante. E quanto às práticas religiosas?) <br>
                    Person B: We attend religious ceremonies and festivals throughout the year. (Nós participamos de cerimônias religiosas e festivais durante todo o ano.) <br>
                    Person A: How does traditional clothing look like in your country? (Como é o vestuário tradicional no seu país?) <br>
                    Person B: Traditional clothing includes colorful dresses and headwear. (O vestuário tradicional inclui vestidos coloridos e toucados.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Every culture has its own _______. (Cada cultura tem suas próprias _______.)',
                        'Answers' => array(
                            'A' => 'languages',
                            'B' => 'traditions',
                            'C' => 'regions'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'They celebrate many _______. (Eles celebram muitos _______.)',
                        'Answers' => array(
                            'A' => 'festivals',
                            'B' => 'foods',
                            'C' => 'clothes'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'Food is an important part of their _______. (A comida é uma parte importante da _______ deles.)',
                        'Answers' => array(
                            'A' => 'religion',
                            'B' => 'custom',
                            'C' => 'culture'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'We respect different _______. (Nós respeitamos diferentes religiões.)',
                        'Answers' => array(
                            'A' => 'languages',
                            'B' => 'religions',
                            'C' => 'clothes'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'Traditional clothing varies by _______. (O vestuário tradicional varia por _______.)',
                        'Answers' => array(
                            'A' => 'region',
                            'B' => 'food',
                            'C' => 'language'
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
                    <p><a href="m5-a3.php" class="proximo-link">Ir para a lição 43</a></p>
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