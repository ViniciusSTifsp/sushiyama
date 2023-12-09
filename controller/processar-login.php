<?php
require "../repositorio/conexao.php";
require "../Modelo/autentificacao.php";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $login = new autentificacao($conn);
        $usuario = $login->verificarUsuario($email, $senha);
        if ($usuario){
            session_start();
            $_SESSION["usuario"]=$usuario;
            header("Location: ../visao/login-realizado.php");
            exit;

        }else{
            header("Location: ../visao/login.php?erro=1");
        }
    }
?>