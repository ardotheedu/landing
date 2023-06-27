<?php
include("protect.php");

// (A) SAVE IMAGE INTO DATABASE
if (isset($_FILES["upload"])) {
    require "2-lib-store.php";
    $result = $_STORE->save(); // Save the uploaded image to the database
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
</head>
<body>
    <p>Bem-vindo ao painel do usuário.</p>
    <br><br>

    <h1>PAINEL</h1>
    <br>
    <p>Imagem do usuário:</p>
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
    <br><br>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="upload" required>
        <input type="submit" name="submit" value="Upload File">
    </form>
    <p>Nome: <?php echo $_SESSION['nome']; ?></p>
    <input class="submit" type="submit" name="alterar" value="Alterar informações do usuário">
    <br>
    <p><a href="logout.php">Encerrar a sessão</a></p>
</body>
</html>
