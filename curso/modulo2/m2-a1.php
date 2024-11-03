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
                    <li class="modulo"><a href="m2-a1.php">Módulo 2</a></li>
                    <li class="nav-active"><a href="m2-a1.php">Lição 11</a></li>
                    <li><a href="m2-a2.php">Lição 12</a></li>
                    <li><a href="m2-a3.php">Lição 13</a></li>
                    <li><a href="m2-a4.php">Lição 14</a></li>
                    <li><a href="m2-a5.php">Lição 15</a></li>
                    <li><a href="m2-a6.php">Lição 16</a></li>
                    <li><a href="m2-a7.php">Lição 17</a></li>
                    <li><a href="m2-a8.php">Lição 18</a></li>
                    <li><a href="m2-a9.php">Lição 19</a></li>
                    <li><a href="m2-a10.php">Lição 20</a></li>
                    <li class="modulo"><a href="../modulo3/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 2</h2>
                <h3>Lição 11 - Informações Pessoais</h3>

                <h4>Objetivo:</h4>

                <p>Aprender a falar e perguntar sobre informações pessoais básicas.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Name (nome)</p>

                <p>Age (idade)</p>

                <p>Address (endereço)</p>

                <p>Phone number (número de telefone)</p>

                <p>Email (e-mail)</p>

                <p>Birthday (aniversário)</p>

                <p>Nationality (nacionalidade)</p>

                <p>Occupation (ocupação)</p>

                <h4>2. Frases Úteis:</h4>

                <p>What is your name? (Qual é o seu nome?)</p>

                <p>My name is... (Meu nome é...)</p>

                <p>How old are you? (Quantos anos você tem?)</p>

                <p>I am ... years old. (Eu tenho ... anos.)</p>

                <p>Where do you live? (Onde você mora?)</p>

                <p>I live in... (Eu moro em...)</p>

                <p>What is your phone number? (Qual é o seu número de telefone?)</p>

                <p>My phone number is... (Meu número de telefone é...)</p>

                <p>What do you do? (O que você faz?)</p>

                <p>I am a... (Eu sou...)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What is your name? (Qual é o seu nome?) <br>
                    Person B: My name is John. (Meu nome é John.) <br>
                    Person A: How old are you? (Quantos anos você tem?) <br>
                    Person B: I am 25 years old. (Eu tenho 25 anos.) <br>
                    Person A: Where do you live? (Onde você mora?) <br>
                    Person B: I live in New York. (Eu moro em Nova York.) <br>
                    Person A: What do you do? (O que você faz?) <br>
                    Person B: I am a teacher. (Eu sou professor.)</p>
                <br><br>
                <hr>
                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'What is your name? (Qual é o seu nome?)',
                        'Answers' => array(
                            'A' => 'My name is...',
                            'B' => 'I am 25 years old.',
                            'C' => 'I live in New York.'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'How old are you? (Quantos anos você tem?)',
                        'Answers' => array(
                            'A' => 'My name is...',
                            'B' => 'I am 25 years old.',
                            'C' => 'I live in New York.'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'Where do you live? (Onde você mora?)',
                        'Answers' => array(
                            'A' => 'My name is...',
                            'B' => 'I am 25 years old.',
                            'C' => 'I live in New York.'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'What is your phone number? (Qual é o seu número de telefone?)',
                        'Answers' => array(
                            'A' => 'My phone number is...',
                            'B' => 'I live in New York.',
                            'C' => 'I am a teacher.'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'What do you do? (O que você faz?)',
                        'Answers' => array(
                            'A' => 'I am a teacher.',
                            'B' => 'My phone number is...',
                            'C' => 'I live in New York.'
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
                    <p><a href="m2-a2.php" class="proximo-link">Ir para a lição 12</a></p>
                </div>

            </main>
        <?php

        }

        mysqli_close($dbc);
        ?>

        <footer>
            <p id="copyright">Todos os direitos reservados <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </footer>

    </div>
</body>

</html>