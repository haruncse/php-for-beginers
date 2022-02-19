<?php

session_start();

$user_info=array();

$user_info['user_name']="50 B EVE";
$user_info['user_phone']="012324242343";

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION['user']=$user_info;

echo "Session variables are set.";


// print_r($_SESSION);

?>