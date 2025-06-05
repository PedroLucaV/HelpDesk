<?php

    session_start();

    // $_SESSION['x'] = 'Oi, valor de sessão!';
    // print_r($_SESSION);

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;
    $usuarios_app = [
        ['id'=>1,'email'=>'admin@test.com', 'senha'=>'1234', 'perfil_id'=>1],
        ['id'=>2,'email'=>'user@test.com', 'senha'=>'1234', 'perfil_id'=>2],
        ['id'=>3,'email' => 'jose@test.com', 'senha' => '1234', 'perfil_id'=>2],
        ['id'=>4,'email' => 'maria@test.com', 'senha' => '1234', 'perfil_id'=>2]
    ];

    $perfis=[1=>'Administrativo', 2=>'Usuário'];

    // echo '<pre>';
    // print_r($usuarios_app);
    // echo '</pre>';

    foreach ($usuarios_app as $user){
        if(!$usuario_autenticado && ($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha'])){
            $usuario_autenticado =  true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }
    // echo '<hr>';
    if($usuario_autenticado){
        // echo 'Usuario Autenticado!';
        $_SESSION['AUTH'] = true;
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
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