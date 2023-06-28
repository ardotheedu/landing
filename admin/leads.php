<?php include("top-profile.php")?>
    <br><br>
    <section class="container-main">
    <a class="title-container"><h1>PAINEL</h1></a>
    <br>
        <?php
                include("conexao.php");
                $countQuery = "SELECT * FROM cadastroubiq";
                $resultado = $conexao->query($countQuery);

                // Verificar se há resultados
                if ($resultado->num_rows > 0) {
                    // Loop através dos resultados e exibir os usuários
                    echo "<table>";
                    echo "<tr><th>Nome</th><th>E-mail</th><th>Ação</th></tr>";
                
                    while ($row = $resultado->fetch_assoc()) {
                        $nome = $row['nome'];
                        $email = $row['email'];
                        $id = $row['id'];
                
                        echo "<tr>";
                        echo "<td>" . $nome . "</td>";
                        echo "<td>" . $email . "</td>";
                        echo "<td><a href='excluir_usuario.php?id=" . $id . "'>Excluir</a></td>";
                        echo "</tr>";
                    }
                
                    echo "</table>";
                } else {
                    echo "Não há usuários na tabela.";
                }

                
                $conexao->close();
            ?>                
        </div>
    
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