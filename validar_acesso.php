<?php
  session_start();
  if(!isset($_SESSION['AUTH']) || !$_SESSION['AUTH']){
    header('Location: index.php?login=erro2');
  }
?>