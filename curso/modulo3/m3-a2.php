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
                    <li class="nav-active"><a href="m3-a2.php">Lição 22</a></li>
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
                <h3>Lição 22 - Móveis e Objetos</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes de móveis e objetos comuns em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes de Móveis e Objetos:</h4>

                <p>Table (mesa)</p>

                <p>Chair (cadeira)</p>

                <p>Bed (cama)</p>

                <p>Sofa (sofá)</p>

                <p>Lamp (lâmpada)</p>

                <p>Mirror (espelho)</p>

                <p>Carpet (tapete)</p>

                <p>Shelf (prateleira)</p>

                <p>Clock (relógio)</p>

                <p>Picture (quadro)</p>

                <h4>2. Frases Úteis:</h4>

                <p>This is a table. (Esta é uma mesa.)</p>

                <p>I sit on the chair. (Eu sento na cadeira.)</p>

                <p>She sleeps on the bed. (Ela dorme na cama.)</p>

                <p>The sofa is in the living room. (O sofá está na sala de estar.)</p>

                <p>There is a lamp on the desk. (Há uma lâmpada na escrivaninha.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Where is the lamp? (Onde está a lâmpada?) <br>
                    Person B: The lamp is on the table. (A lâmpada está na mesa.) <br>
                    Person A: Do you have a mirror in your room? (Você tem um espelho no seu quarto?) <br>
                    Person B: Yes, there is a mirror on the wall. (Sim, há um espelho na parede.) <br>
                    Person A: Is the clock working? (O relógio está funcionando?) <br>
                    Person B: Yes, the clock is working fine. (Sim, o relógio está funcionando bem.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'This is a _______. (Esta é uma mesa.)',
                        'Answers' => array(
                            'A' => 'table',
                            'B' => 'carpet',
                            'C' => 'bed'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'I sit on the _______. (Eu sento na _______.)',
                        'Answers' => array(
                            'A' => 'chair',
                            'B' => 'mirror',
                            'C' => 'clock'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'She sleeps on the _______. (Ela dorme na _______.)',
                        'Answers' => array(
                            'A' => 'shelf',
                            'B' => 'lamp',
                            'C' => 'bed'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    4 => array(
                        'Question' => 'The _______ is in the living room. (O sofá está na sala de estar.)',
                        'Answers' => array(
                            'A' => 'sofa',
                            'B' => 'picture',
                            'C' => 'carpet'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    5 => array(
                        'Question' => 'There is a _______ on the desk. (Há uma _______ na escrivaninha.)',
                        'Answers' => array(
                            'A' => 'carpet',
                            'B' => 'lamp',
                            'C' => 'shelf'
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
                    <p><a href="m3-a3.php" class="proximo-link">Ir para a lição 23</a></p>
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