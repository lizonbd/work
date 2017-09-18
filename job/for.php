	<body style="background-color:cyan">
<form method='get'>
<table>
	<tr> 
		<td>Enter the text:</td>
		<td><input  type='text' name='name' placeholder='name' ></td>
	</tr>
	<tr>
		<td>Times to print:</td>
		<td><input type='text' name='number'></td>
	</tr>						
	<tr>

		<td></td>
		<td><input type='submit' value='Go'></td>
	</tr>
</table>
</form>
</body>


<?php

if(isset($_GET['name']) AND isset($_GET['number']) )
{
$data = $_GET['name'];
$num = $_GET['number'];



echo "<br>";

for($i=0;$i<$num;$i++)
	{
	if($i%2)
	echo "<span style='background-color:yellow;color:red'>".$data."</span> \n <br>";
	else
	echo $data."\n <br>";
	}
}
else
exit;
