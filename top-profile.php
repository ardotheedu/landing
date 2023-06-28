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
    <title>Painel do usuário</title>
    <link rel="stylesheet" href="painel.css">
</head>
<body>
<header class="container-head">
            <nav class="nav">
                <section class="logo">
                    <img src="./images/logo.svg" alt="Logo Robo Ubiq" />
                    <p class="logo-name">Ubiq</p>
                </section>
                <section class="nav-welcome">
                <?php
    include("conexao.php");
    if (isset($_SESSION["profilePicPath"])) {
        $name = $_SESSION["profilePicPath"];
        $sql = "SELECT `file_mime`, `file_data` FROM `storage` WHERE `file_name`=('$name')";
        $stmt = mysqli_query($conexao, $sql);
        $file = $stmt->fetch_row();

        if ($file) {
            echo '<img src="data:image/jpeg;base64,'.base64_encode($file[1]) .'" />';
            
        } else {
            $error = "$name not found";
        }
    
    }
    ?>
        <p>Bem-vindo(a)  <a class="name"> <?php echo $_SESSION['nome']; ?></a>  ao painel do usuário.</p>
                </section>
            </nav>
        </header>