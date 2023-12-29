<?php
header("ACCESS-Control-Allow-Methods : POST");
include("../config/config.php");

$config = new Config();

if($_SERVER['REQUEST_METHOD']== 'POST'){
    
   $username = $_POST['username'];
   $password = $_POST['password'];
   $mobilenumber = $_POST['mobilenumber'];

   $islogin = $config->login($password,$mobilenumber);
   if(islogin){
    $res['data'] = "Login succesfully..."
   }else{
    $res['data'] = "Login Failed..."
   }

}else{

$res ['error'] = 'ONLY HTTP POST METHODS ALLOW ....';
}
echo json_encode($res);
?>