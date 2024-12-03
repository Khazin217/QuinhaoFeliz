<?php
    include "./../App/configuracao.php";
    include "./../App/autoload.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NOME?></title>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/cadastrar.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/logar.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/header.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/footer.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/categorias.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/bootstrap/css/bootstrap.css"/>
    <link rel="icon" href="<?=URL?>./img/Logotipo - Quinhão Feliz.png" alt="logo tipo">
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
    <?php include "../App/Views/header.php"; 
    
    $rotas = new Rota(); ?>
<!-- Inclui o HEADER da Página -->


<!-- Começo do FOOTER-->
    <?php include "../App/Views/footer.php"; ?>
<!-- Fim do FOOTER-->

    <script src="<?=URL?>/public/bootstrap/js/bootstrap.js"></script>
    <script src="<?=URL?>/public/js/query.js"></script>
</body>
</html>