<?php
include("../conexao.php");

// Verifica se o ID do usuário foi passado como parâmetro na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Realiza a exclusão do usuário com base no ID
    $sql = "DELETE FROM cadastroubiq WHERE id = $id";
    if ($conexao->query($sql) === TRUE) {
        echo "Usuário excluído com sucesso.";
    } else {
        echo "Erro ao excluir o usuário: " . $conexao->error;
    }
} else {
    echo "ID do usuário não foi fornecido.";
}

// Encerra a conexão
$conexao->close();
?>
