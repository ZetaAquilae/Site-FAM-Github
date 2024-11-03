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
                    <li class="nav-active"><a href="m3-a7.php">Lição 27</a></li>
                    <li><a href="m3-a8.php">Lição 28</a></li>
                    <li><a href="m3-a9.php">Lição 29</a></li>
                    <li><a href="m3-a10.php">Lição 30</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 3</h2>
                <h3>Lição 27 - Natureza e Meio Ambiente</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas à natureza e ao meio ambiente em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Tree (árvore)</p>

                <p>Forest (floresta)</p>

                <p>River (rio)</p>

                <p>Ocean (oceano)</p>

                <p>Mountain (montanha)</p>

                <p>Plant (planta)</p>

                <p>Flower (flor)</p>

                <p>Animal (animal)</p>

                <p>Earth (terra)</p>

                <p>Environment (meio ambiente)</p>

                <h4>2. Frases Úteis:</h4>

                <p>The tree is very tall. (A árvore é muito alta.)</p>

                <p>I like to walk in the forest. (Eu gosto de caminhar na floresta.)</p>

                <p>The river flows to the ocean. (O rio flui para o oceano.)</p>

                <p>There are many animals in the mountain. (Há muitos animais na montanha.)</p>

                <p>We need to protect the environment. (Nós precisamos proteger o meio ambiente.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Do you like nature? (Você gosta da natureza?) <br>
                    Person B: Yes, I love walking in the forest and seeing the animals. (Sim, eu adoro caminhar na floresta e ver os animais.) <br>
                    Person A: What is your favorite place? (Qual é o seu lugar favorito?) <br>
                    Person B: My favorite place is the beach. (Meu lugar favorito é a praia.) <br>
                    Person A: How do you help the environment? (Como você ajuda o meio ambiente?) <br>
                    Person B: I plant trees and recycle. (Eu planto árvores e reciclo.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'The _______ is very tall. (A árvore é muito alta.)',
                        'Answers' => array(
                            'A' => 'flower',
                            'B' => 'tree',
                            'C' => 'mountain'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'I like to walk in the _______. (Eu gosto de caminhar na _______.)',
                        'Answers' => array(
                            'A' => 'river',
                            'B' => 'ocean',
                            'C' => 'forest'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    3 => array(
                        'Question' => 'The river flows to the _______. (O rio flui para o _______.)',
                        'Answers' => array(
                            'A' => 'ocean',
                            'B' => 'mountain',
                            'C' => 'tree'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'There are many animals in the _______. (Há muitos animais na montanha.)',
                        'Answers' => array(
                            'A' => 'plant',
                            'B' => 'mountain',
                            'C' => 'earth'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'We need to protect the _______. (Nós precisamos proteger o meio ambiente.)',
                        'Answers' => array(
                            'A' => 'flower',
                            'B' => 'river',
                            'C' => 'environment'
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
                    <p><a href="m3-a8.php" class="proximo-link">Ir para a lição 28</a></p>
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