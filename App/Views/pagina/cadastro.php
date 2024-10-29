<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <style>
        body{
        background-image: url('<?=URL?>../App/Public/img/banner-fundo.jpeg');
        
        }
        .form{
            background-color: rgb(0, 0, 0,0.6);
            position: center;
            border-radius: 10px;
            padding: 10px 10px;           
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
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