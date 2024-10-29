<?php
  session_start();
  if (isset($_SESSION['id_usuario'])) {
   
    $_SESSION = array();

    if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), '', time() - 3600);
    }

    session_destroy();
  }

  setcookie('id_usuario', '', time() - 3600);
  setcookie('usuario', '', time() - 3600);

  $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
  header('Location: ' . $home_url);
?>