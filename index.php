<?php
include_once('html/config.php');
?>

<!DOCTYPE html>
<head>
    <title>Renan's Games</title>
    <link href="style\style.css" rel="stylesheet" >

</head>
<body>
    <header>
      
        <ul class="cont_cab" >
                <li class="cabecalho">Home</li>
                <li class="cabecalho">Categorias</li>
                <li class="cabecalho">Pesquisa</li>
                <li class="cabecalho"><a  href="html\login.html">Login /</a><a href="html\cadastro.html"> Cadastro</a></li>
               <?php
                if (isset($_COOKIE["login"])){
                    $nome = $_COOKIE["login"];
                    $verifica = mysqli_query($conn,"SELECT classe FROM cadastro where nick = '$nome';");
                    while ($dados = mysqli_fetch_array($verifica)){
                        if ($dados['classe'] == "adm"){
                            echo'<li class="cabecalho"><a  href="html\cadastro_game.html">Narnia </a></li>';
                        }
                      }
                    }
                ?>
                

        </ul>    
       
                <div  class="login">    
                    <?php
                    if (isset($_COOKIE["login"])){
                        $nome = $_COOKIE["login"];
                        echo $nome;
                    ?>
                    </div>
                    <div class=saldo>
                    <?php                
                    $verifica = mysqli_query($conn,"SELECT saldo FROM cadastro where nick = '$nome';");
                    while ($dados = mysqli_fetch_array($verifica)){
                        echo "Saldo:R$ ". ltrim($dados['saldo'],"0");
                      }
                    ?></div><?php
                    } else {
                        echo 'Não logado';
                    ?></div><?php
                    }
                    ?>
                
                  
             </div> 
      
                <div class="logo"><img class="img_perf" src="img\perfil\default_perf.png" alt="Perfil"  height="42px" width="42px"></div>
          
    </header>
   
    <div class ="destaque">
      
             <ul class="jogo">
                <li>
                    <div class="imagem_jogo">
                        <img class="img_destaque    " src="img/img-game/eldenring.jpg" alt="Eldenring" height="400px" width="300px">
                    </div>
                </li>
                <li> 
                    <div  class="texto_jogo"> 
                    <h1>
                        Elden Ring
                    </h1>  
                    <br><br>

                    <p> 
                            <b>O NOVO RPG DE AÇÃO E FANTASIA.</b><br>
                            Levante-se, Maculado, e seja guiado pela graça para portar o poder do Anel Prístino e se tornar um Lorde Prístino nas Terras Intermédias.
                            <br><br>
                            • Um mundo vasto e emocionante
                            Um mundo vasto onde campos abertos e uma variedade de situações e masmorras imensas, com complexos designs tridimensionais se conectam com fluidez. Conforme explora, sinta a alegria de descobrir poderosas e desconhecidas ameaças que aguardam por você, levando a um grande senso de conquista.
                            <br><br>
                            • Crie seu próprio personagem
                            Além de personalizar a aparência do seu personagem, você pode combinar livremente armas, armaduras e magias que equipar. Você pode desenvolver seu personagem de acordo com seu estilo de jogo, como aumentar a força muscular para se tornar um poderoso guerreiro, ou dominar a magia.
                            <br><br>
                            • Um drama épico nascido de um mito
                            Uma história cheia de camadas, contada em fragmentos. Um drama épico onde os vários pensamentos dos personagens se interligam nas Terras Intermédias.
                            <br><br>
                            • Jogo on-line único que conecta você livremente aos outros
                            <br><br><br>
                            R$ 250,00

                        </p>
                    </div>
                    <a href="html\jogos\eldenring.php"><button class="button-9" role="button">Comprar</button></a>              
                </li>
            </ul>
             
    </div>

    
</body>