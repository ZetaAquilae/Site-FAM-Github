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
                    <li><a href="m4-a6.php">Lição 36</a></li>
                    <li><a href="m4-a7.php">Lição 37</a></li>
                    <li><a href="m4-a8.php">Lição 38</a></li>
                    <li class="nav-active"><a href="m4-a9.php">Lição 39</a></li>
                    <li><a href="m4-a10.php">Lição 40</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 4</h2>
                <h3>Lição 39 - Filmes e Programas de TV</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas a filmes e programas de TV em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Tipos de Filmes e Programas:</h4>

                <p>Movie (filme)</p>

                <p>TV Show (programa de TV)</p>

                <p>Comedy (comédia)</p>

                <p>Drama (drama)</p>

                <p>Action (ação)</p>

                <p>Horror (terror)</p>

                <p>Documentary (documentário)</p>

                <p>Cartoon (desenho animado)</p>

                <p>Reality show (reality show)</p>

                <p>Series (série)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I like watching movies. (Eu gosto de assistir filmes.)</p>

                <p>What is your favorite TV show? (Qual é o seu programa de TV favorito?)</p>

                <p>She loves comedy films. (Ela adora filmes de comédia.)</p>

                <p>They are watching a drama series. (Eles estão assistindo a uma série de drama.)</p>

                <p>We enjoy watching documentaries. (Nós gostamos de assistir documentários.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What do you want to watch tonight? (O que você quer assistir hoje à noite?) <br>
                    Person B: I want to watch an action movie. (Eu quero assistir um filme de ação.) <br>
                    Person A: Do you like horror movies? (Você gosta de filmes de terror?) <br>
                    Person B: No, I prefer comedy or drama. (Não, eu prefiro comédia ou drama.) <br>
                    Person A: What is your favorite TV show? (Qual é o seu programa de TV favorito?) <br>
                    Person B: My favorite TV show is a documentary series about nature. (Meu programa de TV favorito é uma série documental sobre natureza.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I like watching _______. (Eu gosto de assistir _______.)',
                        'Answers' => array(
                            'A' => 'movies',
                            'B' => 'books',
                            'C' => 'games'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'What is your favorite _______? (Qual é o seu programa de TV favorito?)',
                        'Answers' => array(
                            'A' => 'food',
                            'B' => 'TV show',
                            'C' => 'color'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'She loves _______ films. (Ela adora filmes de comédia.)',
                        'Answers' => array(
                            'A' => 'comedy',
                            'B' => 'music',
                            'C' => 'art'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'They are watching a _______ series. (Eles estão assistindo a uma série de _______.)',
                        'Answers' => array(
                            'A' => 'drama',
                            'B' => 'sports',
                            'C' => 'news'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'We enjoy watching _______. (Nós gostamos de assistir documentários.)',
                        'Answers' => array(
                            'A' => 'reality shows',
                            'B' => 'documentaries',
                            'C' => 'cartoons'
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
                    <p><a href="m4-a10.php" class="proximo-link">Ir para a lição 40</a></p>
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