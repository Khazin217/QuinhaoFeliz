<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        h1{
            padding:100px 20px;
            margin-top:10px;
            left: 20%;
            position:center;
            text:fixed;
            display:flex;
            margin: 0 36%;
        }
    </style>
</head>
<body>
    <h1><?php echo $dados['titulo']; ?></h1>
    <p><?php echo $dados['descricao']; ?></p>
</body>
</html>
