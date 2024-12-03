<?php
// CarrinhoModel.php

class CarrinhoModel {
    private $itens = [];

    public function adicionarItem($produto, $quantidade, $preco) {
        $this->itens[] = [
            'produto' => $produto,
            'quantidade' => $quantidade,
            'preco' => $preco,
        ];
    }

    public function removerItem($index) {
        unset($this->itens[$index]);
    }

    public function getItens() {
        return $this->itens;
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += $item['quantidade'] * $item['preco'];
        }
        return $total;
    }
}
?>
