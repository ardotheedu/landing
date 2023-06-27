<?php
include("conexao.php");

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
} else {
    $nome = '';
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}

if (isset($_POST['senha'])) {
    $senha = $_POST['senha'];
    $senhaCriptografada = md5($senha); // Criptografa a senha usando MD5
} else {
    $senha = '';
    $senhaCriptografada = '';
}

$sql = "INSERT INTO cadastroubiq(nome, email, senha) VALUES ('$nome', '$email', '$senhaCriptografada')";

if (mysqli_query($conexao, $sql)) {
    echo "<p>Usuário cadastrado<p>";
} else {
    echo "<p>Erro: <p>" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
