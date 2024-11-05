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
                    <li class="nav-active"><a href="m4-a5.php">Lição 35</a></li>
                    <li><a href="m4-a6.php">Lição 36</a></li>
                    <li><a href="m4-a7.php">Lição 37</a></li>
                    <li><a href="m4-a8.php">Lição 38</a></li>
                    <li><a href="m4-a9.php">Lição 39</a></li>
                    <li><a href="m4-a10.php">Lição 40</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 4</h2>
                <h3>Lição 35 - Preposições de Lugar</h3>

                <h4>Objetivo:</h4>

                <p>Aprender as preposições de lugar em inglês e como usá-las em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Preposições de Lugar Comuns:</h4>

                <p>In (dentro de)</p>

                <p>On (em cima de)</p>

                <p>Under (embaixo de)</p>

                <p>Next to (ao lado de)</p>

                <p>Between (entre)</p>

                <p>In front of (na frente de)</p>

                <p>Behind (atrás de)</p>

                <p>Over (acima de)</p>

                <p>Near (perto de)</p>

                <p>Across from (do outro lado de)</p>

                <h4>2. Frases Úteis:</h4>

                <p>The book is on the table. (O livro está na mesa.)</p>

                <p>The cat is under the chair. (O gato está debaixo da cadeira.)</p>

                <p>The store is next to the bank. (A loja fica ao lado do banco.)</p>

                <p>She is standing in front of the car. (Ela está em pé na frente do carro.)</p>

                <p>The park is near the school. (O parque é perto da escola.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Where is the book? (Onde está o livro?) <br>
                    Person B: The book is on the table. (O livro está na mesa.) <br>
                    Person A: Where is the cat? (Onde está o gato?) <br>
                    Person B: The cat is under the chair. (O gato está debaixo da cadeira.) <br>
                    Person A: Where is the store? (Onde está a loja?) <br>
                    Person B: The store is next to the bank. (A loja fica ao lado do banco.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'The book is _______ the table. (O livro está na mesa.)',
                        'Answers' => array(
                            'A' => 'under',
                            'B' => 'on',
                            'C' => 'in front of'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'The cat is _______ the chair. (O gato está debaixo a cadeira.)',
                        'Answers' => array(
                            'A' => 'behind',
                            'B' => 'next to',
                            'C' => 'under'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    3 => array(
                        'Question' => 'The store is _______ the bank. (A loja fica ao lado do banco.)',
                        'Answers' => array(
                            'A' => 'next to',
                            'B' => 'in',
                            'C' => 'over'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'She is standing _______ the car. (Ela está em pé na frente do carro.)',
                        'Answers' => array(
                            'A' => 'near',
                            'B' => 'in front of',
                            'C' => 'between'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'The park is _______ the school. (O parque é perto da escola.)',
                        'Answers' => array(
                            'A' => 'behind',
                            'B' => 'across from',
                            'C' => 'near'
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

                <div class="proximo">
                    <p><a href="m4-a6.php" class="proximo-link">Ir para a lição 36</a></p>
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