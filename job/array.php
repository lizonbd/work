<html>
	<head>
		<h1 style="font-size: 90;text-align: center;color:#b254b9"><i>A Normal Calculator</i><h1>
	</head>
	<body style="background-image:url('arry.jpg') ">
		<form action ='' method="get">
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
				<input type="text" value="<?php echo cal(); ?>" placeholder="result">
			</div>
		</form>
	</body>
</htmal>

<!--########## PHP Starts ###########-->

<?php

	function cal()
	{
		
		if (isset($_GET['submit'])) 
		{
	
			$bd= array
					(
						$_GET['number1'],
						$_GET['number2'],
						$_GET['operator'],
						$result= ''
					);
		
			if ($bd[2]=='sum')
			{
				$bd[3]=$bd[0]+$bd[1];
			}
			elseif ($bd[2]=='sub')
			{
				$bd[3]=$bd[0]-$bd[1];
			}
			elseif ($bd[2]=='mul')
			{
				$bd[3]=$bd[0]*$bd[1];
			}
			elseif ($bd[2]=='div')
			{
				$bd[3]=$bd[0]/$bd[1];
			}
			if ($bd[0]=='' OR $bd[1]=='')
			{
				return "please enter data";
			}
			return $bd[3];
		}

		return "please calculation";
	}