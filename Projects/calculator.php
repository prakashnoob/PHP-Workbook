
<!--//simple calculator -->
<!DOCTYPE html>
<html>
<head>
<meta character="UTF-8">
<title> Calculator </title>
</head>

<body>
<form>
<input type="text" name="num1" placeholder="number 1">
<input type="text" name="num2" placeholder="number 2">

<select name ="operator">
<option>none</option>
<option>add</option>
<option>sub</option>
<option>multiply</option>
<option>division</option>
</select>
<br>

<button type = "submit" name="submit" value="submit">Calcu</button>
</form>

<p>Answer</p>

<?php
if(isset($_GET['submit'])){
	$res1=$_GET['num1'];
	$res2=$_GET['num2'];
	$operator=$_GET['operator'];

	switch($operator) {

		case "none":
			echo "You are wrong";
		break;

		case "add":
			echo $res1 + $res2;
		break;

		case "sub":
			echo $res1 - $res2;
		break;

		case "multiply":
			echo $res1 * $res2;
		break;

		case "division":
			echo $res1 / $res2;
		break;

	}

}


/*Error 1: PHP Parse error:  syntax error, unexpected '<', expecting end of file in /home/prakash/Study/PHP/W3/Project/Simple calculator.php on line 4
<?php
//simple calculator

<!DOCTYPE html>
<html>
<head>

*/

?>

