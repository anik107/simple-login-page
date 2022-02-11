<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}
setcookie("anik","",time()-3600,"/");

header("Location: login.php");
die;