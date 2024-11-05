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
                    <li class="nav-active"><a href="m4-a1.php">Lição 31</a></li>
                    <li><a href="m4-a2.php">Lição 32</a></li>
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

                <h2>Módulo 4</h2>
                <h3>Lição 31 - Profissões</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes das profissões em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes das Profissões:</h4>

                <p>Teacher (professor)</p>

                <p>Doctor (médico)</p>

                <p>Engineer (engenheiro)</p>

                <p>Nurse (enfermeira)</p>

                <p>Lawyer (advogado)</p>

                <p>Police officer (policial)</p>

                <p>Chef (chefe de cozinha)</p>

                <p>Artist (artista)</p>

                <p>Accountant (contador)</p>

                <p>Driver (motorista)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I am a teacher. (Eu sou professor.)</p>

                <p>She is a doctor. (Ela é médica.)</p>

                <p>He works as an engineer. (Ele trabalha como engenheiro.)</p>

                <p>My mother is a nurse. (Minha mãe é enfermeira.)</p>

                <p>The lawyer is very experienced. (O advogado é muito experiente.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What do you do for a living? (O que você faz para viver?) <br>
                    Person B: I am a teacher. (Eu sou professor.) <br>
                    Person A: Where do you work? (Onde você trabalha?) <br>
                    Person B: I work at a school. (Eu trabalho em uma escola.) <br>
                    Person A: What does your father do? (O que seu pai faz?) <br>
                    Person B: He is a police officer. (Ele é policial.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'She is a _______. (Ela é uma médica.)',
                        'Answers' => array(
                            'A' => 'teacher',
                            'B' => 'engineer',
                            'C' => 'doctor'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    2 => array(
                        'Question' => 'He works as an _______. (Ele trabalha como engenheiro.)',
                        'Answers' => array(
                            'A' => 'engineer',
                            'B' => 'artist',
                            'C' => 'chef'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'My mother is a _______. (Minha mãe é uma enfermeira.)',
                        'Answers' => array(
                            'A' => 'lawyer',
                            'B' => 'nurse',
                            'C' => 'accountant'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    4 => array(
                        'Question' => 'The _______ is very experienced. (O advogado é muito experiente.)',
                        'Answers' => array(
                            'A' => 'police officer',
                            'B' => 'driver',
                            'C' => 'lawyer'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    5 => array(
                        'Question' => 'I am a _______. (Eu sou um professor.)',
                        'Answers' => array(
                            'A' => 'artist',
                            'B' => 'driver',
                            'C' => 'teacher'
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
                    <p><a href="m4-a2.php" class="proximo-link">Ir para a lição 32</a></p>
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