<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>St.lawrence University | Php Class</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="insert.php">
  <table width="75%" border="0" align="center">
      <tr>
        <td align="center"><h1>ST.LAWRENCE UNIVERSITY PHP CLASS<br /> INSERT AND VIEW DATA</h1></td>
      </tr>
    </table>
  <table width="30%" border="0" align="center">
    <tr>
      <td width="40%">FISTNAME :</td>
      <td colspan="2"><input type="text" name="Fname" id="Fname" required="required" /></td>
    </tr>
    <tr>
      <td>SECONDNAME:
        <label for="Lname"></label></td>
      <td colspan="2"><input type="text" name="Lname" id="Lname" required="required" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="19%"><input type="submit" name="button" id="button" value="Send" /></td>
      <td width="41%"><input type="reset" name="button2" id="button2" value="Reset" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Lecturer:</td>
      <td colspan="2">John Bosco Lubega</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>
    <label for="Fname"></label>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>



<title>St.lawrence University | View</title>

<?php
include_once("connect.php ");

?>
<?php
$sql= mysql_query("select * from name_tbl");
echo'<table width="43%" border="1" align="center">
  <tr>
  <h1 align="center">View All (Student_reg) Database </h1><a href="index.php">Back to Main</a>
   <td width="14%"><strong>Id</strong></td>
    <td width="43%"><strong>First Name</strong></td>
    <td width="43%"><strong>Second Name</strong></td>
  </tr>'; 
	 while($hello=mysql_fetch_array($sql)){
	 echo'
  <tr>
    <td>'.$hello[Id].'</td>
    <td>'.$hello[Fname ].'</td>
    <td>'.$hello[Lname ].'</td>
  </tr>';
}
  echo'</table>';
?>
