<?php include("top-profile.php")?>
    <br><br>
    <section class="container-main">
    <a class="title-container"><h1>PAINEL</h1></a>
    <br>
        <?php
                include("../conexao.php");
                $countQuery = "SELECT COUNT(*) as total FROM leads";
                $resultado = $conexao->query($countQuery);
                $totalRegistros = $resultado->fetch_assoc()['total'];
                $totalRegistros = $totalRegistros ? $totalRegistros : 0;

                echo "<p>" . "total de leads  - " . $totalRegistros . "</p>";

                $resultado = $conexao->query("SELECT quantidade FROM visitantes WHERE tipo = 'index'");
                $row = $resultado->fetch_assoc();

               
                if ( $row['quantidade']) {
                    $numeroVisitas = $row['quantidade'];

                    $taxaConversao = ($totalRegistros / $numeroVisitas) * 100;
                    echo "<p>" . "total de visitante pagina inicial  - " . $row['quantidade'] . "</p>";
                    echo "<p>" . "Taxa de conversão visitante em leads  - " . $taxaConversao . "%" . "</p>";
                } else {
                    echo "<p> Não ha dados sobre numero de visita";
                }

                $resultado = $conexao->query("SELECT quantidade FROM visitantes WHERE tipo = 'conta'");
                $row = $resultado->fetch_assoc();
                

                if ( $row['quantidade']) {
                    $numeroVisitasCadastro = $row['quantidade'];
                    $taxa_finalizaram_cadastro =  ($totalRegistros / $numeroVisitasCadastro) * 100;

                    echo "<p>" . "total de visitante pagina cadastro  - " . $row['quantidade'] . "</p>";
                    echo "<p>" . "Taxa de conversão que finalizaram o cadastro  - " . $taxa_finalizaram_cadastro . "%" . "</p>";
                } else {
                    echo "<p>Não dados sobre visita na pagina de cadastro  </p>";
                } 

                

                
                // Exibir o total de registros na página
                echo "<a class='button' href='leads.php'>$totalRegistros registros</a>";
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