<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=URL?>/Public/css/header.css"/>
</head>
<body>
<header>
    <div class="logo">
        <img src="img/logo-IFRO.jpg" alt="logo_IFRO">
    </div>
    <nav> <!-- começo navegação -->
        <ul class="ul">
            <li><a href="<?=URL?>./pagina/home" >Home</a></li>
            <li><a href="#footer" class="rolagem">Sobre Nos</a></li>
            <li><a href="#footer" class="rolagem">Contato</a></li>
        </ul>
    </nav> <!-- fim navegação -->
    <div class="butoes">
        <button class="btn"><a href="<?URL?>./pagina/login">Entrar</a></button>
        <button class="btn cadastra"><a href="<?=URL?>./pagina/cadastro">Cadastra-se</a></button>
    </div>
    </header>
</body>
</html>