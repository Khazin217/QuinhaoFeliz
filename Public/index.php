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
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/bootstrap/css/bootstrap.css"/>
    <link rel="icon" href="<?=URL?>./img/Logotipo - Quinhão Feliz.png" alt="logo tipo">
    <!-- <style>
        body{
            padding:0 10%;
        }
        img{
            width:100%; 
            heigth:100%;
            padding: 0 auto;
            margin: 0 auto;
        }
        .img2{
            position:center;
            height:90%;
            width:40%;
        }
        .img3{
            position:center;
            height:90%;
            width:40%;
        }
        .inline{
            background-position: center center;
            display: flex;
        }
        .img4{
            position:center;
            height:90%;
            width:40%;
        }
        .img5{
            position:center;
            height:90%;
            width:40%;           
        }
       
    </style> -->
</head>
<body>
    <?php
    include "../App/Views/header.php";
    $rotas = new Rota();
    ?>
   
    <?php
   // $rotas->url();
    include "../App/Views/footer.php";
    ?>
    <script src="<?=URL?>/public/bootstrap/js/bootstrap.js"></script>
    <script src="<?=URL?>/public/js/query.js"></script>
</body>
</html>