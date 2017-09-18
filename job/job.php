
<html>
	<head>
		<h1 style="font-size: 90;text-align: center;color:#b254b9"><i>A Normal Calculator</i><h1>
	</head>
	<body style="background-image:url('job.jpg') ">
		<form method="get">
		<table style="background-color: #ffc433; margin: 0 450px; 0 0">

	<tr>
		<td style="font-size: 19"><li style="color: white">Enter your number:</li></td>
		<td><input type="number" name="number1" placeholder="Enter your number"></td>
		<br/>
	</tr>
	<tr>
		<td style="font-size: 19"><li style="color: white">Enter your number:</li></td>
		<td><input type="number" name="number2" placeholder="Enter your numbers"></td>
	</tr>

		</table>
			<table style="background-color: #ea64e8; margin:0 660px; 0; 0">	
		<tr>
			<td>
			<select name="value">
			<option value="sum">+</option>
			<option value="sub">-</option>
			<option value="mul">*</option>
			<option value="div">/</option>
			</select>
			</td>
			<td>
				<input type="submit" name='submit' value="calculation">
			</td>
		</tr>
			</table>
			<div style="margin:0 635px; 0 0">
				<input type="text" value= "<?php echo calculation(); ?>" placeholder="result">
			</div>
		</form>
	</body>
</htmal>

<?php

function calculation() {
		
	$d =0;
		
	if(isset($_GET['submit']))
	{

	$a = $_GET['number1'];
	$b = $_GET['number2'];
	$c = $_GET['value'];

	if ($c=="sum")
	{
		$d= $a+ $b;
	}
	elseif ($c=="sub")
	{
		$d=$a-$b;
	}
	elseif ($c=="mul")
	{
		$d=$a*$b;
	}
	elseif($c=="div")
	{
		$d=$a/$b;
	} 


}
	return "$d";
}
?>
