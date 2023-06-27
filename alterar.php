<?php
  include("verificarlogin.php");

  if (isset($_POST['alterar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
  }
header("Location: painel.php");
exit();
?>