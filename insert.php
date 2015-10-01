<?php
include_once("connect.php");

?>

<?php
// Get values from form 
$name=$_POST['Id'];
$lastname=$_POST['Fname'];
$email=$_POST['Lname'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(Id, Fname, Lname) VALUES('$name', '$lastname', '$email')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
	// my message goes here!!!!!
echo "Successful Added";
header("location:success.php");
echo "<BR>"; 	
}

else {
	// this the message with an error ..lol
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>