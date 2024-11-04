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
                    <li class="modulo"><a href="m4-a1.php">Módulo 4</a></li>
                    <li><a href="m4-a1.php">Lição 31</a></li>
                    <li><a href="m4-a2.php">Lição 32</a></li>
                    <li><a href="m4-a3.php">Lição 33</a></li>
                    <li class="nav-active"><a href="m4-a4.php">Lição 34</a></li>
                    <li><a href="m4-a5.php">Lição 35</a></li>
                    <li><a href="m4-a6.php">Lição 36</a></li>
                    <li><a href="m4-a7.php">Lição 37</a></li>
                    <li><a href="m4-a8.php">Lição 38</a></li>
                    <li><a href="m4-a9.php">Lição 39</a></li>
                    <li><a href="m4-a10.php">Lição 40</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 3</h2>
                <h3>Lição 34 - Países e Nacionalidades</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes dos países e suas nacionalidades em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <p>1. Nomes dos Países e Nacionalidades:</p>

                <p>Brazil (Brasil) - Brazilian (brasileiro)</p>

                <p>United States (Estados Unidos) - American (americano)</p>

                <p>Canada (Canadá) - Canadian (canadense)</p>

                <p>England (Inglaterra) - English (inglês)</p>

                <p>France (França) - French (francês)</p>

                <p>Germany (Alemanha) - German (alemão)</p>

                <p>Italy (Itália) - Italian (italiano)</p>

                <p>Japan (Japão) - Japanese (japonês)</p>

                <p>China (China) - Chinese (chinês)</p>

                <p>Mexico (México) - Mexican (mexicano)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I am from Brazil. (Eu sou do Brasil.)</p>

                <p>She is American. (Ela é americana.)</p>

                <p>They are from Canada. (Eles são do Canadá.)</p>

                <p>He is French. (Ele é francês.)</p>

                <p>We live in Japan. (Nós moramos no Japão.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Where are you from? (De onde você é?) <br>
                    Person B: I am from Italy. (Eu sou da Itália.) <br>
                    Person A: Are you Italian? (Você é italiano?) <br>
                    Person B: Yes, I am Italian. (Sim, eu sou italiano.) <br>
                    Person A: Where do you live now? (Onde você mora agora?) <br>
                    Person B: I live in the United States. (Eu moro nos Estados Unidos.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I am from _______. (Eu sou do Brasil.)',
                        'Answers' => array(
                            'A' => 'Brazil',
                            'B' => 'Canada',
                            'C' => 'Italy'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'She is _______. (Ela é americana.)',
                        'Answers' => array(
                            'A' => 'American',
                            'B' => 'French',
                            'C' => 'Mexican'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'They are from _______. (Eles são do Canadá.)',
                        'Answers' => array(
                            'A' => 'Japan',
                            'B' => 'China',
                            'C' => 'Canada'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'He is _______. (Ele é francês.)',
                        'Answers' => array(
                            'A' => 'English',
                            'B' => 'German',
                            'C' => 'French'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    5 => array(
                        'Question' => 'We live in _______. (Nós moramos no Japão.)',
                        'Answers' => array(
                            'A' => 'Germany',
                            'B' => 'Japan',
                            'C' => 'Italy'
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
                    <p><a href="m4-a5.php" class="proximo-link">Ir para a lição 35</a></p>
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