<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
	
	table{
		background-color:#f3f3f3;
		width: 50%;
		text-align: center;
		
		border-radius: 15px;
	}
	th{
		background-color: red;
		color: white;
		border-radius: 5px;
		height: 30px;
	}
	td{
		background-color: white;
		color: black;
		border-radius: 5px;
		height: 30px;
	}
</style>
<body>
<center>
	<h2>STUDENT DETAILS</h2>
	<table  align="center">
		<tr>
			<th>Roll Number</th>
			<th>Name</th>
			<th>Mark</th>
		</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","test")or die("unable to connect!!");
		$select = "select * from studentdetails ORDER BY `rollno`";
		$result =mysqli_query($conn,$select);
		while($row = mysqli_fetch_assoc($result)){
			?>

		<tr>
			<td><?php echo $row["rollno"]; ?></td>
			<td><?php echo $row["name"]; ?></td>
			<td><?php echo $row["mark"]; ?></td>
		</tr>
		<?php
		}
		?>
	</table>
</center>
</body>
</html>