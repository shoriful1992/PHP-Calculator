<body>
	<form action="" method="post">
		<table width="200px" border="1">
			<tr>
			<td colspan="3"><input type="text" name="result" id="result" ></td>
				<td><input type="button" name="clear" value="c" onclick='calculation("clear")'></td>
			</tr>
			<tr>
				<td><input type="button" name="nine" value="9" onclick="calculation('9')"></td>
				<td><input type="button" name="eight" value="8" onclick="calculation('8')"></td>
				<td><input type="button" name="seven" value="7" onclick="calculation('7')"></td>
				<td><input type="button" name="divided" value="/" onclick="calculation('/')"></td>
			</tr>
			<tr>
				<td><input type="button" name="six" value="6" onclick="calculation('6')"></td>
				<td><input type="button" name="five" value="5" onclick="calculation('5')"></td>
				<td><input type="button" name="four" value="4" onclick="calculation('4')"></td>
				<td><input type="button" name="multiply" value="*" onclick="calculation('*')"></td>
			</tr>
			<tr>
				<td><input type="button" name="digit" value="3" onclick="calculation('3')"></td>
				<td><input type="button" name="digit" value="2" onclick="calculation('2')"></td>
				<td><input type="button" name="digit" value="1" onclick="calculation('1')"></td>
				<td><input type="button" name="digit" value="-" onclick='calculation("-")'></td>
			</tr>
			<tr>
				<td><input type="button" name="digit" value="." onclick="calculation('.')"></td>
				<td><input type="button" name="digit" value="0" onclick="calculation('0')"></td>
				<td><input type="button" name="equal" value="=" onclick='calculation("equal")'></td>
				<td><input type="button" name="digit" value="+"  onclick='calculation("+")'></td>
			</tr>
		</table>
	</form>

	<script type="text/javascript">
		function calculation(val)
		{
			var calvalu = val;
			var	resultValue = document.getElementById("result").value;
			if(val=="equal")
			{
				document.getElementById("result").value = eval(document.getElementById("result").value);
			}
			else if(val=="clear")
			{
				document.getElementById("result").value = '';
			}
			else
			{
				document.getElementById("result").value += val;
			}	
		}
	</script>