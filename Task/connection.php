<?php

function create_connection()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "User";
 
 
 $_connection = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $_connection -> error);
 
 
 return  $_connection;
 }
 
function close_connection($_connection)
 {
 	 $_connection->close();
 }
   


?>