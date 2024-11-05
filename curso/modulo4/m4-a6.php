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
                    <li><a href="m4-a4.php">Lição 34</a></li>
                    <li><a href="m4-a5.php">Lição 35</a></li>
                    <li class="nav-active"><a href="m4-a6.php">Lição 36</a></li>
                    <li><a href="m4-a7.php">Lição 37</a></li>
                    <li><a href="m4-a8.php">Lição 38</a></li>
                    <li><a href="m4-a9.php">Lição 39</a></li>
                    <li><a href="m4-a10.php">Lição 40</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 4</h2>
                <h3>Lição 36 - Hobbies e Tempo Livre</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas a hobbies e atividades de tempo livre em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Reading (leitura)</p>

                <p>Playing soccer (jogar futebol)</p>

                <p>Watching movies (assistir filmes)</p>

                <p>Listening to music (ouvir música)</p>

                <p>Cooking (cozinhar)</p>

                <p>Traveling (viajar)</p>

                <p>Gardening (jardinagem)</p>

                <p>Painting (pintura)</p>

                <p>Cycling (andar de bicicleta)</p>

                <p>Hiking (caminhada)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I like reading books. (Eu gosto de ler livros.)</p>

                <p>She enjoys playing soccer. (Ela gosta de jogar futebol.)</p>

                <p>He loves watching movies. (Ele adora assistir filmes.)</p>

                <p>They are listening to music. (Eles estão ouvindo música.)</p>

                <p>We enjoy cooking on weekends. (Nós gostamos de cozinhar nos fins de semana.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What do you like to do in your free time? (O que você gosta de fazer no seu tempo livre?) <br>
                    Person B: I like playing soccer and watching movies. (Eu gosto de jogar futebol e assistir filmes.) <br>
                    Person A: Do you have any other hobbies? (Você tem outros hobbies?) <br>
                    Person B: Yes, I enjoy reading books and cooking. (Sim, eu gosto de ler livros e cozinhar.) <br>
                    Person A: That sounds fun! (Isso parece divertido!)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I like _______ books. (Eu gosto de _______ livros.)',
                        'Answers' => array(
                            'A' => 'playing',
                            'B' => 'reading',
                            'C' => 'watching'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'She enjoys _______ soccer. (Ela gosta de _______ futebol.)',
                        'Answers' => array(
                            'A' => 'playing',
                            'B' => 'listening',
                            'C' => 'cooking'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'He loves _______ movies. (Ele adora _______ filmes.)',
                        'Answers' => array(
                            'A' => 'reading',
                            'B' => 'watching',
                            'C' => 'traveling'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    4 => array(
                        'Question' => 'They are _______ to music. (Eles estão _______ música.)',
                        'Answers' => array(
                            'A' => 'listening',
                            'B' => 'playing',
                            'C' => 'watching'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'We enjoy _______ on weekends. (Nós gostamos de cozinhar nos fins de semana.)',
                        'Answers' => array(
                            'A' => 'painting',
                            'B' => 'cooking',
                            'C' => 'cycling'
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
                    <p><a href="m4-a7.php" class="proximo-link">Ir para a lição 37</a></p>
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