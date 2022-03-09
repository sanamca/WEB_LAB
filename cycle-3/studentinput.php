<!DOCTYPE html>
<html>
<head>
	<title>Student Input</title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
	.box{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		width: 300px;
		height: 350px;
		background-color:#f3f3f3;
		border-radius: 15px;
		text-align: center;
	}
	input{
		width: 200px;
		height: 40px;
		border: solid 1px black;
	}
	.insert{
		width: 100px;
		height: 40px;
		border: none;
		background-color: red;
		color: white;
	}
</style>
<body>
<center>
<div class="box">
	<form action="studentinput.php" method="post">
		<h2>STUDENT DETAILS</h2>
		
		<input type="number" name="rollno" required autocomplete="off" placeholder="Roll Number"><br><br>
		<input type="text" name="name" required autocomplete="off" placeholder="Name"><br><br>
		<input type="number" name="mark" required autocomplete="off" placeholder="Mark"><br><br>
		<input type="submit" name="submit" value="INSERT" class="insert">
	</form>
</div>
</center>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","test")or die("unable to connect!!");
if(!empty($_POST))
{
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $mark=$_POST['mark'];
     $q="insert into studentdetails(rollno,name,mark)values('$rollno','$name','$mark')";
    if(mysqli_query($conn,$q)==true)
    {
        header("location:studentdetails.php");
    }
 }  
?>