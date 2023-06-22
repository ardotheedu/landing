<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CADASTRO |UBIQ</title>

</head>
<body>
  <a href="home.php">Voltar</a>
  <form action="cadastro.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Nome" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Email" required><br><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" placeholder="Senha" required><br><br>

    <input type="submit" value="Enviar">
  </form>
</body>
</html>
