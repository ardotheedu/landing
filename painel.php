<?php include("top-profile.php")?>
    <br><br>
    <section class="container-main">
    <a class="title-container"><h1>PAINEL</h1></a>
    <br>
    <a class="title-photo"><p>Imagem de perfil</p></a>
    <br>
    <div class="image-container">
        <?php
        // Caminho da imagem vindo do banco de dados ou alguma lógica PHP
        ?>
        <img src="<?php echo $caminhoImagem; ?>" alt="Imagem" class="rounded-image">
    </div>
    <br>
    <form method="post" enctype="multipart/form-data">
        <label for="up">Escolher Arquivo</label>
        <input type="file" accept="image" name="upload" required id="up">
        <input type="submit"  name="submit" value="Enviar Arquivo">
    </form>
</section>
    <secton class="section-button">
        <div class="container">
        <a class="button" href="alterarinformacoes.php">Alterar informações do usuário</a>
        <a class="button" href="logout.php">Encerrar a sessão</a>
        </div>
    <br>
</secton>
<?php
include("bottom.php");
?>