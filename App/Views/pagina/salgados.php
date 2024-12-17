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

<h1 class="titulo_categoria">Salgados</h1>   
<!-- Itens do catalógo -->
<!-- Cada item da lista apresenta um produto -->
<div class="container">
    <div class="lista_produto">
        <div class="itens_produto" onclick="MostraDetalhesProduto('coxinha')">
            <img src="<?=URL?>/img/coxinha.png" alt="Coxinha de Frango">
            <p>Coxinha de Frango</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('roque')">
            <img src="<?=URL?>/img/roque.png" alt="Roque">
            <p>Roque</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('pastel')">
            <img src="<?=URL?>/img/pastel.png" alt="Pastel">
            <p>Pastel</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('saltenha')">
            <img src="<?=URL?>/img/saltenha.jpeg" alt="Saltenha">
            <p>Saltenha</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('pizza')">
            <img src="<?=URL?>/img/pizza.png" alt="Pizza">
            <p>Pizza Rolls</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('croissant')">
            <img src="<?=URL?>/img/croissant.png" alt="Croissant">
            <p>Croissant</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('minipizza')">
            <img src="<?=URL?>/img/minipizza.png" alt="Mini Pizza">
            <p>Mini Pizza</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('bolinhaQueijo')">
            <img src="<?=URL?>/img/bolinhaQueijo.png" alt="Bolinha de Queijo">
            <p>Bolinha de Queijo</p>
            <p class="preco">R$5,00</p>
        </div>
    </div>
</div>
<!-- Fim do Catalógo -->

<!-- Detalhes do produto específico -->
<div id="coxinha" class="detalhe_produto"> <!-- Detalhe da COXINHA -->
    <h1>Coxinha de Frango</h1>
    <img src="<?=URL?>/img/coxinha.png" alt="coxinha">
    <p>Coxinha de Frango</p>
    <p class="preco">R$5,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <button class="btn_compra">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="roque" class="detalhe_produto"> <!-- Detalhe do ROQUE -->
    <h1>Roque</h1>
    <img src="<?=URL?>/img/roque.png" alt="roque">
    <p>Roque com recheios diversos.</p>
    <p class="preco">R$5,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <label for="qtd_produto">Escolha o sabor:</label>
    <select name="sabor" required="required">
        <option value="Presunto">Presunto e Queijo</option>
        <option value="salsicha">Salsicha</option>
        <option value="frango">Frango</option>
    </select> <br><br>
    <button class="btn_compra">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="pastel" class="detalhe_produto"> <!-- Detalhe do PASTEL -->
    <h1>Pastel</h1>
    <img src="<?=URL?>/img/pastel.png" alt="pastel">
    <p>Pastel com recheio diversos.</p>
    <p class="preco">R$5,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <label for="qtd_produto">Escolha o sabor:</label>
    <select name="sabor" required="required">
        <option value="Presunto">Presunto e Queijo</option>
        <option value="queijo">Queijo</option>
        <option value="carne">Carne</option>
    </select> <br><br>
    <button class="btn_compra">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="saltenha" class="detalhe_produto"> <!-- Detalhe da SALTENHA -->
    <h1>Saltenha de Frango</h1>
    <img src="<?=URL?>/img/saltenha.jpeg" alt="saltenha">
    <p>Saltenha de Frango.</p> <br>
    <p class="preco">R$5,00</p> <br> 
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br> <br>
    <button class="btn_compra">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="pizza" class="detalhe_produto"> <!-- Detalhe da PIZZA -->
    <h1>Pizza Rolls</h1>
    <img src="<?=URL?>/img/pizza.png" alt="pizza">
    <p>Pizza Rolls com recheios diversos.</p>
    <p class="preco">R$5,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <label for="qtd_produto">Escolha o sabor:</label>
    <select name="sabor" required="required">
        <option value="Presunto">Presunto e Queijo</option>
        <option value="frango">Frango</option>
    </select> <br><br>
    <button class="btn_compra">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="croissant" class="detalhe_produto"> <!-- Detalhe do CROISSANT -->
    <h1>Croissant</h1>
    <img src="<?=URL?>/img/croissant.png" alt="croissant">
    <p>Croissant com recheios diversos.</p>
    <p class="preco">R$5,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <label for="qtd_produto">Escolha o sabor:</label>
    <select name="sabor" required="required">
        <option value="Presunto">Presunto e Queijo</option>
        <option value="salsicha">Salsicha</option>
        <option value="frango">Frango</option>
    </select> <br><br>
    <button class="btn_compra">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="minipizza" class="detalhe_produto"> <!-- Detalhe da MINIPIZZA -->
    <h1>Minipizza</h1>
    <img src="<?=URL?>/img/minipizza.png" alt="minipizza">
    <p>Mini Pizza com recheios diversos.</p>
    <p class="preco">R$5,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <label for="qtd_produto">Escolha o sabor:</label>
    <select id="sabor" required="required">
        <option value="Presunto">Presunto e Queijo</option>
        <option value="calabresa">Calabresa</option>
        <option value="frango">Frango</option>
    </select> <br><br>
    <button href="<?=URL?>/pagina/carrinhoView" class="btn_compra" onclick="adicionarAoCarrinho('minipizza', 'Minipizza', 5.00, document.getElementById('qtd_produto').value)">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="bolinhaQueijo" class="detalhe_produto"> <!-- Detalhe da bolinhaQueijo -->
    <h1>Bolinha de queijo</h1>
    <img src="<?=URL?>/img/bolinhaQueijo.png" alt="bolinhaQueijo">
    <p>Bolinha de Queijo.</p> <br>
    <p class="preco">R$5,00</p> <br>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br><br>
    <button href="<?=URL?>/pagina/carrinhoView" class="btn_compra" onclick="adicionarAoCarrinho('bolinhaQueijo', 'Bolinha de queijo', 5.00, document.getElementById('qtd_produto').value)">Comprar</button>
    <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>