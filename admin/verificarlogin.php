<?php
include("conexao.php");

if (isset($_POST['email']) || isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0) {
        echo "Preencha o seu email";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha a sua senha";
    } else {
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
        $senhaCriptografada = md5($senha); // Aplica o MD5 à senha fornecida

        $sql_code = "SELECT * FROM cadastroubiq WHERE email = '$email' AND senha = '$senhaCriptografada'";
        $sql_query = mysqli_query($conexao, $sql_code) or die("Falha na execução do código SQL " . mysqli_error($conexao));

        $quantidade = mysqli_num_rows($sql_query);

        if ($quantidade == 1) {
            $usuario = mysqli_fetch_assoc($sql_query);
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");
            exit;
        } else {
            echo "Falha ao logar, email ou senha incorretos";
        }
    }
}
?>
