<?php

include 'login.html';
include './check.php';
if(!empty($_GET)){
  $pwd = $_GET['password'];
  $username = $_GET['username'];
  if(checkLogin($username,$pwd)){
    header("Refresh:1;url=index.php");
    echo "<h1>$username 登陆成功</h1>";
    $_SESSION['user']=$username;
  }
}

