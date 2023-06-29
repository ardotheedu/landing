<?php
include("top.php");
include("conexao.php");

// Verificar se a sessão de visitante já foi iniciada
session_start();

// Verificar se o cookie de visitante já foi definido
if (!isset($_COOKIE['visitante'])) {
    // Verificar se há algum registro de visitantes no banco de dados
    $resultado = $conexao->query("SELECT * FROM visitantes WHERE tipo = 'index'");
    $registros = $resultado->num_rows;

    if ($registros == 0) {
        // Não há registros de visitantes, criar um novo registro
        $conexao->query("INSERT INTO visitantes (quantidade, tipo) VALUES (1, 'index')");
    } else {
        // Já existem registros de visitantes, atualizar o número de visitantes
        $conexao->query("UPDATE visitantes SET quantidade = quantidade + 1 WHERE tipo = 'index'");
    }

    // Definir um cookie para marcar o visitante
    setcookie('visitante', 'true', time() + (86400 * 30), '/'); // Cookie válido por 30 dias
    $conexao->close();
}

?>

        <main class="container main">
            <section class="container-section" id="inicio">
                <article class="content-main">
                    <h1 class="tour">Faça um tour pelo o nosso <span class="atention-color">Bot</span> de proteção</h1>
                    <p class="legend">Nós somos altamente focados em proteção para comunidade no Discord.</p>
                    <section class="flex">
                        <a class="button-start" href="formulario.php">Começar ></a>
                        <a class="button-more" href="saibamais.html">Saiba Mais</a>
                    </section>
                </article>
                <article class="hero">
                    <img src="./images/robots-doing-data-research.svg" alt="Robos fazendo planejamento">
                </article>
            </section>
            <section class="clients">
                <img src="./images/Clients.svg" alt="Nosso clientes: Slack, Woocommerce, Amazon e Microsoft"/>
            </section>
            <section  class="container-section gap about-us" id="sobre">
                <article>
                    <img src="./images/robot-cleaning-mirror.svg" alt="Robo fazendo limpeza em um vidro" />
                </article>
                <article>
                    <h1 class="title">Sobre nós</h1>
                    <p class="legend-section">Nós temos o compromisso de proteger crianças e comunidades de exposição a pornografia. Nós protegemos comunidades desde 2018. </p>
                    <section class="grid-3">
                        <article class="us-1">
                            <p class="us-title">Funções</p>
                            <h3 class="us-value">30+</h3>
                        </article>
                        <article class="us-2">
                            <p class="us-title">Clientes</p>
                            <h3 class="us-value">90 mil</h3>
                        </article>
                        <article class="us-3">
                            <p class="us-title">Bloqueados</p>
                            <h3 class="us-value">30M+</h3>
                        </article>
                    </section>
                </article>
            </section>
            <section class="features" id="funcionalidades">
                <article>
                    <section class="center">
                        <h1 class="title">Funcionalidades</h1>
                        <p class="features-legend">Pensando em nosso cliente e em como podemos tornar as comunidades mais seguras, democátricas e livres de pornografia. Essas foram as funcionalidades que criamos:</p>
                    </section>
                    <section class="grid-4">
                        <article class="feature">
                            <span>
                                <img class="ai bg" src="./images/icons/link 1.svg" alt="Robo" />
                            </span>
                            <h3>Inteligência Artificial</h3>
                            <p>Utilizamos inteligência artifical para identificar conteúdo adulto.</p>
                            <a href="#">Saiba mais</a>
                        </article>
                        <article class="feature">
                            <span>
                                <img class="on bg" src="./images/icons/star.svg" alt="Robo" />
                            </span>
                            <h3>Disponibilidade 24H</h3>
                            <p>Nosso bot Ubiq funciona 24 horas, 7 dias por semana  para deixar você sempre seguro</p>
                            <a href="#">Saiba mais</a>
                        </article>
                        <article class="feature">
                            <span>
                                <img  class="ban bg" src="./images/icons/plus-circle.svg" alt="Robo" />
                            </span>
                            <h3>Ban automatico</h3>
                            <p>Remove automaticamente qualquer um que infrija as regras da comunidade</p>
                            <a href="#">Saiba mais</a>
                        </article>
                    </section>
                </article>
            </section>
            <section class="container-section gap values" id="valores">
                <article>
                    <img src="./images/robots-doing-business-discussion.svg" alt="Robos armados preparados para eliminar ameaças">
                </article>
                <article>
                    <h1 class="title">Nossos Valores</h1>
                    <p class="legend-section">
                        Nós acreditamos em uma web segura, onde comunidades possam interagir sem risco de exposição a conteudo adulto, livre de trolls e que as pessoas possam se comunicar.
                    </p>
                    <a class="values-button" href="saibamais2.html" target="_blank">Saiba Mais</a>
                </article>
            </section>
        </main>
<?php include("bottom.php"); ?>