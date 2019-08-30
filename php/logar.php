<?php
  session_start();

  $emailLogin = $_POST["emailLogin"];
  $senhaLogin = md5($_POST["senhaLogin"]);

  include_once 'conexao.php';

   $query_select = "SELECT email, senha FROM cliente WHERE email = '$emailLogin' AND senha = '$senhaLogin'";

   $resultado = $conexao->query($query_select);

   $query_select_nome = "SELECT nome FROM cliente WHERE email = '$emailLogin' AND senha = '$senhaLogin'";

   $resultado2 = $conexao->query($query_select_nome);

  $query_selectIdUsuario1 = "SELECT id_cliente FROM cliente WHERE email = '$emailLogin'";  

  $resultado6 = $conexao->query($query_selectIdUsuario1);

   if(($resultado->num_rows > 0) && ($resultado2->num_rows > 0)){
       while(($registro = $resultado2->fetch_assoc())&&($registro2 = $resultado6->fetch_assoc())){
        $nome = $registro["nome"];
        $id = $registro2["id_cliente"];

      }

      $_SESSION["id"] = $id;
      $_SESSION["nome"] = $nome;
      $_SESSION["login"] = $emailLogin;
      $_SESSION["senha"] = $senhaLogin;
      $_SESSION["logado"] = true;

      header('location:../indexUsuario.php');

   }else{
      unset ($_SESSION["login"]);
      unset ($_SESSION["senha"]);
      unset ($_SESSION["nome"]);
      unset ($_SESSION["id"]);
      unset($_SESSION["logado"]);
      echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos.'); window.location.href='../login.php';</script>";
    }

?>