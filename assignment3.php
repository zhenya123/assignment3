<?php
	require(dirname(__FILE__).'/'.'ParentClass.php');
	require(dirname(__FILE__).'/'.'ChildClass.php');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<form method = "POST">
		<h1>Find out how old you \"really\" are!</h1>
		<p>Enter the exact date when you were born:</p>
    <input type = "date" name = "date" maxlength = "4" value="<?php echo isset($_POST['date']) ? $_POST['date'] : '' ?>">
    <br>
		<input type = "submit" name = "parent" id = "button" value = "Get False Answer">
		<input type = "submit" name = "child" id = "button" value = "Get True Answer">
	</form>
	<?php
		$year = 0;
		$month = 0;
		$day = 0;
 		if (isset($_POST['date'])){
			$parts = explode("-", $_POST['date']);
			$year = $parts[0];
			$month = $parts[1];
			$day = $parts[2];
		}

		if (isset($_POST['parent'])){
			$parent = new ParentClass($year);

			echo "<h2>" . $parent . "</h2>";

		}
		else if (isset($_POST['child'])){
			$child = new ChildClass($year, $month, $day);
			echo "<h2>" . $child . "</h2>";
		}
		?>
</body>

</html>
