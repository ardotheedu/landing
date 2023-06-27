<?php
   include("protect.php");
   
   if (isset($_SESSION["profilePicPath"])) {
       $profilePicPath = $_SESSION["profilePicPath"];
   } else {
       // Set a default profile picture path if no picture has been uploaded yet
       $profilePicPath = "profile_pics/default.png";
   }
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
    <img src="<?php echo $profilePicPath; ?>" alt="Profile Picture">
    <br>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="profilePic">Profile Picture:</label>
        <input type="file" name="profilePic" id="profilePic">
        <input type="submit" value="Upload">
    </form>
    <p>Imagem do usuario ficaria aqui</p>
    <p>Nome: <?php echo $_SESSION['nome']; ?></p>
    <input class="submit" type="submit" name="alterar" value="Alterar informações do usuário">
    <br>
    <p><a href="logout.php">Encerrar a sessão</a></p>
</body>
</html>