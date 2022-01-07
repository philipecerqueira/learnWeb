<?php 
  session_start();
  if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 'Sim') {
    header('Location: index.php?login=authErro');
  }
?>