<?php
header("ACCESS-Control-Allow-Methods : POST");
include("../config/config.php");

$config = new Config();

if($_SERVER['REQUEST_METHOD']=='POST'){
    
}else{
   $res['error'] =  "not allowd methods...";
}

echo json_encode ($res);
?>