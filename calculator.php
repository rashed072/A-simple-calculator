<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<input type="text" name="num1" placeholder="Number1">
		<input type="text" name="num2" placeholder="Number2">
		<select name="operator">
			<option>None</option>
			<option>Add</option>
			<option>Subtract</option>
			<option>Multiply</option>
			<option>Division</option>
		</select><br>
		<button type="submit" name="submit" value="submit">Submit</button>
	</form>
	<p> The answer is:</p>
	<?php
	if(isset($_GET['submit']))
	{
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
	    $operator = $_GET['operator'];
	    switch ($operator) {
	    	case "None":
	    		echo "You have to chosse an option!";
	    		break;
	    		case 'Add':
	    		echo $result1+$result2;
	    		break;
	    		case 'Subtract':
	    		echo $result1-$result2;
	    		break;
	    		case 'Multiply':
	    		echo $result1*$result2;
	    		break;
	    		case 'Division':
	    		echo $result1/$result2;
	    		break;
	    	
	
	    }
		
	}

?>

</body>
</html>
