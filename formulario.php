<?php
  include("verificarlogin.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <title>LOGIN |UBIQ</title>
</head>
<body>
  <div class="container">
    <div class="hero">
        <img src="./images/robot-finding-data.svg" />
    </div>
    <div>
      <a href="./">
        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#0057ff}</style><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
      </a>
      <div class="content">
          <h1 class="center">Crie sua conta</h1>
          <form action="cadastro.php" method="POST">
            <div class="field">
              <label for="email">Nome:</label>
              <input class="input" type="text" id="nome" name="nome" placeholder="Email" required><br><br>
            </div>
            <div class="field">
              <label for="email">Email:</label>
              <input class="input" type="email" id="email" name="email" placeholder="Email" required><br><br>
            </div>
            <div class="field">
              <label for="senha">Senha:</label>
              <input class="input" type="password" id="senha" name="senha" placeholder="Senha" required><br><br>
            </div>
            <input class="submit" type="submit" value="Criar conta">
          </form>
      </div>
    </div>
    </div>
</body>
</html>

