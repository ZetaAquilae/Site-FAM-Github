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
                    <li class="nav-active"><a href="m3-a8.php">Lição 28</a></li>
                    <li><a href="m3-a9.php">Lição 29</a></li>
                    <li><a href="m3-a10.php">Lição 30</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 3</h2>
                <h3>Lição 28 - Objetos Escolares</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes dos objetos escolares em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes dos Objetos Escolares:</h4>

                <p>Pencil (lápis)</p>

                <p>Pen (caneta)</p>

                <p>Notebook (caderno)</p>

                <p>Eraser (borracha)</p>

                <p>Ruler (régua)</p>

                <p>Backpack (mochila)</p>

                <p>Book (livro)</p>

                <p>Desk (escrivaninha)</p>

                <p>Chair (cadeira)</p>

                <p>Marker (marcador)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I have a pencil. (Eu tenho um lápis.)</p>

                <p>She writes in her notebook. (Ela escreve no caderno dela.)</p>

                <p>Can I borrow your eraser? (Posso pegar sua borracha emprestada?)</p>

                <p>The ruler is on the desk. (A régua está na escrivaninha.)</p>

                <p>My backpack is blue. (Minha mochila é azul.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Do you have a pen? (Você tem uma caneta?) <br>
                    Person B: Yes, I have a pen. (Sim, eu tenho uma caneta.) <br>
                    Person A: Can I borrow your notebook? (Posso pegar seu caderno emprestado?) <br>
                    Person B: Sure, here it is. (Claro, aqui está.) <br>
                    Person A: Where is your backpack? (Onde está sua mochila?) <br>
                    Person B: My backpack is under the desk. (Minha mochila está debaixo da escrivaninha.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I have a _______. (Eu tenho um lápis.)',
                        'Answers' => array(
                            'A' => 'desk',
                            'B' => 'pencil',
                            'C' => 'chair'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'She writes in her _______. (Ela escreve no _______ dela.)',
                        'Answers' => array(
                            'A' => 'book',
                            'B' => 'notebook',
                            'C' => 'marker'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    3 => array(
                        'Question' => 'Can I borrow your _______? (Posso pegar sua borracha emprestada?)',
                        'Answers' => array(
                            'A' => 'eraser',
                            'B' => 'backpack',
                            'C' => 'chair'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'The _______ is on the desk. (A régua está na escrivaninha.)',
                        'Answers' => array(
                            'A' => 'pen',
                            'B' => 'ruler',
                            'C' => 'backpack'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'My backpack is _______. (Minha mochila é _______.)',
                        'Answers' => array(
                            'A' => 'blue',
                            'B' => 'pen',
                            'C' => 'notebook'
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
                    <p><a href="m3-a9.php" class="proximo-link">Ir para a lição 29</a></p>
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