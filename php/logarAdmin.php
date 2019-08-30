<?php
  session_start();

  $login = $_POST["login"];
  $senhaAdmin = md5($_POST["senhaAdmin"]);
  $tipo=0;
  include_once 'conexao.php';

   $query_select = "SELECT login, senha, tipo FROM admin WHERE login = '$login' AND senha = '$senhaAdmin'";

   $resultado = $conexao->query($query_select);

   if($resultado->num_rows > 0){
      while($select=$resultado->fetch_assoc()){
        $tipo=$select["tipo"];
      }
      $_SESSION["tipoAdmin"] = $tipo;
      $_SESSION["logadoAdmin"] = true;

      header('location:../clientesLista.php');

   }else{
      unset($_SESSION["logadoAdmin"]);
      echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos.'); window.location.href='../index.php';</script>";
    }

?>