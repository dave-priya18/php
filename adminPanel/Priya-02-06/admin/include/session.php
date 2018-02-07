<?php

session_start();
if(!isset($_SESSION['admin_credential'])){
	ob_start();
	header('Location:index.php');
	
}

?>