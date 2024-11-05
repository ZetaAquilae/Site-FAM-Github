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
                    <li class="nav-active"><a href="m4-a3.php">Lição 33</a></li>
                    <li><a href="m4-a4.php">Lição 34</a></li>
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

                <h2>Módulo 4</h2>
                <h3>Lição 33 - Dando Direções</h3>

                <h4>Objetivo:</h4>

                <p>Aprender a dar e entender direções em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Frases Comuns para Dar Direções:</h4>

                <p>Go straight (vá em frente)</p>

                <p>Turn left (vire à esquerda)</p>

                <p>Turn right (vire à direita)</p>

                <p>Go past (passe por)</p>

                <p>Next to (ao lado de)</p>

                <p>Between (entre)</p>

                <p>Opposite (em frente)</p>

                <p>On the corner (na esquina)</p>

                <p>At the end of (no final de)</p>

                <p>Cross the street (atravesse a rua)</p>

                <h4>2. Frases Úteis:</h4>

                <p>How do I get to the hospital? (Como eu chego ao hospital?)</p>

                <p>Where is the nearest bank? (Onde fica o banco mais próximo?)</p>

                <p>It's on the left. (Está à esquerda.)</p>

                <p>Go straight and turn right. (Vá em frente e vire à direita.)</p>

                <p>The supermarket is next to the park. (O supermercado é ao lado do parque.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Excuse me, how do I get to the train station? (Com licença, como eu chego à estação de trem?) <br>
                    Person B: Go straight and turn left at the first traffic light. (Vá em frente e vire à esquerda no primeiro semáforo.) <br>
                    Person A: Is it far from here? (É longe daqui?) <br>
                    Person B: No, it's about a 5-minute walk. (Não, é cerca de 5 minutos a pé.) <br>
                    Person A: Thank you! (Obrigado!) <br>
                    Person B: You're welcome! (De nada!)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'How do I get to the hospital? (Como eu chego ao hospital? Siga em frente e vire à esquerda)',
                        'Answers' => array(
                            'A' => 'Go straight and turn left.',
                            'B' => 'Go past the park.',
                            'C' => 'Cross the street.'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'The supermarket is _______ the park. (O supermercado é ao lado do parque.)',
                        'Answers' => array(
                            'A' => 'between',
                            'B' => 'next to',
                            'C' => 'opposite'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'Turn _______ at the corner. (Vire à esquerda na esquina.)',
                        'Answers' => array(
                            'A' => 'right',
                            'B' => 'straight',
                            'C' => 'left'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'Go straight and then _______ the street. (Vá em frente e então atravesse a rua.)',
                        'Answers' => array(
                            'A' => 'turn left',
                            'B' => 'cross',
                            'C' => 'next to'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'The bank is _______ the supermarket. (O banco é em frente ao supermercado.)',
                        'Answers' => array(
                            'A' => 'on the corner',
                            'B' => 'at the end of',
                            'C' => 'opposite'
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
                    <p><a href="m4-a4.php" class="proximo-link">Ir para a lição 34</a></p>
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