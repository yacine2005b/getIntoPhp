<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>CALCULATOR</title>
</head>

<body>
	<form method="post">
		<input type="number" name="num1" placeholder="number 1">
		<select name="operator">
			<option value="add">+</option>

			<option value="substract">-</option>
			<option value="multi">x</option>
			<option value="devide">/</option>

		</select>
		<input type="number" name="num2" placeholder="number 2">
		<button>calculate</button>
	</form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$num1 = filter_input(INPUT_POST,"num1",FILTER_SANITIZE_NUMBER_FLOAT);
$num2 = filter_input(INPUT_POST,"num2",FILTER_SANITIZE_NUMBER_FLOAT);
$operator = htmlspecialchars($_POST["operator"]);
   
$errors = false ; 
if(empty($num1) or empty($num2) or empty($operator)){
	echo "<div><p>fill in all the gaps</p></div>";
     exit();
}
if(!(is_numeric($num1) or is_numeric($num2))){
	echo "<div><p> only write letters</p></div>";
	$errors =true; 
	exit();
}
if(!$errors){
	$value;
	switch($operator){
		case "add":
			$value = $num1 + $num2;
		        break;
	        case "substract":
			$value = $num1 - $num2;
			break;	
		case "multi":
			$value = $num1 * $num2;
			break;	
		case "devide":
			$value = $num1 / $num2;
			break;
		default : 
		        echo"something went wrong";
	}
}
} 
echo"<div><p>the result is </p></div>".$value;
?>

</html>