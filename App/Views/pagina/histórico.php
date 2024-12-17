<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico</title>
    <style>
        .carrinho-container{
            display:flex;
        }
        .produto a {
            display:block;
            width:100px;
            padding: 10px;
            background-color: #5fb382;
            text-align: center;
        }

    </style>
</head>
<body>
    <h2>Carrinho TESE</h2>
    <div class="carrinho-container"></div>
    <?php
      $itens = array{['coxinha'=>'Public/img/coxinha.png', 'R$'=>'5,00'],
                     ['roque'=>'Public/img/roque.png', 'R$'=>'5,00'],
                     ['pastel'=>'Public/img/pastel.png', 'R$'=>'5,00']}
        
        foreach ($itens as $key => $value) {
            <div class="produto">
                <img src="<?php echo $value['imagem']?>" />
                <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho?</a>
            </div>
        }   
    ?>

</body>
</html>

<?php 
    if (isset($GET['adicionar'])) {
        //aciona ao carrinho
        $idProduto = (int) $_GET['adicionar'];
            echo 'produto agregado exitosamente!';
        if (isset($_SESSION[$id_Produto])) {
            $_SESSION[$idProduto]
        }
    }else {
        echo 'El producto no existe';
    }
?>  