<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="Public/css/estilo.css">
    <style>
  

    </style>
</head>
<body>
    <?php   
        include "../App/Views/footer.php";
    ?>
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
            <button class="botao" style="left: center; " type="submit" href="<?=URL?>./pagina/loguin.php">Cadastrar</button>
        </div>
    </form>
    
</body>
</html>