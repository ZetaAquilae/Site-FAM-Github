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
                    <li><a href="m5-a3.php">Lição 43</a></li>
                    <li><a href="m5-a4.php">Lição 44</a></li>
                    <li><a href="m5-a5.php">Lição 45</a></li>
                    <li><a href="m5-a6.php">Lição 46</a></li>
                    <li class="nav-active"><a href="m5-a7.php">Lição 47</a></li>
                    <li><a href="m5-a8.php">Lição 48</a></li>
                    <li><a href="m5-a9.php">Lição 49</a></li>
                    <li><a href="m4-a10.php">Lição 50</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 5</h2>
                <h3>Lição 47 - Vocabulário de Emergência</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas a situações de emergência em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Help (ajuda)</p>

                <p>Emergency (emergência)</p>

                <p>Ambulance (ambulância)</p>

                <p>Police (polícia)</p>

                <p>Firefighter (bombeiro)</p>

                <p>Doctor (médico)</p>

                <p>Hospital (hospital)</p>

                <p>Injury (lesão)</p>

                <p>Accident (acidente)</p>

                <p>Fire (fogo)</p>

                <p>First aid (primeiros socorros)</p>

                <h4>2. Frases Úteis:</h4>

                <p>Call an ambulance! (Chame uma ambulância!)</p>

                <p>I need help. (Eu preciso de ajuda.)</p>

                <p>Where is the hospital? (Onde fica o hospital?)</p>

                <p>There was an accident. (Houve um acidente.)</p>

                <p>My arm is injured. (Meu braço está machucado.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Help! I need help! (Ajuda! Eu preciso de ajuda!) <br>
                    Person B: What happened? (O que aconteceu?) <br>
                    Person A: There was an accident, and my friend is injured. (Houve um acidente, e meu amigo está machucado.) <br>
                    Person B: I'll call an ambulance. (Eu vou chamar uma ambulância.) <br>
                    Person A: Thank you! Where is the nearest hospital? (Obrigado! Onde fica o hospital mais próximo?) <br>
                    Person B: It’s just around the corner. (É logo na esquina.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Call an _______! (Chame uma ambulância!)',
                        'Answers' => array(
                            'A' => 'police',
                            'B' => 'ambulance',
                            'C' => 'firefighter'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'I need _______. (Eu preciso de _______.)',
                        'Answers' => array(
                            'A' => 'help',
                            'B' => 'fire',
                            'C' => 'doctor'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'Where is the _______? (Onde fica o _______?)',
                        'Answers' => array(
                            'A' => 'fire',
                            'B' => 'injury',
                            'C' => 'hospital'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'There was an _______. (Houve um acidente.)',
                        'Answers' => array(
                            'A' => 'accident',
                            'B' => 'emergency',
                            'C' => 'hospital'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'My arm is _______. (Meu braço está _______.)',
                        'Answers' => array(
                            'A' => 'fire',
                            'B' => 'injured',
                            'C' => 'ambulance'
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
                    <p><a href="m5-a8.php" class="proximo-link">Ir para a lição 48</a></p>
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