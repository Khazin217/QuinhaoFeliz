<!-- carrinhoView.php -->
<h1>Seu Carrinho</h1>
<table>
    <thead>
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço Unitário</th>
            <th>Total</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($itens as $index => $item): ?>
            <tr>
                <td><?= $item['produto'] ?></td>
                <td><?= $item['quantidade'] ?></td>
                <td><?= $item['preco'] ?></td>
                <td><?= $item['quantidade'] * $item['preco'] ?></td>
                <td><a href="remover.php?index=<?= $index ?>">Remover</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h3>Total: R$<?= number_format($total, 2) ?></h3>

<form action="finalizar.php" method="POST">
    <label for="metodoPagamento">Escolha o método de pagamento:</label><br>
    <select name="metodoPagamento" id="metodoPagamento">
        <option value="pix">PIX</option>
        <option value="cartao">Cartão</option>
    </select><br><br>
    <div id="parcelamento" style="display: none;">
        <label for="parcelas">Escolha o número de parcelas:</label><br>
        <input type="number" name="parcelas" id="parcelas" value="1" min="1" max="12"><br><br>
    </div>
    <button type="submit">Finalizar Compra</button>
</form>

<script>
    document.getElementById('metodoPagamento').addEventListener('change', function () {
        if (this.value === 'cartao') {
            document.getElementById('parcelamento').style.display = 'block';
        } else {
            document.getElementById('parcelamento').style.display = 'none';
        }
    });
</script>
