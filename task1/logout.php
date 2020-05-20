<?php
session_start();
echo $_SESSION['user'];
if(!empty($_SESSION['user'])){
  unset($_SESSION['user']);
}
header('Refresh:0;url=index.php');

