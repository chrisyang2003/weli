<?php
include './check.php';
echo 'username : '.$_GET['username']
    ."  <br/> password : ".$_GET['password'];

print_r(sizeof($res));