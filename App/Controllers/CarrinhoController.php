<?php
// CarrinhoController.php

class CarrinhoController {
    private $carrinho;

    public function __construct() {
        $this->carrinho = new CarrinhoModel();
    }

    public function adicionarAoCarrinho($produto, $quantidade, $preco) {
        $this->carrinho->adicionarItem($produto, $quantidade, $preco);
    }

    public function removerDoCarrinho($index) {
        $this->carrinho->removerItem($index);
    }

    public function mostrarCarrinho() {
        $itens = $this->carrinho->getItens();
        $total = $this->carrinho->calcularTotal();
        require 'views/carrinhoView.php'; // A view que exibe o carrinho
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