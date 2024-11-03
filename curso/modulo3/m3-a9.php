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
                    <li class="modulo"><a href="m3-a1.php">Módulo 3</a></li>
                    <li><a href="m3-a1.php">Lição 21</a></li>
                    <li><a href="m3-a2.php">Lição 22</a></li>
                    <li><a href="m3-a3.php">Lição 23</a></li>
                    <li><a href="m3-a4.php">Lição 24</a></li>
                    <li><a href="m3-a5.php">Lição 25</a></li>
                    <li><a href="m3-a6.php">Lição 26</a></li>
                    <li><a href="m3-a7.php">Lição 27</a></li>
                    <li><a href="m3-a8.php">Lição 28</a></li>
                    <li class="nav-active"><a href="m3-a9.php">Lição 29</a></li>
                    <li><a href="m3-a10.php">Lição 30</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 3</h2>
                <h3>Lição 29 - Linguagem de Sala de Aula</h3>

                <h4>Objetivo:</h4>

                <p>Aprender expressões e vocabulário comum usado na sala de aula em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Frases Comuns de Sala de Aula:</h4>

                <p>Good morning, class! (Bom dia, classe!)</p>

                <p>Please sit down. (Por favor, sentem-se.)</p>

                <p>Open your books. (Abram seus livros.)</p>

                <p>Listen carefully. (Ouçam com atenção.)</p>

                <p>Do you have any questions? (Vocês têm alguma pergunta?)</p>

                <p>Write this down. (Anotem isto.)</p>

                <p>Pay attention, please. (Prestem atenção, por favor.)</p>

                <p>Can I go to the bathroom? (Posso ir ao banheiro?)</p>

                <p>Repeat after me. (Repitam depois de mim.)</p>

                <h4>2. Frases Úteis:</h4>

                <p>What does this mean? (O que isto significa?)</p>

                <p>How do you say this in English? (Como se diz isso em inglês?)</p>

                <p>Can you help me? (Você pode me ajudar?)</p>

                <p>I don't understand. (Eu não entendo.)</p>

                <p>Can you repeat that, please? (Você pode repetir isso, por favor?)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Teacher: Good morning, class! (Bom dia, classe!) <br>
                    Students: Good morning, teacher! (Bom dia, professor!) <br>
                    Teacher: Please open your books to page ten. (Por favor, abram seus livros na página dez.) <br>
                    Student: Can you help me with this exercise? (Você pode me ajudar com este exercício?)<br>
                    Teacher: Of course! What don't you understand? (Claro! O que você não entende?) <br>
                    Student: What does this word mean? (O que esta palavra significa?) <br>
                    Teacher: It means "apple". (Significa "maçã".)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Please _______ your books. (Por favor, abram seus livros.)',
                        'Answers' => array(
                            'A' => 'close',
                            'B' => 'open',
                            'C' => 'write'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'Can I go to the _______? (Posso ir ao banheiro?)',
                        'Answers' => array(
                            'A' => 'library',
                            'B' => 'bathroom',
                            'C' => 'playground'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'Repeat _______ me. (Repitam _______ de mim.)',
                        'Answers' => array(
                            'A' => 'after',
                            'B' => 'before',
                            'C' => 'during'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'Do you have any _______? (Vocês têm alguma pergunta?)',
                        'Answers' => array(
                            'A' => 'homework',
                            'B' => 'questions',
                            'C' => 'books'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'I don\'t _______. (Eu não entendo.)',
                        'Answers' => array(
                            'A' => 'understand',
                            'B' => 'know',
                            'C' => 'think'
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
                    <p><a href="m3-a10.php" class="proximo-link">Ir para a lição 30</a></p>
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