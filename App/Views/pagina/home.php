<!-- Conteúdo da Página -->
<main class="conteiner_main">
    <div class="titulo">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <h1 class="titulo_main">Quinhão Feliz</h1> <!-- Título -->
        <p>O lanche da escola ficou mais fácil: peça no site!</p> <!-- Frase de sub-título-->
    </div>

    <div class="barra_pesquisa">
        <input type="text" placeholder="Busque por salgados, doces, bebidas..." class="conteiner_pesquisa">
        <button class="butao_pesquisa">Buscar Produto</button>
    </div>
        
    <!-- Começo das categorias -->
    <section>
        <div class="inline">
            <a href="<?=URL?>/pagina/salgados">
                <img class="img_categoria" src="<?=URL?>/img/Salgados.jpeg" alt="Imagem_Salgados">
            </a>
            <a href="<?=URL?>/pagina/doces">
                <img class="img_categoria" src="<?=URL?>/img/Doce.jpeg" alt="Imagem_Doces">
            </a>
        </div>
        <div class="inline">
            <a href="<?=URL?>/pagina/bebidas">
                <img class="img_categoria" src="<?=URL?>/img/bebidas.jpeg" alt="Imagem_Bebidas">
            </a>
            <a href="<?=URL?>./pagina/historico">
                <img class="img_categoria" src="<?=URL?>/img/Carrinho.png" alt="Imagem_Histórico">
            </a>
        </div> 
    </section>
    <!-- Fim das categorias -->
</main>
<!-- Conteúdo da Página -->