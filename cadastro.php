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

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
} else {
    $phone = '';
}

if (isset($_POST['community_link'])) {
    $community_link = $_POST['community_link'];
} else {
    $community_link = '';
}


$sql = "INSERT INTO leads(`name`, email, phone, community_link) VALUES ('$nome', '$email', '$phone', '$community_link')";

if (mysqli_query($conexao, $sql)) {
    header('Location: obrigado.php');
} else {
    echo "<p>Erro: <p>" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
