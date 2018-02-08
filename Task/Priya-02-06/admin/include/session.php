<?php
session_start();

if($_SERVER['PHP_SELF'] != "/php/Task/Priya-02-06/admin/index.php"){
	if(!isset($_SESSION['admin_credential'])){
	ob_start();
	header('Location:index.php');
	
}
}


?>