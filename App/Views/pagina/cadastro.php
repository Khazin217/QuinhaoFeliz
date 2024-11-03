<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <style>
        body{
            background-image: url("bnner-fundo.jpeg");
            
        }
        .form{
            background-color: rgba(0, 0, 0, 0.6);
            position: center;
            border-radius: 10px;
            padding: 10px 10px;           
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
           }
        div{
            color:black;
        }
        .titulo{
            font-family: Arial, Helvetica, sans-serif;
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
            <input type="name" id="nome" name="nome"><br><br> 
            
            <label for="Email">E-mail: </label>
            <input type="email" id="Email" name="email"><br><br>

            <label for="senha">Senha: </label>
            <input type="password" id="senha" name="senha"><br><br>

     
            <a style="left:10%;" href="#">Esqueceu a senha</a><br><br>
            <button style="left: center; " type="submit" href="<?=URL?>./pagina/loguin.php">Cadastrar</button>
        </div>
    </form>
    
</body>
</html>