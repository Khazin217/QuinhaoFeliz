<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEAD</title>

    <style>     
        ul{
            position: fixed;
            top: 10px;
            padding: 10px 100px;            
        }
        .nav{
            right:10px;
            padding: 10px 10px;
            display: inline ;
            margin: 0 auto;
            border-radius:10px;
            background-color:width;
        }
        .fixed{
            background-image:(url="<?=URL?>./img/bnner-fundo.jpeg");
            background-image: fixed;
            border-radius:10px;
            display:flex;
            blackground-color: #aed624;     
        }
        li{
            color: black;
            padding: 10px 20px;
            border-radius:7px;
           
            background-color:grey; 
            list-style: none;
            display:inline-block;          
        }
        li:hover{
            background: black; 
        }
        .product{
            color:black;
            border-radius:8px;
            cursor: pointer;
            background-color:#808080;
        }.product:hover{
            background-color:grey;
        }

        .entrar{
            background-color:grey;
            border-radius:8px;
        }
        .entar:hover{
            background-color:#f9f9f9;
        }
        img{
            padding: 10px 0;
        }
       li:hover{        
        background-color:gray;
        cursor: pointer;
       }
       .fixed{
        background-image: url("<?=URL?>./img/background-head.jpg");
        height: 100%;

        margin:0;
       }
       .fundohead{
        background-image:url("<?=URL?>./img/backgound-head.jpg");
       }
       .cadastrar{
        border-radius: 10px;
        background-color: black;
        color:white;
       }
       .cadastrar:hover{
        background-color:#383838;
       }
       .product{
        border-radius: 10px;
        background-color: grey;
        color:black;
       }
       .product:hover{
        background-color:white;
       }

       .home{
        border-radius: 10px;
        background-color: grey;
        color:black;
       }
       .home:hover{
        background-color:white;
       }

       .sobre{
        border-radius: 10px;
        background-color: grey;
        color:black;
       }
       .sobre:hover{
        background-color:white;
       }

       .contato{
        border-radius: 10px;
        background-color: grey;
        color:black;
       }
       .contato:hover{
        background-color:white;
       }

       .entrar{
        border-radius: 10px;
        background-color: grey;
        color:black;
       }
       .entrar:hover{
        background-color:white;
       }

       body{
        background-image:url("<?=URL?>./img/background-head.jpg");
        background-repeat:no-repeat;
        width:100%;
        padding: 10px 0px;
        height:100%;
        top:0px;
        position:auto;
       }
    </style>
</head>
<body>
    <nav class="fixed" >
    <img src="<?=URL?>./img/logo-IFRO.jpg" alt="logozin" style="width:40px; heigth:10px; position: fixed;">
        <div>
        <!--<img class="fundohead"src="<?=URL?>./imgbanner-fundo.jpeg" alt=""> -->
            <ul class="nav" >
                <li class="product" href="" >Product</li>
                <li class="home" href="<?=URL?>/" >Home</li>
                <li class="sobre" href="<?=URL?>/paginas/sobre" >Sobre</li>
                <li class="contato" href="" >Contato</li>
                <li class="entrar" href="./pagina/loguin.php" >Entrar</li>
                <li class="cadastrar" style="color:widt;" href="<?=URL?>/pagina/cadastro" >Cadastrar</li>                
            </ul>
        </div>
    </nav>   
</body>
</html>