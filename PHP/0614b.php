<!-- functions -->

<?php
	
	if(isset($_POST['submit'])){
		$n1 = $_POST['length'];
		$n2 = $_POST['width'];


		function getArea($n1, $n2) {
			$area = $n1 * $n2;
			return 'Area of the rectangle with length ' .$n1 . ' and width ' . $n2. ' is ' . $n1 * $n2;
	}

	echo getArea($n1, $n2);
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Solve for the area of the rectangle</h1>
	<form method="POST" accept="">
		<input type="number" name="length"><br>
		<input type="number" name="width"><br>
		<input type="submit" name='submit' value="Submit">
	</form>

	<?php
		
	?>

	<!-- including and requiring files -->

	<!-- include statement -->
	<!-- you can tell php to fetch a particular file and load all of its contents -->
	<!--  -->

</body>
</html>