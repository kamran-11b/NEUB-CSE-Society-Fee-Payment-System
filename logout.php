<?php
session_start();

  if (isset($_SESSION["username"]) || isset($_COOKIE['username'])){
    session_destroy();
    setcookie('username','', time()-3600,'/');
    header("Location:login.php");
}
?>

