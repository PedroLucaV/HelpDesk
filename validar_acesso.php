<?php
  session_start();
  if(!$_SESSION['AUTH']){
    header('Location: index.php?login=erro2');
  }
?>