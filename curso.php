<?php
require_once('geral/connectdb.php');

session_start();
$error_msg = "";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css">
    <script src="assets/javascript/main.js"></script>
    <title>Curso de Inglês</title>
</head>

<body>
    <div id="container">
        <header>
            <div id="navegacao-div">
                <div id="logo"><a href="index.html"><img src="assets/images/design/english-course-logo.png" alt="logo"></a></div>
                <div id="curso-nav">
                    <h1>Curso de Inglês</h1>
                </div>
                <div id="button-nav">
                    <a href="logout.php">
                        <button id="login-nav">Sair</button>
                    </a>
                </div>
            </div>
        </header>

        <?php

        if (empty($_SESSION['id_usuario'])) {
            echo '<p class="texto-alerta mensagens">' . $error_msg . 'Você não está logado. <a href="login.php">Fazer login.</a></p>';
        } else {

            echo ('<p class="mensagens">Você está logado como ' . $_SESSION['email'] . '.</p>');

        ?>

            <nav>
                <ul>
                    <li class="modulo"><a href="curso.php">Início</a></li>
                    <li class="modulo"><a href="curso/modulo1/m1-a1.php">Módulo 1</a></li>
                    <li><a href="curso/modulo1/m1-a1.php">Aula 1</a></li>
                    <li><a href="curso/modulo1/m1-a2.php">Aula 2</a></li>
                    <li><a href="curso/modulo1/m1-a3.php">Aula 3</a></li>
                    <li><a href="curso/modulo1/m1-a4.php">Aula 4</a></li>
                    <li><a href="curso/modulo1/m1-a5.php">Aula 5</a></li>
                    <li><a href="curso/modulo1/m1-a6.php">Aula 6</a></li>
                    <li><a href="curso/modulo1/m1-a7.php">Aula 7</a></li>
                    <li><a href="curso/modulo1/m1-a8.php">Aula 8</a></li>
                    <li><a href="curso/modulo1/m1-a9.php">Aula 9</a></li>
                    <li><a href="curso/modulo1/m1-a10.php">Aula 10</a></li>
                    <li class="modulo"><a href="curso/modulo2/m2-a1.php">Módulo 2</a></li>
                    <li class="modulo"><a href="curso/modulo2/m3-a1.php">Módulo 3</a></li>
                    <li class="modulo"><a href="curso/modulo2/m4-a1.php">Módulo 4</a></li>
                    <li class="modulo"><a href="curso/modulo2/m5-a1.php">Módulo 5</a></li>
                </ul>
            </nav>

            <main>

                <h3>Bem-vindo!</h3>
                <p>Olá e bem-vindo ao primeiro passo para dominar a língua inglesa! 🎉 </p>
                <p>Aqui, você encontrará:</p>

                <p><strong>Aulas Interativas</strong>: Projetadas para envolver e motivar, com foco em habilidades práticas de gramática e vocabulário.</p>
                <p><strong>Recursos Exclusivos</strong>: Acesso a materiais como quizzes e exercícios práticos.</p>
                <p><strong>Flexibilidade</strong>: Estude no seu próprio ritmo e de qualquer lugar, com total suporte.</p>
                <p><strong>Certificação</strong>: Receba um certificado ao final do curso, para dar aquele impulso no seu currículo e abrir novas oportunidades.</p>

                <p>Esperamos que você aproveite cada momento e tire o máximo proveito do seu aprendizado. Estamos aqui para apoiá-lo em cada etapa do caminho. Prepare-se para transformar seu futuro com o inglês!</p>

                <div class="proximo">
                    <p><a href="curso/modulo1/m1-a1.php" class="proximo-link">Ir para a lição 1</a></p>
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