<?php

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

    if($usuario_autenticado){
        echo 'Usuario Autenticado!';
    }else{
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