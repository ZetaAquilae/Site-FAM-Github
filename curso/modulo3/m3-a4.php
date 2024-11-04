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
                    <li class="nav-active"><a href="m3-a4.php">Lição 24</a></li>
                    <li><a href="m3-a5.php">Lição 25</a></li>
                    <li><a href="m3-a6.php">Lição 26</a></li>
                    <li><a href="m3-a7.php">Lição 27</a></li>
                    <li><a href="m3-a8.php">Lição 28</a></li>
                    <li><a href="m3-a9.php">Lição 29</a></li>
                    <li><a href="m3-a10.php">Lição 30</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 3</h2>
                <h3>Lição 24 - Animais de Estimação</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes dos animais de estimação em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes dos Animais de Estimação:</h4>

                <p>Dog (cachorro)</p>

                <p>Cat (gato)</p>

                <p>Fish (peixe)</p>

                <p>Bird (pássaro)</p>

                <p>Rabbit (coelho)</p>

                <p>Turtle (tartaruga)</p>

                <p>Hamster (hamster)</p>

                <p>Parrot (papagaio)</p>

                <p>Guinea pig (porquinho-da-índia)</p>

                <p>Ferret (furão)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I have a dog. (Eu tenho um cachorro.)</p>

                <p>She has a cat. (Ela tem um gato.)</p>

                <p>They have fish in a tank. (Eles têm peixes em um aquário.)</p>

                <p>The bird is in the cage. (O pássaro está na gaiola.)</p>

                <p>He likes to play with his rabbit. (Ele gosta de brincar com o coelho dele.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Do you have any pets? (Você tem algum animal de estimação?) <br>
                    Person B: Yes, I have a dog and a cat. (Sim, eu tenho um cachorro e um gato.) <br>
                    Person A: What is the name of your dog? (Qual é o nome do seu cachorro?) <br>
                    Person B: His name is Max. (O nome dele é Max.) <br>
                    Person A: What kind of pets do you have? (Que tipo de animais de estimação você tem?) <br>
                    Person B: I have a turtle and a parrot. (Eu tenho uma tartaruga e um papagaio.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I have a _______. (Eu tenho um cachorro.)',
                        'Answers' => array(
                            'A' => 'chair',
                            'B' => 'dog',
                            'C' => 'book'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'She has a _______. (Ela tem um gato.)',
                        'Answers' => array(
                            'A' => 'cat',
                            'B' => 'car',
                            'C' => 'table'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'They have _______ in a tank. (Eles têm _______ em um aquário.)',
                        'Answers' => array(
                            'A' => 'birds',
                            'B' => 'fish',
                            'C' => 'hamsters'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    4 => array(
                        'Question' => 'The _______ is in the cage. (O pássaro está na gaiola.)',
                        'Answers' => array(
                            'A' => 'bird',
                            'B' => 'rabbit',
                            'C' => 'dog'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'He likes to play with his _______. (Ele gosta de brincar com o coelho dele.)',
                        'Answers' => array(
                            'A' => 'cat',
                            'B' => 'dog',
                            'C' => 'rabbit'
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
                    <p><a href="m3-a5.php" class="proximo-link">Ir para a lição 25</a></p>
                </div>

            </main>
        <?php

        }

        mysqli_close($dbc);
        ?>

        <footer>
            <p id="copyright">Todos os direitos reservados 
                <script>document.write(new Date().getFullYear());</script>
            </p>
        </footer>

    </div>
</body>

</html>