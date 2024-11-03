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
                    <li class="nav-active"><a href="m3-a1.php">Lição 21</a></li>
                    <li><a href="m3-a2.php">Lição 22</a></li>
                    <li><a href="m3-a3.php">Lição 23</a></li>
                    <li><a href="m3-a4.php">Lição 24</a></li>
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
                <h3>Lição 21 - Partes da Casa</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes das partes da casa em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes das Partes da Casa:</h4>

                <p>Living room (sala de estar)</p>

                <p>Kitchen (cozinha)</p>

                <p>Bedroom (quarto)</p>

                <p>Bathroom (banheiro)</p>

                <p>Dining room (sala de jantar)</p>

                <p>Garage (garagem)</p>

                <p>Garden (jardim)</p>

                <p>Basement (porão)</p>

                <p>Roof (telhado)</p>

                <p>Attic (sótão)</p>

                <h4>2. Frases Úteis:</h4>

                <p>This is the living room. (Esta é a sala de estar.)</p>

                <p>The kitchen is very big. (A cozinha é muito grande.)</p>

                <p>I sleep in the bedroom. (Eu durmo no quarto.)</p>

                <p>The bathroom is next to the bedroom. (O banheiro é ao lado do quarto.)</p>

                <p>We have dinner in the dining room. (Nós jantamos na sala de jantar.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Where is the kitchen? (Onde fica a cozinha?) <br>
                    Person B: The kitchen is next to the living room. (A cozinha é ao lado da sala de estar.) <br>
                    Person A: Is there a garden in your house? (Há um jardim na sua casa?) <br>
                    Person B: Yes, there is a small garden. (Sim, há um pequeno jardim.) <br>
                    Person A: Do you have a garage? (Você tem uma garagem?) <br>
                    Person B: Yes, we have a garage for two cars. (Sim, nós temos uma garagem para dois carros.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'Where do you sleep? (Onde você dorme?)',
                        'Answers' => array(
                            'A' => 'Kitchen',
                            'B' => 'Bedroom',
                            'C' => 'Bathroom'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'This is the _______. (Esta é a sala.)',
                        'Answers' => array(
                            'A' => 'attic',
                            'B' => 'basement',
                            'C' => 'living room'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    3 => array(
                        'Question' => 'The _______ is next to the bedroom. (O banheiro é ao lado do quarto.)',
                        'Answers' => array(
                            'A' => 'bathroom',
                            'B' => 'garage',
                            'C' => 'roof'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'We have dinner in the _______. (Nós jantamos na _______.)',
                        'Answers' => array(
                            'A' => 'kitchen',
                            'B' => 'dining room',
                            'C' => 'garden'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'Is there a _______ in your house? (Há um jardim na sua casa?)',
                        'Answers' => array(
                            'A' => 'bathroom',
                            'B' => 'garden',
                            'C' => 'bedroom'
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
                    <p><a href="m3-a2.php" class="proximo-link">Ir para a lição 22</a></p>
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