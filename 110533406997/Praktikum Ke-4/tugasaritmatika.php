<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Operasi Aritmatika</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<?php
	if(isset($_POST['x']) or isset($_POST['y']) ){
			$x = $_POST['x'];
			$y = $_POST['y'];
			}else{
			$x = "0";
			$y = "0";
			}
			if(isset($_POST['operator'])){
			$operator =$_POST['operator'];
			}else{
			$operator ="";
			}
			switch($operator){
			case "+":
				$z = $_POST["x"] + $_POST["y"];
			break;
			case "-":
				$z = $_POST["x"] - $_POST["y"];
			break;
			case "*":
				$z = $_POST["x"] * $_POST["y"];
			break;
			case "/":
				$z = $_POST["x"] / $_POST["y"];
			break;
			}
?>
<table>
<td>
	<tr><input type="number" name="x"
		value="<?php
		echo isset($_POST['x']) ? $_POST['x'] : '';
	?>"/></tr>
	<tr>
	<select name="operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	</tr>
	<tr><input type="number" name="y" 
		value="<?php
		echo isset($_POST['y']) ? $_POST['y'] : '';
	?>"/></tr>
	<tr><input type="submit" value="=" /></tr>
	<tr><input type="text" name="z" value="<?=$z; ?>" /></tr>
</td>
</table>
</form>

</body>
</html> 