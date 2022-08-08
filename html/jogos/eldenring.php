<!DOCTYPE html>
<head>
    <title>Renan's Games - Elden Ring</title>
    <link href="..\..\style\style.css" rel="stylesheet" >
    <link href="..\..\style\jogo.css" rel="stylesheet" >

</head>
<body>
    <header>
        
        <ul class="cont_cab" >
                <li class="cabecalho"><a href="..\..\index.php"> Home</a></li>
                <li class="cabecalho">Categorias</li>
                <li class="cabecalho">Pesquisa</li>
                <li class="cabecalho"><a  href="html\login.html">Login /</a><a href="html\cadastro.html"> Cadastro</a></li>
                
        </ul>    
                
                <div  class="login">
                    <?php
                    if (isset($_COOKIE["login"])){
                        echo $_COOKIE["login"];
                    } else {
                        echo 'Não logado';
                    }
                    ?>
                </div>
                
        
        <div  class="logo"><img class="img_perf" src="..\..\img\perfil\default_perf.png" alt="Perfil"  height="42px" width="42px"></div>
    </header>
   
         <div class=conteudo_jogo>
            <div class=img_header></div>
            <h1>Hello World </h1>

         </div>
    
  


    
</body>