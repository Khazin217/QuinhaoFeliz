<!-- Conteúdo da Página -->
<main class="conteiner_main">
    <div class="div_background">
        <h1 class="titulo_main">Quinhão Feliz</h1> <!-- Título -->
        <p>Matando sua fome, assim como matamos as filas.</p> <!-- Frase de sub-título-->
    </div>

    <div class="barra_pesquisa">
        <input type="text" placeholder="Busque por salgados, doces, bebidas..." class="conteiner_pesquisa">
        <button class="butao_pesquisa">Busca Produto</button>
    </div>
        
    <div class="espaçamento"></div> <!-- Espaçamento entre o conteiner e as categorias -->

    <!-- Começo das categorias -->
    <section>
        <div class="inline">
            <a href="<?=URL?>/pagina/salgados">
                <img class="img_categoria" src="<?=URL?>/img/Salgados.jpg" alt="Imagem_Salgados">
            </a>
            <a href="<?=URL?>/pagina/doces">
                <img class="img_categoria" src="<?=URL?>/img/Doces.jpeg" alt="Imagem_Doces">
            </a>
        </div>
        <div class="inline">
            <a href="<?=URL?>/pagina/bebidas">
                <img class="img_categoria" src="<?=URL?>/img/Bebidas.jpg" alt="Imagem_Bebidas">
            </a>
            <a href="<?=URL?>/pagina/carrinhoView">
                <img class="img_categoria" src="<?=URL?>/img/Historico.jpg" alt="Imagem_Histórico">
            </a>
        </div> 
    </section>
    <!-- Fim das categorias -->
</main>
<!-- Conteúdo da Página -->