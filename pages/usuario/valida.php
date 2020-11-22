<?php
    session_start();

    $user = @$_REQUEST['usuario'];
    $senha = @$_REQUEST['senha'];
    $logar = @$_REQUEST['logar'];

    $user1 = 'admin';
    $senha1 = '1234';

    $user2 = '1234';
    $senha2 = 'admin';

    if($logar){
        if ($user == "" || $senha == ""){
            echo "Por favor, preencha todos os campos!";
            header("Location: login.php");
        } elseif (($user == $user1 && $senha == $senha1) || ($user == $user2 && $senha == $senha2)){
                session_start();
                $_SESSION['usuario']= $user;
                $_SESSION['senha']= $senha;
                header("Location: ../../index.php");
        } else {
                echo "Usuário e/ou senha inválido(s), Tente novamente!";
                header("Location: login.php");
            }
    }


