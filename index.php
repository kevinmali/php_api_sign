<?php
include("Config/config.php");

$config = new config();

$res = $config->connect();

if($res){
  echo "connect....";
}
else{
  echo "Not connect...";
}
?>