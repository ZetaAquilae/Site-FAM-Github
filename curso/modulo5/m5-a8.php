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
                    <li class="modulo"><a href="../modulo3/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="../modulo4/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="m5-a1.php">Módulo 5</a></li>
                    <li><a href="m5-a1.php">Lição 41</a></li>
                    <li><a href="m5-a2.php">Lição 42</a></li>
                    <li><a href="m5-a3.php">Lição 43</a></li>
                    <li><a href="m5-a4.php">Lição 44</a></li>
                    <li><a href="m5-a5.php">Lição 45</a></li>
                    <li><a href="m5-a6.php">Lição 46</a></li>
                    <li><a href="m5-a7.php">Lição 47</a></li>
                    <li class="nav-active"><a href="m5-a8.php">Lição 48</a></li>
                    <li><a href="m5-a9.php">Lição 49</a></li>
                    <li><a href="m5-a10.php">Lição 50</a></li>
                </ul>
            </nav>

            <main>

                <h2>Módulo 5</h2>
                <h3>Lição 48 - Internet e Redes Sociais</h3>

                <h4>Objetivo:</h4>

                <p>Aprender vocabulário e expressões relacionadas à internet e redes sociais em inglês.</p>

                <h4>Conteúdo:</h4>

                <h4>1. Vocabulário Comum:</h4>

                <p>Internet (internet)</p>

                <p>Social media (redes sociais)</p>

                <p>Website (site)</p>

                <p>Profile (perfil)</p>

                <p>Post (postagem)</p>

                <p>Comment (comentário)</p>

                <p>Like (curtida)</p>

                <p>Share (compartilhar)</p>

                <p>Follow (seguir)</p>

                <p>Message (mensagem)</p>

                <p>Chat (bate-papo)</p>

                <h4>2. Frases Úteis:</h4>

                <p>I use the internet every day. (Eu uso a internet todos os dias.)</p>

                <p>She posted a photo on social media. (Ela postou uma foto nas redes sociais.)</p>

                <p>He has many followers on his profile. (Ele tem muitos seguidores no perfil dele.)</p>

                <p>They like to comment on posts. (Eles gostam de comentar nas postagens.)</p>

                <p>We can chat online. (Nós podemos conversar online.)</p>

                <h4>3. Exemplo de Diálogo:</h4>

                <p>Person A: Do you use social media? (Você usa redes sociais?) <br>
                    Person B: Yes, I use social media to stay in touch with friends. (Sim, eu uso redes sociais para manter contato com amigos.) <br>
                    Person A: Which platform do you use the most? (Qual plataforma você usa mais?) <br>
                    Person B: I use Instagram and Facebook the most. (Eu uso mais o Instagram e o Facebook.) <br>
                    Person A: Do you like to post photos? (Você gosta de postar fotos?) <br>
                    Person B: Yes, I like to share my photos and see comments. (Sim, eu gosto de compartilhar minhas fotos e ver os comentários.)</p>
                <br><br>
                <hr>

                <h2>Exercícios</h2>

                <?php

                $Questions = array(
                    1 => array(
                        'Question' => 'I use the _______ every day. (Eu uso a _______ todos os dias.)',
                        'Answers' => array(
                            'A' => 'profile',
                            'B' => 'internet',
                            'C' => 'chat'
                        ),
                        'CorrectAnswer' => 'B'
                    ),
                    2 => array(
                        'Question' => 'She posted a photo on _______. (Ela postou uma foto nas _______.)',
                        'Answers' => array(
                            'A' => 'internet',
                            'B' => 'website',
                            'C' => 'social media'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    3 => array(
                        'Question' => 'He has many _______ on his profile. (Ele tem muitos seguidores no perfil dele.)',
                        'Answers' => array(
                            'A' => 'followers',
                            'B' => 'comments',
                            'C' => 'likes'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                    4 => array(
                        'Question' => 'They like to _______ on posts. (Eles gostam de _______ nas postagens.)',
                        'Answers' => array(
                            'A' => 'like',
                            'B' => 'share',
                            'C' => 'comment'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
                    5 => array(
                        'Question' => 'We can _______ online. (Nós podemos conversar online.)',
                        'Answers' => array(
                            'A' => 'profile',
                            'B' => 'chat',
                            'C' => 'follow'
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
                    <p><a href="m5-a9.php" class="proximo-link">Ir para a lição 49</a></p>
                </div>

            </main>
        <?php

        }

        mysqli_close($dbc);
        ?>

        <footer>
            <p id="copyright">Todos os direitos reservados
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </footer>

    </div>
</body>

</html>