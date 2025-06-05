<?php

    session_start();

    // $_SESSION['x'] = 'Oi, valor de sessão!';
    // print_r($_SESSION);

    $usuario_autenticado = false;
    $usuarios_app = [
        ['email'=>'admin@test.com', 'senha'=>'1234'],
        ['email'=>'user@test.com', 'senha'=>'4321']
    ];

    // echo '<pre>';
    // print_r($usuarios_app);
    // echo '</pre>';

    foreach ($usuarios_app as $user){
        if(!$usuario_autenticado && ($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha'])){
            $usuario_autenticado =  true;
        }
    }
    // echo '<hr>';
    if($usuario_autenticado){
        // echo 'Usuario Autenticado!';
        $_SESSION['AUTH'] = true;
        header('Location: home.php');
    }else{
        $_SESSION['AUTH'] = false;
        header('Location: index.php?login=erro');
    }

    // //GET
    // echo $_GET['email'];
    // echo '<br>';
    // echo $_GET['senha'];

    // print_r($_POST);
    // echo '<br>';
    // echo $_POST['email'];
    // echo '<br>';
    // echo $_POST['senha'];
?>