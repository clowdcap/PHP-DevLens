<?php
    session_start();

    $cadastrar = @$_REQUEST['cCadastrar'];

    if($cadastrar){
        $user = $_GET['cNome'];
        $subuser = $_GET['cSNome'];
        $nasc = $_GET['cNasc'];
        $tel = $_GET['cTel'];
        $email = $_GET['cEmail'];
        $senha = $_GET['cSenha'];
        header("Location: ../../index.php");
    }


