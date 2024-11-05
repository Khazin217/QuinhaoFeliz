<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      body{
        background-image:url("<?=URL?>../img/banner-fundo.jpeg");
        background-repeat: no-repeat;
      }
      form{
        position: relative;
        align-items: center;
        margin-left: 35%;
        margin-top: 10%;
        position: 100%;
        width: 100%;
      }
      div{
        background-color: rgb(200, 202, 200);
        border-radius: 10px;
        align-items: auto;
        width: 30%;
        height: 70%;
        padding: 30px;
      }
      button{
        background-color: rgb(0, 0, 0);
        color: white;
        border-radius: 10px;
        padding: 9px;
        width: 100%;
      }
      button:hover{
        background-color: rgb(151, 190, 84);
      }
      label{
        width: 100px;
        padding: auto;
        height:30% ;
      }
      input{
        border-radius: 5px;
        width: 100%;
      }
    </style>
</head>
<body>
    <form action="formulario">
      <div>
        <label for="Email">E-mail: </label>
        <input type="email" id="Email" name="email" placeholder="E-mail"><br><br>

        <label for="senha">Senha: </label>
        <input type="password" id="senha" name="senha" placeholder="Senha"><br><br>

        <button type="submit" href="<?=URL?>./Public/index.php">Entrar</button>
      </div>
    </form>
    
</body>
</html>