<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/cadastro.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/footer.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/header.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/footer.css"> -->
     <title>Cadastrar</title>
</head>
<body>

    <form action="formulario" class="form">
        <h1 class="titulo" >Faça seu Cadastro</h1>
            <div>
                <label for="nome">Nome: </label>
                <input type="name" id="nome" name="nome" placeholder="Digite seu nome" required><br><br> 
                
                <label for="Email">E-mail: </label>
                <input type="email" id="Email" name="email" placeholder="Digite seu e-mail" required><br><br>

                <label for="senha">Senha: </label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required><br><br>

        
                <a style="width:10px;" href="<?=URL?>/pagina/login">Já possui uma conta? - Fazer Login.</a><br>

                <button class="botao" style="left: center; " type="submit" href="<?=URL?>./pagina/login">Cadastrar</button>
            </div>
    </form>
    
</body>
</html>