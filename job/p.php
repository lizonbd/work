<?php
if (isset($_GET['submit']))
	{
	
	$sum= $_GET['number1']+$_GET['number2'];
	
		}	
	else 
		$sum= "please Enter your number";
	
	function  name($sum)
		{	
			echo "$sum";
		}

?>

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

			</td>
			<td>
				<input type="submit" name='submit' value="calculation">
			</td>
		</tr>
			</table>
			<div style="margin:0 635px; 0 0">
				<input type="text" value= "<?php name ($sum); ?>" placeholder="result">
			</div>
		</form>
	</body>
</htmal>

<?php


?>