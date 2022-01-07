<?php
    session_start();

    $auth = false;

    $usuario_app = [
        ['email' => 'admin@teste.com', 'senha' => '123456'],
        ['email' => 'user@teste.com', 'senha' => '654321'],
    ];

    foreach($usuario_app as $user){
        if ($_POST['email'] == $user['email'] &&  $_POST['password'] == $user['senha']){
            $auth = true;
        }
    } 

    if ($auth){
        header('Location: home.php');
        $_SESSION['auth'] = 'Sim';
    } else {
        header('Location: index.php?login=erro');
        $_SESSION['auth'] = 'Nao';
    }
