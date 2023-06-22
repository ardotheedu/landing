<?php
include("conexao.php");

//isset significa = estar definido

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
} else {
    $nome = '';
}

if (isset($_POST['sobrenome'])) {
    $sobrenome = $_POST['sobrenome'];
} else {
    $sobrenome = '';
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}

if (isset($_POST['senha'])) {
    $senha = $_POST['senha'];
} else {
    $senha = '';
}

$sql = "INSERT INTO cadastroubiq(nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "<p>Usuário cadastrado<p>";
} else {
    echo "<p>Erro: <p>" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
