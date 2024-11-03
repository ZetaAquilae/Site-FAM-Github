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
                    <li class="nav-active"><a href="m3-a6.php">Lição 26</a></li>
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
                <h3>Lição 26 - Verbos de Cozinha</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os verbos mais comuns utilizados na cozinha em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Verbos de Cozinha Comuns:</h4>

                <p>Cook (cozinhar)</p>

                <p>Bake (assar)</p>

                <p>Boil (ferver)</p>

                <p>Fry (fritar)</p>

                <p>Grill (grelhar)</p>

                <p>Stir (mexer)</p>

                <p>Chop (picar)</p>

                <p>Slice (fatiar)</p>

                <p>Mix (misturar)</p>

                <p>Serve (servir)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I like to cook pasta. (Eu gosto de cozinhar macarrão.)</p>

                <p>She bakes a cake every Sunday. (Ela assa um bolo todo domingo.)</p>

                <p>We boil water for tea. (Nós fervemos água para chá.)</p>

                <p>He fries eggs for breakfast. (Ele frita ovos para o café da manhã.)</p>

                <p>They grill the chicken. (Eles grelham o frango.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What are you cooking? (O que você está cozinhando?) <br>
                    Person B: I am baking a cake. (Estou assando um bolo.) <br>
                    Person A: How do you make it? (Como você faz isso?) <br>
                    Person B: First, I mix the ingredients, then I bake it in the oven. (Primeiro, eu misturo os ingredientes, depois asso no forno.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I like to _______ pasta. (Eu gosto de _______ macarrão.)',
                        'Answers' => array(
                            'A' => 'grill',
                            'B' => 'cook',
                            'C' => 'stir'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'She _______ a cake every Sunday. (Ela _______ um bolo todo domingo.)',
                        'Answers' => array(
                            'A' => 'bakes',
                            'B' => 'boils',
                            'C' => 'slices'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'We _______ water for tea. (Nós _______ água para chá.)',
                        'Answers' => array(
                            'A' => 'fry',
                            'B' => 'bake',
                            'C' => 'boil'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'He _______ eggs for breakfast. (Ele _______ ovos para o café da manhã.)',
                        'Answers' => array(
                            'A' => 'grills',
                            'B' => 'fries',
                            'C' => 'bakes'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'They _______ the chicken. (Eles grelham o frango.)',
                        'Answers' => array(
                            'A' => 'serve',
                            'B' => 'grill',
                            'C' => 'chop'
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
                    <p><a href="m3-a7.php" class="proximo-link">Ir para a lição 27</a></p>
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