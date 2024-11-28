<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="vifewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/login.css">
    <title>login</title>

    <style>


    </style>
</head>
<body>
<form action="formulario" class="form">
        <h1 class="titulo" >Faça Login</h1>
            <div>
                             
                <label for="Email">E-mail: </label>
                <input type="email" id="Email" name="email" placeholder="Digite seu e-mail" required><br><br>

                <label for="senha">Senha: </label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required><br><br>

        
                <a style="width:10px;" href="<?=URL?>/pagina/login">Possui Cadastro? - Fazer cadastro.</a><br>

                <button class="botao" style="left: center; " type="submit" href="<?=URL?>./pagina/login">Cadastrar</button>
            </div>
</form>
</body>
</html>