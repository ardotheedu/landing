<?php
include("protect.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do usuário</title>
    <link rel="stylesheet" href="painel.css">
</head>
<body>
<header class="container-head">
            <nav class="nav">
                <section class="logo">
                    <img src="../images/logo.svg" alt="Logo Robo Ubiq" />
                    <p class="logo-name">Ubiq</p>
                </section>
                <section class="nav-welcome">
            
        <p>Bem-vindo(a)  <a class="name"> <?php echo $_SESSION['nome']; ?></a>  ao painel do administrador.</p>
                </section>
            </nav>
        </header>