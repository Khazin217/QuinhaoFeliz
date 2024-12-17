<?php
// CarrinhoController.php

class CarrinhoController {
    let carrinho = [];
    private $carrinho;

    public function __construct() {
        $this->carrinho = new CarrinhoModel();
    }

        // Função para adicionar produto ao carrinho
        function adicionarAoCarrinho(productId, nome, preco, quantidade, sabor = '') {
            // Verifica se o produto já está no carrinho
            let produtoExistente = carrinho.find(item => item.productId === productId && item.sabor === sabor);
    
            if (produtoExistente) {
                produtoExistente.quantidade += parseInt(quantidade); // Atualiza a quantidade se o produto já estiver no carrinho
            } else {
                carrinho.push({
                    productId: productId,
                    nome: nome,
                    preco: preco,
                    quantidade: parseInt(quantidade),
                    sabor: sabor
                });
            }
    
            mostrarCarrinho(); // Atualiza a visualização do carrinho
            window.location.href = '/carrinho'; // Redireciona para a página do carrinho
        }
    
        // Função para exibir os produtos no carrinho (na página do carrinho)
        function mostrarCarrinho() {
            const carrinhoContainer = document.getElementById("carrinho_container");
            carrinhoContainer.innerHTML = '';  // Limpa o conteúdo atual
    
            if (carrinho.length === 0) {
                carrinhoContainer.innerHTML = "<p>Seu carrinho está vazio.</p>"; // Caso não tenha itens no carrinho
            } else {
                carrinho.forEach(item => {
                    carrinhoContainer.innerHTML += '
                        <div class="produto">
                            <p>${item.nome}</p>
                            <p>Preço: R$ ${item.preco}</p>
                            <p>Quantidade: ${item.quantidade}</p>
                        </div>
                    ';
                });
            }
        }

    public function finalizarCompra($metodoPagamento, $parcelas = 1) {
        $total = $this->carrinho->calcularTotal();
        // Implementar lógica de pagamento, por exemplo, via PIX ou Cartão
        if ($metodoPagamento == 'cartao' && $parcelas > 1) {
            $totalParcelado = $total / $parcelas;
            // Lógica de pagamento parcelado
        } else {
            // Lógica de pagamento via PIX
        }

        // Para finalizar a compra e limpar o carrinho
        unset($_SESSION['carrinho']);


        // Após pagamento, limpar o carrinho
        $this->carrinho = new CarrinhoModel();

        // Redirecionar para a página de sucesso
        header('Location: sucesso.php');
    }
}

?>