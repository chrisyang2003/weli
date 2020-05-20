<?php
include './mysql.php';
include './config.php';
include './session.php';
$mysql = new MMysql($CONFIG);
function checkUserSession(){
  if(!empty($_SESSION['user'])){
    return true;
  }
  return false;
}

function checkLogin($username,$password)
{
  $flag = false;
  global $mysql;
  $field = 'name,password';
  $where = "name='$username' and password='$password'";
  $res =  $mysql->field($field)
  ->where($where)
  ->select('users');
  if(sizeof($res)){
    $flag = true;
  }else{
    $flag = false;
  }
  return $flag;
}

function userRegister($username,$password){
  $flag = false;
  global $mysql;
  if(!$username || !$password) return 0;
  $data = array(
    'name'=>$username,
    'password'=>$password,
    'openId'=>time()
    );
  $res = $mysql->insert('users',$data);
  return $res;
}