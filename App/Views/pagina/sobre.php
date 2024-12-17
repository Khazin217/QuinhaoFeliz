<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
</head>
<body>
    <h1><?php echo $dados['titulo']; ?></h1>
    <p><?php echo $dados['descricao']; ?></p>
    <h2>Versão do sistema: <?= APP_VERSAO ?></h2>
</body>
</html>