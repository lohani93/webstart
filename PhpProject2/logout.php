<?php
session_start();
var_dump($_SESSION['user']);
if(isset($_SESSION['login'])&&$_SESSION['login'])
  {    var_dump("wdQFF");
       session_destroy();
       session_unset($_SESSION['id']);
  }
  
var_dump($_SESSION['user']);
?>
