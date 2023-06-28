<?php
include("protect.php");

if (isset($_FILES["upload"])) {
    require "2-lib-store.php";
    $result = $_STORE->save();
    if ($result === true) {
        $_SESSION["profilePicPath"] = $_FILES["upload"]["name"];
    }
    echo "<div class='note'>" . ($result ? "OK" : $_STORE->error) . "</div>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do usuário - Alterar informações</title>
    <link rel="stylesheet" href="painel2.css">
</head>
<body>
<header class="container-head">
            <nav class="nav">
                <section class="logo">
                    <img src="./images/logo.svg" alt="Logo Robo Ubiq" />
                    <p class="logo-name">Ubiq</p>
                </section>
                <section class="nav-welcome">
            
        <p>Bem-vindo(a)  <a class="name"> <?php echo $_SESSION['nome']; ?></a>  ao painel do usuário.</p>
                </section>
            </nav>
        </header>