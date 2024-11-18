<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=URL?>/Public/css/login.css"/>
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