<?php

include './check.php';
$flag = checkUserSession();

if($flag){
  echo 'already login';
  $user = $_SESSION['user'];
  echo 
<<<php
  <h1>hello $user </h1>
  <a href="./logout.php">logout</a>
php;

}else{
  header("Refresh:1;url=login.php");
  echo 'you haven\'t login yet. refreshing after one second';
}



