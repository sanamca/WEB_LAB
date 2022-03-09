<?php 
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<center>
<h1><b><u>LOGIN</u></b></h1>
<form id="form1" name="form1" method="get" action="">
  <table width="200" border="1">
    <tr>
      <td>UserName</td>
      <td><input name="txt1" type="text" id="txt1" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="txt2" type="password" id="txt2" /></td>
    
</tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
      </table>
</form>
</body>
<?php
if(isset($_GET['Submit']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db='test';
$t1=$_GET['txt1'];
$t2=$_GET['txt2'];
$con=new mysqli($dbhost,$dbuser,$dbpass,$db);
$query="select uname,password from login where uname='$t1' and password='$t2'";
$result=$con->query($query);
if($rw=$result->fetch_row())

{
$_SESSION["username"]=$rw[0];
header("location:session2.php");
}
else
{
echo "Invalid";
include_once "session1.php";
}
}
?>
</html>