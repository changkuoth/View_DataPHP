<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="slau_view_db"; // Database name 
$tbl_name="name_tbl"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to the Server !!!!Sorry .. try again later"); 
mysql_select_db("$db_name")or die("cannot select Database");




?>