<?php
require_once('geral/connectdb.php');

session_start();
$error_msg = "";


if (!isset($_SESSION['id_user'])) {

    if (isset($_POST['submit'])) {
        
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
        $senha = mysqli_real_escape_string($dbc, trim($_POST['senha']));

        if (!empty($email) && !empty($senha)) {
           

            $query = "SELECT id_usuario, nome, senha, email FROM alunos WHERE email = '$email'";

            $data = mysqli_query($dbc, $query);

            if (mysqli_num_rows($data) == 1) {
               
                $row = mysqli_fetch_array($data);

                if ($row['senha'] === SHA1($senha)) {

                    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);
                    $query = "UPDATE alunos SET senha = '$hashed_password' WHERE email = '" . $email . "'";
                    mysqli_query($dbc, $query);
                } else if (password_verify($senha, $row['senha'])) {

                    $_SESSION['id_usuario'] = $row['id_usuario'];
                    $_SESSION['email'] = $row['email'];

                    setcookie('id_usuario', $row['id_usuario'], time() + (60 * 60 * 24 * 7));    // expires in 30 days
                    setcookie('email', $row['email'], time() + (60 * 60 * 24 * 7));  // expires in 30 days

                    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/curso.php';
                    header('Location: ' . $home_url);
                } else {
                    $error_msg = 'Senha inválida. Tente novamente.';
                }
            } else {
                $error_msg = 'E-mail ou nome de usuário inválidos. Tente novamente.';
            } 
        }  
        else {
            $error_msg = 'Você precisa digitar o nome de usuário e senha para entrar.';
        } 

    }
}

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

        <main>

            <?php
           
            if (empty($_SESSION['id_usuario'])) {
                echo '<p class="texto-alerta mensagens">' . $error_msg . 'Você não está logado. <a href="login.php">Fazer login.</a></p>';
            
            } else {
               
                echo ('<p class="mensagens">Você está logado como ' . $_SESSION['email'] . '.</p>');

            ?>

<h1>Lição 1</h1>

            <?php


            }

            mysqli_close($dbc);
            ?>

        </main>

        <footer>
            <p id="copyright">Todos os direitos reservados <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </footer>

    </div>
</body>

</html>