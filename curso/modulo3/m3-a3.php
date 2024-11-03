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
                    <li class="nav-active"><a href="m3-a3.php">Lição 23</a></li>
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
                <h3>Lição 23 - Atividades Domésticas</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas às atividades domésticas em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Clean the house (limpar a casa)</p>

                <p>Wash the dishes (lavar a louça)</p>

                <p>Do the laundry (lavar a roupa)</p>

                <p>Sweep the floor (varrer o chão)</p>

                <p>Mop the floor (passar pano no chão)</p>

                <p>Make the bed (arrumar a cama)</p>

                <p>Cook (cozinhar)</p>

                <p>Dust the furniture (tirar o pó dos móveis)</p>

                <p>Take out the trash (levar o lixo para fora)</p>

                <p>Water the plants (regar as plantas)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I need to clean the house. (Eu preciso limpar a casa.)</p>

                <p>She is washing the dishes. (Ela está lavando a louça.)</p>

                <p>He does the laundry on Saturdays. (Ele lava a roupa aos sábados.)</p>

                <p>Can you sweep the floor? (Você pode varrer o chão?)</p>

                <p>We take out the trash every evening. (Nós levamos o lixo para fora toda noite.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: What are you doing? (O que você está fazendo?) <br>
                    Person B: I am cleaning the house. (Estou limpando a casa.) <br>
                    Person A: Can you wash the dishes? (Você pode lavar a louça?) <br>
                    Person B: Sure, I will do it after I sweep the floor. (Claro, eu farei isso depois de varrer o chão.) <br>
                    Person A: Thank you! (Obrigado!)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I need to _______ the house. (Eu preciso _______ a casa.)',
                        'Answers' => array(
                            'A' => 'make',
                            'B' => 'clean',
                            'C' => 'cook'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'She is _______ the dishes. (Ela está _______ a louça.)',
                        'Answers' => array(
                            'A' => 'washing',
                            'B' => 'mopping',
                            'C' => 'dusting'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    3 => array(
                        'Question' => 'He _______ the laundry on Saturdays. (Ele _______ a roupa aos sábados.)',
                        'Answers' => array(
                            'A' => 'does',
                            'B' => 'sweeps',
                            'C' => 'takes'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'Can you _______ the floor? (Você pode varrer o chão?)',
                        'Answers' => array(
                            'A' => 'mop',
                            'B' => 'clean',
                            'C' => 'sweep'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    5 => array(
                        'Question' => 'We take out the _______ every evening. (Nós levamos o _______ para fora toda noite.)',
                        'Answers' => array(
                            'A' => 'plants',
                            'B' => 'trash',
                            'C' => 'bed'
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
                    <p><a href="m3-a4.php" class="proximo-link">Ir para a lição 24</a></p>
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