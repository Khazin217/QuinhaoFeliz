<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="vifewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/cadastro.css">
    <title>Cadastro</title>

    <style>

.form{
  align-items: center;
  margin-left: 40%;
  margin-top: 10%;
  position: center;
  width: 20%;

    background-color: rgb(94, 150, 131);
    position: center;
    border-radius: 10px;
    padding: 10px 10px;           
    border-radius: 15px;
}
div{
    color:black;
}
.titulo{
    font-family: Arial, Helvetica, sans-serif;
}
.botao{
    height: auto;
    width: 50%;
    margin: 22%;
    margin-top: 8%;
    margin-block-end:6%;
    border-radius: 8px;
    border: none;
    padding: 10px;
    background-color: black;
    color: white;
}.botao:hover{
    background-color:rgb(93, 196, 53);
    color: rgb(255, 255, 255);
}


    </style>
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

<<<<<<< HEAD
            <label for="Senha">Confirma Senha: </label>
            <input type="password" id="senha" name="senha" placeholder="Confirme sua Senha.."> <br>

            <a class="link_login" style="width: 10px;" href="<?=URL?>/pagina/login">Já possui uma conta? - Faça Login. </a>

            <button class="botao" style="left: center;" type="submit" href="<?=URL?>/pagina/login">Cadastrar</button>
        </div>
</form>
=======
                <button class="botao" style="left: center; " type="submit" href="<?=URL?>./pagina/login">Cadastrar</button>
            </div>
</form>
</body>
</html>
>>>>>>> 40a6f4b1c8c3c873d5d37d424f69da034c4c64a3
