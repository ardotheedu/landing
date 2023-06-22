<?php
  include("verificarlogin.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="cadastro.css" rel="stylesheet">
  <title>LOGIN |UBIQ</title>
</head>
<body>
  <a href="home.php">Voltar</a>
  <h1>Acesse a sua conta</h1>
  <form action="" method="POST">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Email" required><br><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" placeholder="Senha" required><br><br>

    <input type="submit" value="Acessar">
  </form>
</body>
</html>
