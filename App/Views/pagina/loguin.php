<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formulario">
      <div>
        <label for="Email">E-mail: </label>
        <input type="email" id="Email" name="email"><br><br>

        <label for="senha">Senha: </label>
        <input type="pasword" id="senha" name="senha"><br><br>

        <button type="submit" href="<?=URL?>./Public/index.php">Entrar</button>
      </div>
    </form>
    
</body>
</html>