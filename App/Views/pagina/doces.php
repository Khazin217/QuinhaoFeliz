<script>
    // Função para exibir os detalhes de um produto específico
    function MostraDetalhesProduto(productId) {
        // Oculta a lista de produtos
        document.querySelector('.lista_produto').style.display = 'none';
        // Oculta todos os detalhes de produtos
        document.querySelectorAll('.detalhe_produto').forEach(detail => detail.style.display = 'none');
        // Exibe apenas os detalhes do produto correspondete ao ID
        document.getElementById(productId).style.display = 'block';
    }

    // Função para voltar á lista de produtos
    function MostraListaProduto() {
        // Exibe a lista de produtos
        document.querySelector('.lista_produto').style.display = 'flex';
        // Oculta os detalhes de todos outros os outros produtos
        document.querySelectorAll('.detalhe_produto').forEach(detail => detail.style.display = 'none');
    }
</script>

<h1 class="titulo_categoria">Doces</h1>   
<!-- Itens do catalógo -->
<div class="container">
    <div class="lista_produto">
        <div class="itens_produto" onclick="MostraDetalhesProduto('bolo_chocolate')">
            <img src="<?=URL?>/img/bolo.png" alt="Bolo_de_Chocolate">
            <p>Bolo de Chocolate</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('torta_geleia_morango')">
            <img src="<?=URL?>/img/Torta - Geleia de Morango.jpg" alt="Torta_de_Geleia_de_Morango">
            <p>Torta de Geleia de Morango</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('donut')">
            <img src="<?=URL?>/img/Donut.avif" alt="Donut">
            <p>Donut</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('brigadeiro')">
            <img src="<?=URL?>/img/brigadeiro.jpg" alt="Brigadeiro">
            <p>Brigadeiro</p>
            <p class="preco">R$3,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('trufa')">
            <img src="<?=URL?>/img/trufa.png" alt="Trufa">
            <p>Trufa</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('alfajor')">
            <img src="<?=URL?>/img/alfajor.webp" alt="Alfajor">
            <p>Alfajor</p>
            <p class="preco">R$3,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('cupcake')">
            <img src="<?=URL?>/img/cupcake.webp" alt="cupcake">
            <p>cupcake</p>
            <p class="preco">R$2,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('palha-italiana')">
            <img src="<?=URL?>/img/palha-italiana.webp" alt="palha-italiana">
            <p>Palha-italiana</p>
            <p class="preco">R$6,00</p>
        </div>
    </div>
</div>
<!-- Fim do Catalógo -->

<!-- Mostra de detalhes dos produtos -->
<div id="bolo_chocolate" class="detalhe_produto"> <!-- Detalhe do BOLO DE CHOCOLATE -->
    <h1>Bolo de Chocolate</h1>
    <img src="<?=URL?>/img/bolo.png" alt="Bolo_de_Chocolate">
    <p>Um delicioso bolo de chocolate, perfeito para qualquer ocasião.</p>
    <p class="preco">R$5,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <label for="qtd_produto">Escolha o sabor:</label>
    <button href="<?=URL?>/pagina/carrinhoView" class="btn_compra" onclick="adicionarAoCarrinho('Bolo_de_Chocolate', 'Bolo de Chocolate', 5.00, document.getElementById('qtd_produto').value)">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="torta_geleia_morango" class="detalhe_produto"> <!-- Detalhe da TORTA DE GELEIA DE MORANGO -->
    <h1>Torta de Geleia de Morango</h1>
    <img src="<?=URL?>/img/Torta - Geleia de Morango.jpg" alt="Torta_de_Geleia_de_Morango">
    <p>Torta fresca com geleia de morango e frutas frescas.</p>
    <p class="preco">R$8,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <button href="<?=URL?>/pagina/carrinhoView" class="btn_compra" onclick="adicionarAoCarrinho('Torta_de_Geleia_de_Morango', 'Torta de Geleia de Morango', 8.00, document.getElementById('qtd_produto').value)">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="donut" class="detalhe_produto"> <!-- Detalhe do DONUT -->
    <h1>Donut</h1>
    <img src="<?=URL?>/img/Donut.avif" alt="Donut">
    <p>Donut macio coberto com confeitos coloridos.</p>
    <p class="preco">R$5,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <button href="<?=URL?>/pagina/carrinhoView" class="btn_compra" onclick="adicionarAoCarrinho('Donut', 'Donut', 5.00, document.getElementById('qtd_produto').value)">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="brigadeiro" class="detalhe_produto"> <!-- Detalhe do BRIGADEIRO -->
    <h1>Brigadeiro</h1>
    <img src="<?=URL?>/img/brigadeiro.jpg" alt="Brigadeiro">
    <p>Clássico brigadeiro brasileiro coberto com granulado de chocolate.</p> <br>
    <p class="preco">R$3,00</p> <br> 
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br> <br>
    <button href="<?=URL?>/pagina/carrinho.php" class="btn_compra" onclick="adicionarAoCarrinho('Brigadeiro', 'Brigadeiro', 3.00, document.getElementById('qtd_produto').value)">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="trufa" class="detalhe_produto"> <!-- Detalhe da TRUFA -->
    <h1>Trufa</h1>
    <img src="<?=URL?>/img/trufa.png" alt="trufa">
    <p>Trufa de chocolate com recheio cremoso.</p>
    <p class="preco">R$5,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <button href="<?=URL?>/pagina/carrinhoView" class="btn_compra" onclick="adicionarAoCarrinho('trufa', 'Trufa', 5.00, document.getElementById('qtd_produto').value)">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="alfajor" class="detalhe_produto"> <!-- Detalhe do ALFAJOR -->
    <h1>Alfajor</h1>
    <img src="<?=URL?>/img/alfajor.webp" alt="Alfajor">
    <p>Alfajor coberto com chocolate e decorado com confeitos.</p>
    <p class="preco">R$5,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <button href="<?=URL?>/pagina/carrinhoView" class="btn_compra" onclick="adicionarAoCarrinho('Alfajor', 'Alfajor', 5.00, document.getElementById('qtd_produto').value)">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="cupcake" class="detalhe_produto"> <!-- Detalhe do ALFAJOR -->
    <h1>Cupcake</h1>
    <img src="<?=URL?>/img/cupcake.webp" alt="cupcake">
    <p>cupcake coberto com chocolate.</p>
    <p class="preco">R$2,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <button href="<?=URL?>/pagina/carrinhoView" class="btn_compra" onclick="adicionarAoCarrinho('Alfajor', 'Alfajor', 5.00, document.getElementById('qtd_produto').value)">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="Palha-italiana" class="detalhe_produto"> <!-- Detalhe do ALFAJOR -->
    <h1>Palha-italiana</h1>
    <img src="<?=URL?>/img/palha-italiana.webp" alt="Palha-italiana<">
    <p>Palha-italiana< coberto com chocolate.</p>
    <p class="preco">R$2,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <button href="<?=URL?>/pagina/carrinhoView" class="btn_compra" onclick="adicionarAoCarrinho('Alfajor', 'Alfajor', 5.00, document.getElementById('qtd_produto').value)">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>