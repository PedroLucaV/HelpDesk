<?php
    session_start();
    //Remover indices da array SESSION
    //unset()

    //Destruir a variavel sessão

    session_destroy();
    header('Location: index.php')

?>