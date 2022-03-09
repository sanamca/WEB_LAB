<?php 
 session_start();
  $amount=0;
  $usg="";
  $dt="";
  $temp="";
  if (isset($_POST['view_bill']))
   {
  $usg=$_POST['usage'];
  if($usg<=60)
  {
  	$amount=$amount+$usg*3;
  }
  else if($usg>60 && $usg<=160)
  {
  	$amount=60*3;
  	$temp=$usg-60;
  	$amount=$amount+$temp*4.40;
  }
  else if($usg>160 && $usg<=260)
  {
  	$amount=60*3+100*4.40;
  	$temp=$usg-160;
  	$amount=$amount+$temp*5.20;
  }
  else
  {
  $amount=60*3+100*4.40+100*5.20;
  $temp=$usg-260;
  $amount=$amount+$temp*6.60;
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>electricty</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Bill</h2>
  </div>
	 
  <form method="post" action="">
  	
  	<div class="input-group">
  		<label>Usage(unit)</label>
  		<input type="text" name="usage" value="<?php echo $usg ?>" required>
  	</div>
  	<div class="input-group">
  		<label>Amount</label>
  		<input type="text" name="amount" value="<?php echo $amount ?>">
  	</div>
  	<div class="input-group">
  		<input type="submit" class="btn" name="view_bill" style="margin-left: 10PX;" value="view bill">
  	</div>
  
  </form>
</body>
</html>