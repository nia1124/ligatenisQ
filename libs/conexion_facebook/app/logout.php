<?php 
session_start();
if(isset($_COOKIE['chsm']))
{
	setcookie("user", "$username", time()-3600, "/");
	setcookie("chsm", "logedin", time()-3600, "/");		
}
unset($_SESSION['facebook']);
header('Location: /index.php');
?>