<?php
echo "<b><u><font size=5>REGISTRATION FORM</font></u></b><br>";
$fname=$_POST['txt1'];
$lname=$_POST['txt2'];
$age=$_POST['txt3'];
$addr=$_POST['txt4'];
echo "Name: $fname $lname<br>";
echo "Age: $age<br>";
echo "Address:$addr<br>";
$r=$_POST['rd'];
if($r=='male')
echo "Gender:Male<br>";
else
echo "Gender:Female<br>";
echo"Languages Known:<br>";
foreach($_POST['chk'] as $selected)
{
echo $selected."<br>";
}
?>