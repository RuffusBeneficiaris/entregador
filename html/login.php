<?php
if(isset($_POST['submit'])) 
{
    include_once('config.php');  
 
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    
    echo "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";

   $verifica = mysqli_query($conn,"SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
    }
    else {
      while ($dados = mysqli_fetch_array($verifica)){
        setcookie("login", $dados["nick"], time() + 36315576000, "/");
      }
        setcookie("email", $email, time() + 36315576000, "/");
        header("Location:..\index.php");
      }
    
}
?>