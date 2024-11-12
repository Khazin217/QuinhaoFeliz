<?php
    include "./../App/configuracao.php";
    include "./../App/Libraries/Rota.php";
    include "./../App/Libraries/Controller.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NOME?></title>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/cadastro.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/bootstrap/css/bootstrap.css"/>
    <link rel="icon" href="<?=URL?>./img/Logotipo - Quinhão Feliz.png" alt="logo tipo">
    <link rel="stylesheet" href="Public/css/main.css">
</head>
<body>
<!-- Começo do Código do Vlibras-->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
<!-- Fim do Código do Vlibras-->

<!-- Inclui o HEADER da Página -->
    <?php include "../App/Views/header.php"; $rotas = new Rota(); ?>
<!-- Inclui o HEADER da Página -->

<!-- Conteúdo da Página -->
    <main class="conteiner_main">
        <div class="div_background">
            <h1>Quinhão Feliz</h1> <!-- Título -->
            <p>Matando sua fome, assim como matamos as filas.</p> <!-- Frase de sub-título-->
        </div>

        <div class="barra_pesquisa">
            <input type="text" placeholder="O que você procura?..." class="conteiner_pesquisa">
            <button class="butao_pesquisa">Busca Produto</button>
        </div>
        
        <div class="espaçamento"></div>

        <div class="inline">
            <a href="https://www.receiteria.com.br/receitas-de-salgados-para-festas/"><img class="img_categoria" src="Public/img/Salgados.jpg" alt="Imagem_Salvados"></a>
            <a href="http://"><img class="img_categoria" src="Public/img/Doces.jpeg" alt="Imagem _Doces"></a>
         </div>
          <div class="inline">
              <a href="http://"><img class="img_categoria" src="Public/img/Bebidas.jpg" alt="Imagem_Bebidas"></a>
             <a href="http://"><img class="img_categoria" src="Public/img/Historico.jpg" alt=Imagem_Histórico"></a>
          </div> 
    </main>
<!-- Conteúdo da Página -->

<!-- Começo do FOOTER-->
    <?php include "../App/Views/footer.php"; ?>
<!-- Começo do FOOTER-->
 
    <script src="<?=URL?>/public/bootstrap/js/bootstrap.js"></script>
    <script src="<?=URL?>/public/js/query.js"></script>
</body>
</html>