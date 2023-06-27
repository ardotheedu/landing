<?php
include("protect.php");
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];


  $id = $_SESSION['id'];
  $sql = "UPDATE cadastroubiq SET nome='$nome', email='$email', senha='$senha' WHERE id='$id'";
  if (mysqli_query($conexao, $sql)) {
    echo "<p>Informações atualizadas com sucesso</p>";
    $_SESSION['nome'] = $nome;
  } else {
    echo "<p>Erro ao atualizar informações: " . mysqli_error($conexao) . "</p>";
  }
}

$id = $_SESSION['id'];
$sql = "SELECT * FROM cadastroubiq WHERE id='$id'";
$resultado = mysqli_query($conexao, $sql);
$usuario = mysqli_fetch_assoc($resultado);

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar informações do usuário</title>
</head>
<body>
    <h1>Alterar informações</h1>
    <form action="" method="POST">
      <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $usuario['nome']; ?>" required>
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $usuario['email']; ?>" required>
      </div>
      <div>
        <label for="senha">Nova senha:</label>
        <input type="password" id="senha" name="senha" required>
      </div>
      <input type="submit" value="Salvar">
    </form>
    <br>
    <a href="painel.php">Voltar ao painel</a>
</body>
</html>
