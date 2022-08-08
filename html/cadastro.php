<?php
if(isset($_POST['submit'])) 
{
    include_once('config.php');  
 
    
    $nome = $_POST['nome'];
    $nick = $_POST['nickname'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $saldo = 250.00;

   $result = mysqli_query($conn, "INSERT INTO Cadastro(email,senha,nome,nick,saldo) VALUES('$email','$senha','$nome','$nick','$saldo' )");
   header("Location:..\index.php"); 
}
?>