<?php 
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$connect = mysqli_connect('localhost','root','', 'webproject');
$query = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'" or die(mysqli_error());

$verifica = mysqli_query($connect, $query);

      if (mysqli_num_rows($verifica) > 0){
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header("Location: startSession.php");
      }else{
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        echo"<script language='javascript' type='text/javascript'>alert('Login ou senha incorretos');window.location.href='index.html';</script>";
      }

?>
