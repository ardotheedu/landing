<?php include("top-profile2.php")?>  
<?php
include("protect.php");
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $senhaCriptografada = md5($senha); // Criptografa a senha usando o MD5

  $id = $_SESSION['id'];
  $sql = "UPDATE cadastroubiq SET nome='$nome', email='$email', senha='$senhaCriptografada' WHERE id='$id'";
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

<section class="container-main">
  <h1>Alterar informações</h1>
  <form action="" method="POST">
    <div class="form-row">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="<?php echo $usuario['nome']; ?>" required>
    </div>
    <div class="form-row">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="<?php echo $usuario['email']; ?>" required>
    </div>
    <div class="form-row">
      <label for="senha">Nova senha:</label>
      <input type="password" id="senha" name="senha" required>
    </div>
    <div class="button-group">
      <input type="submit" value="Salvar">
      <a class="back-button" href="painel.php">Voltar ao painel</a>
    </div>
  </form>
  <br>
</section>
<?php include("bottom.php")?>
