<?php
include './check.php';
include './register.html';
$username = isset($_GET['username'])?$_GET['username']:'';
$password = isset($_GET['password'])?$_GET['password']:'';

if(userRegister($username,$password)){
  echo '<h1>注册成功</h1>';
}else{
  echo '<h1>注册失败</h1>';
}