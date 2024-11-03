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
                    <li><a href="m2-a1.php">Lição 11</a></li>
                    <li><a href="m2-a2.php">Lição 12</a></li>
                    <li><a href="m2-a3.php">Lição 13</a></li>
                    <li><a href="m2-a4.php">Lição 14</a></li>
                    <li><a href="m2-a5.php">Lição 15</a></li>
                    <li><a href="m2-a6.php">Lição 16</a></li>
                    <li><a href="m2-a7.php">Lição 17</a></li>
                    <li><a href="m2-a8.php">Lição 18</a></li>
                    <li><a href="m2-a9.php">Lição 19</a></li>
                    <li class="nav-active"><a href="m2-a10.php">Lição 20</a></li>
                    <li class="modulo"><a href="../modulo3/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="../modulo5/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 2</h2>
                <h3>Lição 20 - Membros da Família</h3>

                <h4>Objetivo:</h4>

                <p>Aprender os nomes dos membros da família em inglês e como usá-los em frases.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Nomes dos Membros da Família:</h4>

                <p>Father (pai)</p>

                <p>Mother (mãe)</p>

                <p>Brother (irmão)</p>

                <p>Sister (irmã)</p>

                <p>Grandfather (avô)</p>

                <p>Grandmother (avó)</p>

                <p>Uncle (tio)</p>

                <p>Aunt (tia)</p>

                <p>Cousin (primo/prima)</p>

                <p>Son (filho)</p>

                <p>Daughter (filha)</p>

                <p>Husband (marido)</p>

                <p>Wife (esposa)</p>

                <h4>2. Frases Úteis:</h4>

                <p>This is my father. (Este é meu pai.)</p>

                <p>She is my sister. (Ela é minha irmã.)</p>

                <p>He is my uncle. (Ele é meu tio.)</p>

                <p>They are my grandparents. (Eles são meus avós.)</p>

                <p>Do you have any brothers or sisters? (Você tem irmãos ou irmãs?)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Who is this? (Quem é este?) <br>
                    Person B: This is my brother. (Este é meu irmão.) <br>
                    Person A: And who is she? (E quem é ela?) <br>
                    Person B: She is my aunt. (Ela é minha tia.) <br>
                    Person A: Do you have any cousins? (Você tem primos?) <br>
                    Person B: Yes, I have three cousins. (Sim, eu tenho três primos.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'He is my _______. (Ele é meu _______.)',
                        'Answers' => array(
                            'A' => 'father',
                            'B' => 'aunt',
                            'C' => 'sister'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    2 => array(
                        'Question' => 'She is my _______. (Ela é minha _______.)',
                        'Answers' => array(
                            'A' => 'uncle',
                            'B' => 'brother',
                            'C' => 'mother'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    3 => array(
                        'Question' => 'They are my _______. (Eles são meus avós.)',
                        'Answers' => array(
                            'A' => 'friends',
                            'B' => 'grandparents',
                            'C' => 'children'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    4 => array(
                        'Question' => 'Do you have any _______? (Você tem irmãos e irmãs?)',
                        'Answers' => array(
                            'A' => 'dogs',
                            'B' => 'brothers or sisters',
                            'C' => 'books'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    5 => array(
                        'Question' => 'She is my _______. (Ela é minha _______.)',
                        'Answers' => array(
                            'A' => 'wife',
                            'B' => 'son',
                            'C' => 'father'
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
                    <p><a href="../modulo3/m3-a1.php" class="proximo-link">Ir para a lição 21</a></p>
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