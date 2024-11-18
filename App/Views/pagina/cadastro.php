<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/cadastro.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/footer.css"> -->
</head>
<body>
<!-- HEADER -->
    <?php include "../App/Views/footer.php"; ?>
<!-- HEADER -->

    <form action="fromulario" class="form">
        <h1 class="titulo" >Faça seu Cadastro</h1>
        <div>
            <label for="nome">Nome: </label>
            <input type="name" id="nome" name="nome" placeholder="Digite seu nome"><br><br> 
            
            <label for="Email">E-mail: </label>
            <input type="email" id="Email" name="email" placeholder="Digite seu e-mail"><br><br>

            <label for="senha">Senha: </label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha"><br><br>

     
            <a style="width:10px;" href="#">Já possui uma conta?<br>Fazer Loguin.</a><br>
            <button class="botao" style="left: center; " type="submit" href="<?=URL?>./pagina/login.php">Cadastrar</button>
        </div>
    </form>
</body>
</html>