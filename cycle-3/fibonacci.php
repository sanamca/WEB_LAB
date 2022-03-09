<?php
$n=$_GET['txt'];
echo"<b>FIBONACCI SERIES IS...</b>";
$a=0;
$b=1;
echo $a;
echo $b;
for($i=0;$i<$n-2;$i++)
{
$c=$a+$b;
echo $c;
$a=$b;
$b=$c;
}

?> 