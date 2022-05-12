<?php
session_start();
  if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
  {
    $password=$_COOKIE['password'];
    $email=$_COOKIE['email'];

    setcookie('password',$password,time()-1);
    setcookie('email',$email,time()-1);
    session_destroy();
    
    header("location:index.php"); 
  }
  else
  {
    header("location:index.php"); 
  }
?>