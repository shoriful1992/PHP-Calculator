<?php
error_reporting(0);

if(isset($_POST['digit']))
{
	$sum = $_POST['sum'];
	$sum = $sum.$_POST['digit'];
}
 else if($_POST['equal']=="=")
 {
 	$sum = eval('$total = '.($_POST['sum']).';');
 	$sum = $total;
 }
 else if($_POST['clear']=="C")
 {
 	$sum = '';
 }	
?>
<body>
<form action="" method="post">
	
	<table width="220px" border="1">
		<tr>
			<td colspan="3"><input type="text" name="sum" value="<?php echo ($sum) ? $sum : ''; ?>"></td>
			<td><input type="submit" name="clear" value="C"></td>
		</tr>
		<tr>
			<td><input type="submit" name="digit" value="9"></td>
			<td><input type="submit" name="digit" value="8"></td>
			<td><input type="submit" name="digit" value="7"></td>
			<td><input type="submit" name="digit" value="/"></td>
		</tr>
		<tr>
			<td><input type="submit" name="digit" value="6"></td>
			<td><input type="submit" name="digit" value="5"></td>
			<td><input type="submit" name="digit" value="4"></td>
			<td><input type="submit" name="digit" value="*"></td>
		</tr>
		<tr>
			<td><input type="submit" name="digit" value="3"></td>
			<td><input type="submit" name="digit" value="2"></td>
			<td><input type="submit" name="digit" value="1"></td>
			<td><input type="submit" name="digit" value="-"></td>
		</tr>
		<tr>
			<td><input type="submit" name="digit" value="."></td>
			<td><input type="submit" name="digit" value="0"></td>
			<td><input type="submit" name="equal" value="="></td>
			<td><input type="submit" name="digit" value="+"></td>
		</tr>
	</table>
</form>
</body>