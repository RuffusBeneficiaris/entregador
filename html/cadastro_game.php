<?php
if(isset($_POST['submit'])) 
{
    include_once('config.php');  
 
    
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $espaco = $_POST['espaco'];
    $categoria = $_POST['categoria'];
    $saldo = 250.00;

   $result = mysqli_query($conn, "INSERT INTO jogos(nome,categoria,valor,armazenamento) VALUES('$nome','$categoria','$valor','$espaco' )");
   echo ("Cadastrado.");

}
?>