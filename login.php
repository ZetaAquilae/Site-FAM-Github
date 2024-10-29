<?php
require_once('geral/connectdb.php');

// Start the session
session_start();

// Clear the error message
$error_msg = "";

// If the user isn't logged in, try to log them in
if (!isset($_SESSION['id_user'])) {

    if (isset($_POST['submit'])) {
        // Connect to the database
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
        $senha = mysqli_real_escape_string($dbc, trim($_POST['senha']));

        if (!empty($email) && !empty($senha)) {
            // Look up the username and password in the database

            $query = "SELECT id_usuario, nome, senha, email FROM alunos WHERE email = '$email'";

            $data = mysqli_query($dbc, $query);

            if (mysqli_num_rows($data) == 1) {
                // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
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
            } //else
        }  //if (!empty($user_username) && !empty($user_password))
        else {
            $error_msg = 'Você precisa digitar o nome de usuário e senha para entrar.';
        } //else

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
                    <h2>Curso de Inglês</h2>
                </div>
                <div id="button-nav">
                    <a href="login.php">
                        <button id="login-nav">Login</button>
                    </a>
                </div>
            </div>
        </header>

        <main>

            <h1>Login</h1>

            <?php
            // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
            if (empty($_SESSION['id_usuario'])) {
                echo '<p class="texto-alerta">' . $error_msg . '</p>';
            ?>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <label for="email">e-mail:</label><br>
                    <input type="text" name="email" value="<?php if (!empty($email)) echo $email; ?>"><br>
                    <label for="senha">Senha:</label><br>
                    <input type="password" name="senha"><br>

                    <input type="submit" value="Entrar" name="submit">

                </form>

                <p>Não tem conta? <a href="mailto:ingles123@gmail.com">Matricule-se</a></p>
                
            <?php
            } else {
                // Confirm the successful log-in
                echo ('<p>Você está logado como ' . $_SESSION['email'] . '. <a href="curso.php">Ir para o curso</a>.</p>');
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