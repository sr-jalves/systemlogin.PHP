<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['login'])){
          
            if(isset($_POST['acao'])){
                $login = 'jhonwick';
                $senha = 'BabaYaga';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm){
                    //LOGADO COM SUCESSO!
                    $_SESSION['login'] = $login;
                    header('Location: index.php');
                  }else{
                    //ALGUM ERRO OCORREU!
                    echo 'Dados inválidos.';   
                  }
            }
            include('login.php'); 
        }else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
            include('home.php');
        }

    ?>
</body>
</html>