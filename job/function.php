<?php

function calculation() 
{
	if(isset($_GET['submit']))
	{
		$value1 = $_GET['number1'];
		$value2 = $_GET['number2'];
		$operator = $_GET['operator'];
		$result = 'no data';

		if ($operator=='sum')
		{
			$result=$value1+$value2;
		}
		elseif ($operator=='sub')
		{
			$result=$value1-$value2;
		}
		elseif ($operator=='mul')
		{
		$result=$value1*$value2;
		}
		elseif($operator=='div')
		{
		$result = $value1/$value2;
		}

		if($value1=='' OR $value2=='')
		{ return "Please enter data"; }
		
		return $result;
	}

	return "not data";
}
?>



<html>
	<head>
		<h1 style="font-size: 90;text-align: center;color:#b254b9"><i>A Normal Calculator</i><h1>
	</head>
	<body style="background-image:url('job.jpg') ">
		<form action="" method="get">
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
			<select name="operator">
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

