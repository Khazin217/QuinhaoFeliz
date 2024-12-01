<script>
    function MostraDetalhesProduto(productId) {
        document.querySelector('.lista_produto').style.display = 'none';
        document.querySelectorAll('.detalhe_produto').forEach(detail => detail.style.display = 'none');
        document.getElementById(productId).style.display = 'block';
    }

    function MostraListaProduto() {
        document.querySelector('.lista_produto').style.display = 'flex';
        document.querySelectorAll('.detalhe_produto').forEach(detail => detail.style.display = 'none');
    }
</script>

<h1 class="titulo_categoria">Bebidas</h1>   
<!-- Itens do catalógo -->
<div class="container">
    <div class="lista_produto">
        <div class="itens_produto" onclick="MostraDetalhesProduto('refri_2L')">
            <img src="<?=URL?>/img/2L.jpg" alt="Refrigerante_2L">
            <p>Refrigerante de 2L</p>
            <p class="preco">R$10,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('kapo')">
            <img src="<?=URL?>/img/kapo.jpeg" alt="Kapo">
            <p>Kapo</p>
            <p class="preco">R$3,50</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('latinha_refri')">
            <img src="<?=URL?>/img/latinha.jpg" alt="Latinhas_Refrigerante">
            <p>Latinhas de Refrigerante</p>
            <p class="preco">R$5,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('parecis')">
            <img src="<?=URL?>/img/Parecis.jpg" alt="Parecis">
            <p>Paceris</p>
            <p class="preco">R$6,00</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('garrafinhas')">
            <img src="<?=URL?>/img/garrafinha.jpg" alt="Garrafinhas">
            <p>Garrafinhas</p>
            <p class="preco">R$3,50</p>
        </div>
        <div class="itens_produto" onclick="MostraDetalhesProduto('toddynho')">
            <img src="<?=URL?>/img/toddy.jpg" alt="Toddynho">
            <p>Toddynho</p>
            <p class="preco">R$3,00</p>
        </div>
    </div>
</div>
<!-- Fim do Catalógo -->

<!-- Mostra de detalhes dos produtos -->
<div id="refri_2L" class="detalhe_produto"> <!-- Detalhes REFRIGERANTE DE 2l -->
    <h1>Refrigerante de 2L</h1>
    <img src="<?=URL?>/img/2L.jpg" alt="Refrigerante_2L">
    <p>Refrigerante de diferentes sabores e diferente marcas</p>
    <p class="preco">R$10,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <label for="qtd_produto">Escolha o sabor:</label>
    <select name="sabor" required="required">
        <option value="Presunto">Dydyo</option>
        <option value="salsicha">Guaraná</option>
        <option value="frango">Coca-Cola</option>
    </select> <br><br>
    <button class="btn_compra">Comprar</button> <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="kapo" class="detalhe_produto"> <!-- Detalhe da KAPO -->
    <h1>Kapo</h1>
    <img src="<?=URL?>/img/kapo.jpeg" alt="Kapo">
    <p>Escolha um suco de fruto delicioso da Kapo para tomar</p>
    <p class="preco">R$8,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <label for="qtd_produto">Escolha o sabor:</label>
    <select name="sabor" required="required">
        <option value="Presunto">Morango</option>
        <option value="salsicha">Uva</option>
        <option value="frango">Laranja</option>
    </select> <br><br>
    <button class="btn_compra">Comprar</button> <br><br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="latinha_refri" class="detalhe_produto"> <!-- Detalhe dA LATINHA DE REFRIGERANTE -->
    <h1>Latinhas de Refrigerante</h1>
    <img src="<?=URL?>/img/latinha.jpg" alt="Latinhas_Refrigerante">
    <p>Tenha opções refresgantes de refrigerantes para saciar a sede</p>
    <p class="preco">R$5,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <label for="qtd_produto">Escolha o sabor:</label>
    <select name="sabor" required="required">
        <option value="Presunto">Laranja</option>
        <option value="salsicha">Coca-Cola - 0 Açúcar</option>
        <option value="frango">Uva</option>
    </select> <br><br>
    <button class="btn_compra">Comprar</button> <br> <br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="parecis" class="detalhe_produto"> <!-- Detalhe do PARECIS -->
    <h1>Parecis</h1>
    <img src="<?=URL?>/img/Parecis.jpg" alt="Parecis">
    <p>Clássico refrigerante, nostálgico e perfeito para todas as ocaciões.</p> <br>
    <p class="preco">R$6,00</p> <br> 
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br> <br>
    <button class="btn_compra">Comprar</button> <br> <br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="garrafinhas" class="detalhe_produto"> <!-- Detalhe da GARRAFINHAS -->
    <h1>Garrafinhas</h1>
    <img src="<?=URL?>/img/garrafinha.jpg" alt="trufa">
    <p>Opção rápida e refresgante para se levar em uma viajes</p>
    <p class="preco">R$3,50</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <button class="btn_compra">Comprar</button> <br> <br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>
<div id="toddynho" class="detalhe_produto"> <!-- Detalhe do ALFAJOR -->
    <h1>Toddynho</h1>
    <img src="<?=URL?>/img/toddy.jpg" alt="Toddynho">
    <p>Lembresse, balance antes de tomar, porque é aqui que a nostalgia tem significado.</p>
    <p class="preco">R$3,00</p>
    <label for="qtd_produto">Escolha a quantidade:</label>
    <input type="number" id="qtd_produto" name="quantity" value="1" min="1" max="10"><br>
    <button class="btn_compra">Comprar</button> <br> <br>
    <a href="#" class="back-link" onclick="MostraListaProduto()">Voltar para a lista de produtos</a>
</div>