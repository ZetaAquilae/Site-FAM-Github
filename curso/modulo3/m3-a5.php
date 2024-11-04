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
                    <li class="nav-active"><a href="m3-a5.php">Lição 25</a></li>
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
                <h3>Lição 25 - Comidas e Bebidas</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes de comidas e bebidas em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes de Comidas:</h4>

                <p>Bread (pão)</p>

                <p>Rice (arroz)</p>

                <p>Chicken (frango)</p>

                <p>Fish (peixe)</p>

                <p>Salad (salada)</p>

                <p>Fruit (fruta)</p>

                <p>Vegetables (legumes)</p>

                <p>Soup (sopa)</p>

                <p>Pasta (massa)</p>

                <p>Cheese (queijo)</p>

                <h4>2. Nomes de Bebidas:</h4>

                <p>Water (água)</p>

                <p>Juice (suco)</p>

                <p>Soda (refrigerante)</p>

                <p>Coffee (café)</p>

                <p>Tea (chá)</p>

                <p>Milk (leite)</p>

                <h4>3. Frases Úteis:</h4>

                <p>I like to eat bread. (Eu gosto de comer pão.)</p>

                <p>She drinks coffee every morning. (Ela toma café toda manhã.)</p>

                <p>Do you want some rice? (Você quer um pouco de arroz?)</p>

                <p>They are having soup for dinner. (Eles estão tomando sopa no jantar.)</p>

                <p>Can I have a glass of water? (Pode me dar um copo de água?)</p>

                <h4>4. Exemplo de Diálogo:</h4>

                <p>Person A: What do you want to eat? (O que você quer comer?) <br>
                    Person B: I would like some chicken and salad. (Eu gostaria de frango e salada.) <br>
                    Person A: What do you want to drink? (O que você quer beber?) <br>
                    Person B: I would like a glass of juice. (Eu gostaria de um copo de suco.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I like to eat _______. (Eu gosto de comer _______.)',
                        'Answers' => array(
                            'A' => 'bread',
                            'B' => 'water',
                            'C' => 'tea'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'She drinks _______ every morning. (Ela toma _______ toda manhã.)',
                        'Answers' => array(
                            'A' => 'soup',
                            'B' => 'chicken',
                            'C' => 'coffee'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    3 => array(
                        'Question' => 'Do you want some _______? (Você quer um pouco de arroz?)',
                        'Answers' => array(
                            'A' => 'rice',
                            'B' => 'juice',
                            'C' => 'soda'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'They are having _______ for dinner. (Eles estão tomando _______ no jantar.)',
                        'Answers' => array(
                            'A' => 'fruit',
                            'B' => 'soup',
                            'C' => 'water'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'Can I have a glass of _______? (Posso ter um copo de _______?)',
                        'Answers' => array(
                            'A' => 'cheese',
                            'B' => 'pasta',
                            'C' => 'water'
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
                    <p><a href="m3-a6.php" class="proximo-link">Ir para a lição 26</a></p>
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