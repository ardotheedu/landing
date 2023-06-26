<?php
   include("protect.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do usuario</title>
</head>
<body>
    <p>Bem vindo ao painel do usuario.</p>
    <br><br>

    <h1>PAINEL</h1>
    <br>
    <p>Imagem do usuario ficaria aqui</p>
    <p>Opção de alterar a imagem de perfil do usuario (função anexar)</p>
    <p>Nome: <?php echo $_SESSION['nome']; ?></p>
    <br>
    <p><a href="logout.php">Encerrar a sessão</a></p>
</body>
</html>