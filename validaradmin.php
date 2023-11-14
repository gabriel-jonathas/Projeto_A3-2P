<?php
if(!isset($_SESSION)) {
    session_start();
  }
  
  if(($_SESSION['logado'] == false) \\ ($SESSION['nivel'] <> 1 ))
  {
      header('Location: aviso.php');
  
  }


?>