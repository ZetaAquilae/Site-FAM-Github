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
                    <li class="nav-active"><a href="m4-a2.php">Lição 32</a></li>
                    <li><a href="m4-a3.php">Lição 33</a></li>
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

                <h2>Módulo 3</h2>
                <h3>Lição 32 - Lugares na Cidade</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes de lugares comuns na cidade em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes dos Lugares na Cidade:</h4>

                <p>Hospital (hospital)</p>

                <p>School (escola)</p>

                <p>Bank (banco)</p>

                <p>Restaurant (restaurante)</p>

                <p>Supermarket (supermercado)</p>

                <p>Park (parque)</p>

                <p>Library (biblioteca)</p>

                <p>Post office (correios)</p>

                <p>Train station (estação de trem)</p>

                <p>Cinema (cinema)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I need to go to the hospital. (Eu preciso ir ao hospital.)</p>

                <p>She studies at the school. (Ela estuda na escola.)</p>

                <p>He works at the bank. (Ele trabalha no banco.)</p>

                <p>We are going to the restaurant. (Nós vamos ao restaurante.)</p>

                <p>They shop at the supermarket. (Eles fazem compras no supermercado.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Where is the nearest park? (Onde fica o parque mais próximo?) <br>
                    Person B: The park is near the library. (O parque é perto da biblioteca.) <br>
                    Person A: Do you know where the post office is? (Você sabe onde ficam os correios?) <br>
                    Person B: Yes, it is next to the bank. (Sim, fica ao lado do banco.) <br>
                    Person A: Let's go to the cinema tonight. (Vamos ao cinema hoje à noite.) <br>
                    Person B: That sounds great! (Parece ótimo!)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I need to go to the _______. (Eu preciso ir ao hospital.)',
                        'Answers' => array(
                            'A' => 'hospital',
                            'B' => 'school',
                            'C' => 'bank'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'She studies at the _______. (Ela estuda na escola.)',
                        'Answers' => array(
                            'A' => 'library',
                            'B' => 'school',
                            'C' => 'supermarket'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'He works at the _______. (Ele trabalha no banco.)',
                        'Answers' => array(
                            'A' => 'restaurant',
                            'B' => 'cinema',
                            'C' => 'bank'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'We are going to the _______. (Nós vamos ao restaurante.)',
                        'Answers' => array(
                            'A' => 'supermarket',
                            'B' => 'restaurant',
                            'C' => 'park'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'The _______ is near the library. (O parque é perto da biblioteca.)',
                        'Answers' => array(
                            'A' => 'hospital',
                            'B' => 'train station',
                            'C' => 'park'
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
                    <p><a href="m4-a3.php" class="proximo-link">Ir para a lição 33</a></p>
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