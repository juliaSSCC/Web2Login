<?php
error_reporting(-1);
require_once 'Usuario.php';
include ('conectar.php');

$usuario = new Usuario($_POST['login'], $_POST['senha']);

$login = $usuario->getLogin();
$senha = $usuario->getSenha();

 
  if( $login == null || $senha == null || $login == "" || $senha == ""){
    echo
    "<script language='javascript' type='text/javascript'>
      alert('Preencha para cadastrar!');
      window.location.href='formcadastro.php';
    </script>";
 
  }else{
    if($logarray == $login){
      echo
      "<script language='javascript' type='text/javascript'>
        alert('Esse usuário já existe');
        window.location.href='formcadastro.php';
      </script>";
      die();
    }
    else{
      $query = "INSERT INTO `usuario` (`login`,`senha`) VALUES ('$login','$senha')";
         
      if(mysqli_query($conectar,$query)){
        echo
        "<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado!');
          window.location.href='index.html'
        </script>";
      }
      else{
        echo
        "<script language='javascript' type='text/javascript'>
          alert('Não foi possível fazer cadastro!');
          window.location.href='formcadastro.php'
        </script>";
      }
    }
  }
?>